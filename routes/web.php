<?php

use App\Http\Controllers\ArticleTranslationsController;
use App\Http\Controllers\ClinicalArticlesController;
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

Route::middleware('locale')->group(function () {
    Route::get('/', [PagesController::class, 'home'])->name('/');
    Route::get('/cirrhose', fn () => app(ClinicalArticlesController::class)->redirectLegacy('cirrhosis'));
    Route::get('/cirrhosis', fn () => app(ClinicalArticlesController::class)->redirectLegacy('cirrhosis'));
    Route::get('/faq', [PagesController::class, 'faq']);
    Route::get('/child-pugh', fn () => app(ClinicalArticlesController::class)->redirectLegacy('child-pugh'));
    Route::get('/qui-sommes-nous', [PagesController::class, 'quiSommesNous']);
    Route::get('/about-us', [PagesController::class, 'aboutUs']);
    Route::get('/conditions-generales-utilisation', [PagesController::class, 'conditionsGeneralesUtilisation']);
    Route::get('/terms-of-use', [PagesController::class, 'termsOfUse']);
    Route::get('/infos-cliniques', [ClinicalArticlesController::class, 'index'])->name('clinical-articles.index.fr');
    Route::get('/clinical-info', [ClinicalArticlesController::class, 'index'])->name('clinical-articles.index.en');
    Route::get('/clinical/{locale}/{slug}', [ClinicalArticlesController::class, 'show'])->name('clinical-articles.show');

    Route::get('articles', [ArticleTranslationsController::class, 'index'])->name('article-translations.index');
    Route::get('articles/{id}', [ArticleTranslationsController::class, 'show'])->name('article-translations.show')->where('id', '[0-9]+'); // Vieille redirection
    Route::get('articles/{slug}', [ArticleTranslationsController::class, 'redirectToLocalizedArticle']); // Vieille redirection
    Route::get('articles/{locale}/{slug}', [ArticleTranslationsController::class, 'showBySlug'])->name('article-translations.showBySlug')->where('slug', '(.*)');

});

Route::get('/search', [SearchController::class, 'search']);

include __DIR__ . '/admin.php';
