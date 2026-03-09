<?php

namespace App\Http\Controllers;

use App\Clinical\ClinicalArticleRepository;
use App\Models\ArticleTranslation;
use App\Models\SearchQuery;
use Carbon\Carbon;
use CodeInc\StripAccents\StripAccents;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function __construct(
        private readonly ClinicalArticleRepository $clinicalArticles,
    ) {}

    public function search(Request $request)
    {
        if (! $request->has('hl')) {
            abort(500);
        }

        $query = $request->get('q') ?? '';

        return $this->searchOnEloquent($query);
    }

    private function searchOnEloquent(string $query = '')
    {
        $keywords = explode(' ', trim($this->stripAccents($query)));

        $drugResults = ArticleTranslation::query()
            ->with(['drugs' => function (Builder $query) {
                $query->select(['article_translation_id', 'name'])->orderBy('name');
            }])
            ->select(['id', 'locale', 'title', 'slug'])
            ->whereHas('article', function (Builder $query) use ($keywords) {
                foreach ($keywords as $keyword) {
                    if ($keyword === '') {
                        continue;
                    }

                    $query->whereRaw('LOWER(keywords) LIKE ?', ['%'.Str::lower($keyword).'%']);
                }
            })
            ->where('locale', App::currentLocale())
            ->get()
            ->map(function ($article) {
                return [
                    'type' => 'drug_article',
                    'label' => App::currentLocale() === 'fr' ? 'Fiche medicamenteuse' : 'Drug datasheet',
                    'title' => $article->title,
                    'url' => route('article-translations.showBySlug', [
                        'locale' => $article->locale,
                        'slug' => $article->slug,
                        'hl' => $article->locale,
                    ]),
                    'locale' => $article->locale,
                    'drugs' => $article->drugs->pluck('name'),
                    'description' => null,
                ];
            });

        $clinicalResults = $this->clinicalArticles->all(App::currentLocale())
            ->filter(function ($article) use ($keywords) {
                return collect($keywords)
                    ->filter()
                    ->every(fn (string $keyword) => str_contains(
                        $this->stripAccents(Str::lower($article->title.' '.$article->keywords.' '.$article->plainText)),
                        $keyword
                    ));
            })
            ->map(fn ($article) => [
                'type' => 'clinical_article',
                'label' => App::currentLocale() === 'fr' ? 'Info clinique' : 'Clinical article',
                'title' => $article->title,
                'url' => $article->url(),
                'locale' => $article->locale,
                'drugs' => [],
                'description' => $article->description,
            ]);

        $results = $drugResults
            ->concat($clinicalResults)
            ->sortBy('title')
            ->take(25)
            ->values();

        if (! Auth::check()) {
            $searchQuery = new SearchQuery;
            $searchQuery->host = request()->getClientIp();
            $searchQuery->query = $query;
            $searchQuery->results = $results->count();
            $searchQuery->created_at = Carbon::now();
            $searchQuery->save();
        }

        return $results;
    }

    public function stripAccents($str)
    {
        return StripAccents::strip($str);
    }
}
