<?php

namespace App\Http\Controllers;

use App\Clinical\ClinicalArticleRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;

class ClinicalArticlesController extends Controller
{
    public function __construct(
        private readonly ClinicalArticleRepository $articles,
    ) {}

    public function index(): View
    {
        return view('clinicalArticles.index', [
            'articles' => $this->articles->all(App::currentLocale()),
        ]);
    }

    public function show(string $locale, string $slug): View
    {
        abort_unless($locale === App::currentLocale(), 404);

        $article = $this->articles->findBySlug($locale, $slug);
        abort_unless($article !== null, 404);

        return view('clinicalArticles.show', [
            'article' => $article,
            'alternateUrls' => $this->articles->localesForKey($article->key)
                ->map(fn ($alternateArticle) => $alternateArticle->url()),
        ]);
    }

    public function redirectLegacy(string $key): RedirectResponse
    {
        $article = $this->articles->findByKeyAndLocale($key, App::currentLocale());
        abort_unless($article !== null, 404);

        return redirect()->to($article->url(), 301);
    }
}
