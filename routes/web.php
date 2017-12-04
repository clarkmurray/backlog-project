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

Route::get('/search/books/{isbn}', function($isbn) {
	return view('searchedBook')->with('isbn', $isbn);
});

Route::get('/search/movies/{id}', function($id) {
	return view('searchedMovie')->with('id', $id);
});

Route::resource('/books', 'BookController');

Route::get('/wpm-test', 'BookController@wpmTest');

Route::get('/wpm-store', 'BookController@storeWPM');

Route::post('/books/{book}/add', 'BookController@addToBacklog');

Route::post('/books/{book}/remove', 'BookController@destroy');

Route::post('/books/{book}/read', 'BookController@markAsRead');

Route::post('/books/{book}/not-read', 'BookController@removeRead');

Route::get('/books/{book}', 'BookController@show');

Route::get('/param-store', 'SearchController@storeSearch');

Route::get('/new-book', 'BookController@newBook');

Route::get('/new-book-read', 'BookController@newBookRead');

Route::get('/validate-book/{author}/{title}/{isbn}', 'SearchController@validateBook');



// Movies

Route::post('/movies/add', 'MovieController@store');

Route::get('/movie-backlog', 'MovieController@index');

Route::get('/watched', 'MovieController@watched');

Route::get('movies/{movie}', 'MovieController@show');

Route::post('movies/{movie}/add', 'MovieController@addToBacklog');

Route::post('movies/{movie}/remove', 'MovieController@destroy');

Route::post('movies/{movie}/watched', 'MovieController@markAsWatched');

Route::post('movies/{movie}/not-watched', 'MovieController@removeWatched');