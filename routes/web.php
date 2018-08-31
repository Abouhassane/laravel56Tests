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


Route::view('/', 'pages.home');

/*Route::get('articles', 'ArticlesController@index')->name('articles');
Route::get('articles/create', 'ArticlesController@create')->name('createArticle');
Route::get('articles/{id}', 'ArticlesController@show')->name('article');
Route::post('articles', 'ArticlesController@store')->name('storeArticle');
Route::post('article/{id}/edit', 'ArticlesController@edit')->name('editArticle');*/
Route::resource('articles', 'ArticlesController');

Route::get('about', function(){
	return View::make('pages.about');
});

Route::get('contact', function(){
	return View::make('pages.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
