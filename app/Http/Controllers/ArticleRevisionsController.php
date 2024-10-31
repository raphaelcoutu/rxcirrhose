<?php

namespace App\Http\Controllers;

use App\Models\ArticleRevision;
use App\Models\ArticleTranslation;
use Illuminate\Http\Request;

class ArticleRevisionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $articleTranslation = ArticleTranslation::findOrFail($id);

        $revisions = ArticleRevision::whereArticleTranslationId($id)
            ->orderBy('revision_date', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.articleRevisions.index', [
            'articleTranslation' => $articleTranslation,
            'revisions' => $revisions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $articleTranslation = ArticleTranslation::findOrFail($id);
        return view('admin.articleRevisions.create', [
            'articleTranslation' => $articleTranslation
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id, Request $request)
    {
        $validated = $request->validate([
            'revision_date' => 'required|before_or_equal:today',
            'author' => 'required',
            'content' => 'required',
            'hidden' => 'nullable|boolean'
        ]);

        ArticleRevision::create([
           ...$validated,
            'article_translation_id' => $id
        ]);

        return redirect()->route('admin.article-revisions.index', $id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $revisionId)
    {
        $articleTranslation = ArticleTranslation::findOrFail($id);
        $revision = ArticleRevision::findOrFail($revisionId);


        return view('admin.articleRevisions.edit', [
            'articleTranslation' => $articleTranslation,
            'revision' => $revision
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, $revisionId)
    {
        $validated = $request->validate([
            'revision_date' => 'required|before_or_equal:today',
            'author' => 'required',
            'content' => 'required',
            'hidden' => 'nullable|boolean'
        ]);

        ArticleRevision::findOrFail($revisionId)->update($validated);

        return redirect()->route('admin.article-revisions.index', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
