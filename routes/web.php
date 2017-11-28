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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'BookController@index')->name('home');

Route::get('/finished', 'BookController@finished');

Route::get('/add', 'BookController@create');

Route::get('/search', [
	'as' => 'search',
	'uses' =>'SearchController@books'
]);

Route::resource('/books', 'BookController');

Route::post('/books/{book}/add', 'BookController@addToBacklog');

Route::post('/books/{book}/read', 'BookController@markAsRead');

Route::get('/books/{book}', 'BookController@show');