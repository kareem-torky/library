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

Route::get('/', function () {
    return view('welcome');
});


// Books:read 
Route::get('/books', 'BookController@index')->name('books.index');

Route::get('/books/show/{id}', 'BookController@show')->name('books.show');

// Books:create 
Route::get('/books/create', 'BookController@create')->name('books.create');

Route::post('/books/store', 'BookController@store')->name('books.store');

// Books:update
Route::get('/books/edit/{id}', 'BookController@edit')->name('books.edit');

Route::post('/books/update/{id}', 'BookController@update')->name('books.update');

// Books:delete 
Route::get('/books/delete/{id}', 'BookController@delete')->name('books.delete');
