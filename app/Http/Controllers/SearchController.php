<?php

namespace App\Http\Controllers;

use App\Models\ArticleTranslation;
use App\Models\SearchQuery;
use Carbon\Carbon;
use CodeInc\StripAccents\StripAccents;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q') ?? '';

        return $this->searchOnEloquent($query);
    }

    private function searchOnEloquent(string $query = '')
    {
        $keywords = explode(' ', trim($this->stripAccents($query)));

        $results = ArticleTranslation::query()
            ->with(['drugs' => function (Builder $query) {
                $query->select(['article_translation_id', 'name'])->orderBy('name');
            }])
            ->select(['id', 'locale', 'title', 'slug'])
            ->whereHas('article', function (Builder $query) use ($keywords) {
                foreach ($keywords as $keyword) {
                    $query->where('keywords', 'ILIKE', '%' . $keyword . '%');
                }
            })
            ->where('locale', App::currentLocale())
            ->take(25)
            ->get()
            ->map(function ($article) {
               return [
                   ...$article->toArray(),
                   'drugs' => $article->drugs->pluck('name')
               ];
            });

        if (!Auth::check()) {
            $searchQuery = new SearchQuery;
            $searchQuery->host = request()->getClientIp();
            $searchQuery->query = $query;
            $searchQuery->results = $results->count();
            $searchQuery->created_at = Carbon::now();
            $searchQuery->save();
        }

        return $results;
    }

    function stripAccents($str)
    {
        return StripAccents::strip($str);
    }
}
