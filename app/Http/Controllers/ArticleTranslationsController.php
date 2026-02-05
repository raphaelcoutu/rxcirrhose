<?php

namespace App\Http\Controllers;

use App\Models\ArticleRevision;
use App\Models\ArticleTranslation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ArticleTranslationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $articles = ArticleTranslation::where('locale', App::currentLocale())
                ->with('drugs', 'article')
                ->orderBy('title')
                ->get();
        } else {
            $articles = ArticleTranslation::where('locale', App::currentLocale())
                    ->where('active', true)
                    ->with('drugs', 'article')
                    ->orderBy('title')
                    ->get();
        }

        $articles = $articles->map(function ($article) {
            return [
                'id' => $article->id,
                'title' => $article->title,
                'slug' => $article->slug,
                'keywords' => $article->article->keywords ?? '',
                'drugCount' => $article->drugs->count(),
                'firstLetter' => strtoupper(substr($article->title, 0, 1)),
            ];
        });

        return view('articleTranslations.index', compact('articles'));
    }

    public function show($id)
    {
        $article = ArticleTranslation::with(['drugs' => function ($query) {
            $query->orderBy('name');
        }])->findOrFail($id);

        return redirect()->route('article-translations.showBySlug', ['locale' => $article->locale, 'slug' => $article->slug], 301);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBySlug($locale, $slug)
    {
        $article = ArticleTranslation::with(['drugs' => function ($query) {
            $query->orderBy('name');
        }])->where('slug', $slug)->where('locale', App::currentLocale())->firstOrFail();

        if (! $article->active && ! Auth::check()) {
            return abort(403);
        }

        $lastRevision = ArticleRevision::query()
            ->where('article_translation_id', $article->id)
            ->where('hidden', false)
            ->orderBy('revision_date', 'desc')
            ->orderBy('id', 'desc')
            ->first();

        return view('articleTranslations.show', compact('article', 'lastRevision'));
    }

    public function redirectToLocalizedArticle($slug)
    {
        // Si aucune locale n'est disponible dans le path
        // On redirige vers la version FR (legacy redirect)

        return redirect()->action(
            [ArticleTranslationsController::class, 'showBySlug'],
            ['locale' => 'fr', 'slug' => $slug]
        );
    }
}
