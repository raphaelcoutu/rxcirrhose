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

Route::resource('articles', 'ArticlesController');
Route::resource('drugs', 'DrugsController');

Route::get('/admin', 'AdminController@getLogin')->name('admin.getLogin');
Route::post('/admin', 'AdminController@postLogin')->name('admin.postLogin');
Route::get('/logout', 'AdminController@getLogout')->name('admin.getLogout');
