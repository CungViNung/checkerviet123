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
Route::group(['prefix'=>'/'], function() {
	Route::get('', 'FrontendController@index')->name('index');
	Route::get('category/{id}', 'FrontendController@category')->name('category');
	Route::get('post/{id}', 'FrontendController@detail')->name('detail');
	Route::get('tag/{id}', 'FrontendController@tag')->name('tag');
	Route::get('search', 'FrontendController@search')->name('search');
});
