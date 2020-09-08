<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Books API 
Route::get('/books', 'ApiBookController@index');
Route::get('/books/show/{id}', 'ApiBookController@show');

Route::middleware('isApiUser')->group(function() {
  Route::post('/books/store', 'ApiBookController@store');
  Route::post('/books/update/{id}', 'ApiBookController@update');
  Route::get('/books/delete/{id}', 'ApiBookController@delete');
});

// login/register 
Route::post('/handle-register', 'ApiAuthController@handleRegister');
Route::post('/handle-login', 'ApiAuthController@handleLogin');
Route::post('/logout', 'ApiAuthController@logout');