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
    return view('book/home');
});

Route::get('books', 'BookController@index')->name('book.index');
Route::get('books/create', 'BookController@create')->name('book.create');
// Route::get('books/create', function () {
//     return 'coba';
// });

Route::post('books', 'BookController@store')->name('book.store');
Route::get('books/{id}', 'BookController@show')->name('book.show');

Route::get('books/{id}/edit', 'BookController@edit')->name('book.edit');
Route::patch('books/{id}', 'BookController@update')->name('book.update');

Route::delete('books/{id}', 'BookController@destroy')->name('book.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
