<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleTranslation;
use App\Models\Drug;
use Illuminate\Http\Request;

class DrugsController extends Controller
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
        $articleTranslationId = request('articleTranslationId');

        if(!$articleTranslationId) {
            abort(404);
        }

        $articleTranslation = ArticleTranslation::findOrFail($articleTranslationId);

        return view('admin.drugs.create', compact('articleTranslation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articleTranslation = ArticleTranslation::findOrFail($request['article_translation_id']);

        $request->validate([
            'name' => 'required|unique:drugs|max:255'
        ]);

        $drug = new Drug($request->all());
        $articleTranslation->drugs()->save($drug);

        return redirect()->route('admin.article-translations.edit', $request['article_translation_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drug = Drug::with('articleTranslation')->find($id);

        return view('admin.drugs.edit', compact('drug'));
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
            'name' => "required|unique:drugs,name,{$id}|max:255"
        ]);

        $drug = Drug::find($request->id);
        $drug->update($request->all());

        return redirect()->route('admin.article-translations.edit', $drug->article_translation_id);
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
