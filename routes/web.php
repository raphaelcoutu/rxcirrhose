<?php

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

Route::resource('articles', 'ArticlesController');

Route::get('drugs/{id}/create', 'DrugsController@create')->name('drugs.create');
Route::get('drugs/{id}/edit', 'DrugsController@edit')->name('drugs.edit');
Route::post('drugs/{id}/store', 'DrugsController@store')->name('drugs.store');
Route::put('drugs/{id}', 'DrugsController@update')->name('drugs.update');

Route::get('/admin', 'AdminController@getLogin')->name('admin.getLogin');
Route::post('/admin', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/logout', 'AdminController@getLogout')->name('admin.getLogout');
