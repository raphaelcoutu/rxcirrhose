<?php

use App\Http\Controllers\ArticleTranslationsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SearchController;
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

Route::get('articles', [ArticleTranslationsController::class, 'index'])->name('article-translations.index');
Route::get('articles/{id}', [ArticleTranslationsController::class, 'show'])->name('article-translations.show')->where('id', '[0-9]+'); // Vieille redirection
Route::get('articles/{slug}', [ArticleTranslationsController::class, 'redirectToLocalizedArticle']); // Vieille redirection
Route::get('articles/{locale}/{slug}', [ArticleTranslationsController::class, 'showBySlug'])->name('article-translations.showBySlug')->where('slug', '(.*)');

Route::get('/search', [SearchController::class, 'search']);

include __DIR__.'/admin.php';
