<?php

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ArticleTranslationsController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DrugsController;
use App\Http\Controllers\ArticleRevisionsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::prefix('/admin')->name('admin.')->group(function () {

    Route::get('/articles', [ArticlesController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticlesController::class, 'create'])->name('articles.create');
    Route::get('/articles/{id}/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [ArticlesController::class, 'update'])->name('articles.update');
    Route::post('/articles', [ArticlesController::class, 'store'])->name('articles.store');

    Route::get('/article-translations/{id}/revisions', [ArticleRevisionsController::class, 'index'])->name('article-revisions.index');
    Route::get('/article-translations/{id}/revisions/create', [ArticleRevisionsController::class, 'create'])->name('article-revisions.create');
    Route::get('/article-translations/{id}/revisions/{revisionId}/edit', [ArticleRevisionsController::class, 'edit'])->name('article-revisions.edit');
    Route::put('/article-translations/{id}/revisions/{revisionId}', [ArticleRevisionsController::class, 'update'])->name('article-revisions.update');
    Route::post('/article-translations/{id}/revisions', [ArticleRevisionsController::class, 'store'])->name('article-revisions.store');

    Route::get('/article-translations/create', [ArticleTranslationsController::class, 'create'])->name('article-translations.create');
    Route::get('/article-translations/{id}/edit', [ArticleTranslationsController::class, 'edit'])->name('article-translations.edit');
    Route::put('/article-translations/{id}', [ArticleTranslationsController::class, 'update'])->name('article-translations.update');
    Route::post('/article-translations', [ArticleTranslationsController::class, 'store'])->name('article-translations.store');

    Route::get('/drugs/create', [DrugsController::class, 'create'])->name('drugs.create');
    Route::get('/drugs/{id}/edit', [DrugsController::class, 'edit'])->name('drugs.edit');
    Route::put('/drugs/{id}', [DrugsController::class, 'update'])->name('drugs.update');
    Route::post('/drugs', [DrugsController::class, 'store'])->name('drugs.store');
});

Route::get('/admin', [AuthController::class, 'getLogin'])->name('admin.getLogin');
Route::post('/admin', [AuthController::class, 'postLogin'])->name('admin.postLogin');
Route::get('/admin/reindex', [SearchController::class, 'reindex'])->name('admin.reindex');
Route::get('/logout', [AuthController::class, 'getLogout'])->name('admin.getLogout');
