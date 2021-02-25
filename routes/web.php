<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/cirrhose', 'PagesController@cirrhose');
Route::get('/cirrhosis', 'PagesController@cirrhosis');
Route::get('/faq', 'PagesController@faq');
Route::get('/child-pugh', 'PagesController@childPugh');
Route::get('/qui-sommes-nous', 'PagesController@quiSommesNous');
Route::get('/about-us', 'PagesController@aboutUs');
Route::get('/conditions-generales-utilisation', 'PagesController@conditionsGeneralesUtilisation');
Route::get('/terms-of-use', 'PagesController@termsOfUse');

Route::get('articles', 'ArticleTranslationsController@index')->name('articleTranslations.index');
Route::get('articles/{id}', 'ArticleTranslationsController@show')->name('articleTranslations.show')->where('id', '[0-9]+'); // Vieille redirection
Route::get('articles/{slug}', 'ArticleTranslationsController@redirectToLocalizedArticle'); // Vieille redirection
Route::get('articles/{locale}/{slug}', 'ArticleTranslationsController@showBySlug')->name('articleTranslations.showBySlug')->where('slug', '(.*)');

Route::get('admin/articles', 'ArticlesAdminController@index')->name('admin.articles.index');
Route::get('admin/articles/create', 'ArticlesAdminController@create')->name('admin.articles.create');
Route::get('admin/articles/{id}/edit', 'ArticlesAdminController@edit')->name('admin.articles.edit');
Route::put('admin/articles/{id}', 'ArticlesAdminController@update')->name('admin.articles.update');
Route::post('admin/articles', 'ArticlesAdminController@store')->name('admin.articles.store');

Route::get('admin/articleTranslations/create', 'ArticleTranslationsAdminController@create')->name('admin.articleTranslations.create');
Route::get('admin/articleTranslations/{id}/edit', 'ArticleTranslationsAdminController@edit')->name('admin.articleTranslations.edit');
Route::put('admin/articleTranslations/{id}', 'ArticleTranslationsAdminController@update')->name('admin.articleTranslations.update');
Route::post('admin/articleTranslations', 'ArticleTranslationsAdminController@store')->name('admin.articleTranslations.store');

Route::get('admin/drugs/create', 'DrugsAdminController@create')->name('drugs.create');
Route::get('admin/drugs/{id}/edit', 'DrugsAdminController@edit')->name('drugs.edit');
Route::put('admin/drugs/{id}', 'DrugsAdminController@update')->name('drugs.update');
Route::post('admin/drugs', 'DrugsAdminController@store')->name('drugs.store');

Route::get('/search', 'SearchController@search');

Route::get('/admin', 'AdminController@getLogin')->name('admin.getLogin');
Route::post('/admin', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/reindex', 'SearchController@reindex')->name('admin.reindex');
Route::get('/logout', 'AdminController@getLogout')->name('admin.getLogout');
