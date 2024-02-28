<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesAdminController;
use App\Http\Controllers\ArticleTranslationsAdminController;
use App\Http\Controllers\ArticleTranslationsController;
use App\Http\Controllers\DrugsAdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'home'])->name('/');
Route::get('/cirrhose', [PagesController::class, 'cirrhose']);
Route::get('/cirrhosis', [PagesController::class, 'cirrhosis']);
Route::get('/faq', [PagesController::class, 'faq']);
Route::get('/child-pugh', [PagesController::class, 'childPugh']);
Route::get('/qui-sommes-nous', [PagesController::class, 'quiSommesNous']);
Route::get('/about-us', [PagesController::class, 'aboutUs']);
Route::get('/conditions-generales-utilisation', [PagesController::class, 'conditionsGeneralesUtilisation']);
Route::get('/terms-of-use', [PagesController::class, 'termsOfUse']);

Route::get('articles', [ArticleTranslationsController::class, 'index'])->name('articleTranslations.index');
Route::get('articles/{id}', [ArticleTranslationsController::class, 'show'])->name('articleTranslations.show')->where('id', '[0-9]+'); // Vieille redirection
Route::get('articles/{slug}', [ArticleTranslationsController::class, 'redirectToLocalizedArticle']); // Vieille redirection
Route::get('articles/{locale}/{slug}', [ArticleTranslationsController::class, 'showBySlug'])->name('articleTranslations.showBySlug')->where('slug', '(.*)');

Route::get('admin/articles', [ArticlesAdminController::class, 'index'])->name('admin.articles.index');
Route::get('admin/articles/create', [ArticlesAdminController::class, 'create'])->name('admin.articles.create');
Route::get('admin/articles/{id}/edit', [ArticlesAdminController::class, 'edit'])->name('admin.articles.edit');
Route::put('admin/articles/{id}', [ArticlesAdminController::class, 'update'])->name('admin.articles.update');
Route::post('admin/articles', [ArticlesAdminController::class, 'store'])->name('admin.articles.store');

Route::get('admin/articleTranslations/create', [ArticleTranslationsAdminController::class, 'create'])->name('admin.articleTranslations.create');
Route::get('admin/articleTranslations/{id}/edit', [ArticleTranslationsAdminController::class, 'edit'])->name('admin.articleTranslations.edit');
Route::put('admin/articleTranslations/{id}', [ArticleTranslationsAdminController::class, 'update'])->name('admin.articleTranslations.update');
Route::post('admin/articleTranslations', [ArticleTranslationsAdminController::class, 'store'])->name('admin.articleTranslations.store');

Route::get('admin/drugs/create', [DrugsAdminController::class, 'create'])->name('drugs.create');
Route::get('admin/drugs/{id}/edit', [DrugsAdminController::class, 'edit'])->name('drugs.edit');
Route::put('admin/drugs/{id}', [DrugsAdminController::class, 'update'])->name('drugs.update');
Route::post('admin/drugs', [DrugsAdminController::class, 'store'])->name('drugs.store');

Route::get('/search', [SearchController::class, 'search']);

Route::get('/admin', [AdminController::class, 'getLogin'])->name('admin.getLogin');
Route::post('/admin', [AdminController::class, 'postLogin'])->name('admin.postLogin');
Route::get('/admin/reindex', [SearchController::class, 'reindex'])->name('admin.reindex');
Route::get('/logout', [AdminController::class, 'getLogout'])->name('admin.getLogout');
