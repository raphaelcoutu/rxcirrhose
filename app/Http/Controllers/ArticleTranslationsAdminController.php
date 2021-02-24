<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\ArticleTranslation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ArticleTranslationsAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!request('articleId') || !request('locale')) {
            return abort(404);
        }

        $article = Article::findOrFail(request('articleId'));

        return view('admin.articleTranslations.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => [
                'required',
                Rule::unique('article_translations')->where(function ($query) use ($request) {
                    return $query->where('locale', $request['locale']);
                }),
                'max:255']
        ]);

        $slugArr = ['slug' => Str::slug($request->title)];

        ArticleTranslation::create(array_merge($request->all(), $slugArr));

        return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($locale, $slug)
    {
        $article = ArticleTranslation::with(['drugs' => function($query) {
            $query->orderBy('name');
        }])->where('slug', $slug)->where('locale', App::currentLocale())->firstOrFail();

        if(!$article->active && !Auth::check())
            return abort(403);

        return view('articleTranslations.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleTranslation = ArticleTranslation::with(['drugs' => function($query) {
            $query->orderBy('name');
        }, 'article:id,name'])->findOrFail($id);

        $article = $articleTranslation->article;

        return view('admin.articleTranslations.edit', compact('articleTranslation', 'article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => [
                'required',
                Rule::unique('article_translations')->where(function ($query) use ($request) {
                    return $query->where('locale', $request['locale']);
                })->ignore($id, 'id'),
                'max:255']
        ]);

        $slugArr = ['slug' => Str::slug($request->title)];

        ArticleTranslation::findOrFail($request->id)->update(array_merge($request->all(), $slugArr));

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
