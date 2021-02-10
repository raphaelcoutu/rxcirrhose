<?php

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
Route::get('/faq', 'PagesController@faq');
Route::get('/child-pugh', 'PagesController@childPugh');
Route::get('/qui-sommes-nous', 'PagesController@quiSommesNous');
Route::get('/conditions-generales-utilisation', 'PagesController@cgu');

Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('articles/{id}', 'ArticlesController@show')->name('articles.show')->where('id', '[0-9]+');
Route::get('articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::get('articles/{slug}', 'ArticlesController@showSlug')->name('articles.showSlug')->where('slug', '(.*)');
Route::post('articles/store', 'ArticlesController@store')->name('articles.store');
Route::put('articles/{id}', 'ArticlesController@update')->name('articles.update');

Route::get('/search', 'SearchController@search');

Route::get('drugs/{id}/create', 'DrugsController@create')->name('drugs.create');
Route::get('drugs/{id}/edit', 'DrugsController@edit')->name('drugs.edit');
Route::post('drugs/{id}/store', 'DrugsController@store')->name('drugs.store');
Route::put('drugs/{id}', 'DrugsController@update')->name('drugs.update');

Route::get('/admin', 'AdminController@getLogin')->name('admin.getLogin');
Route::post('/admin', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/reindex', 'SearchController@reindex')->name('admin.reindex');
Route::get('/logout', 'AdminController@getLogout')->name('admin.getLogout');
