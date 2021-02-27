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
Route::get('/about', 'PagesController@about');

//Route::get('/guru', 'GuruController@index');

//teachers
Route::get('/teachers', 'TeachersController@index');

Route::get('/teachers/create', 'TeachersController@create');
Route::get('/teachers/{teacher}', 'TeachersController@show');
Route::post('/teachers', 'TeachersController@store');
Route::delete('/teachers/{teacher}','TeachersController@destroy');
Route::get('/teachers/{teacher}/edit', 'TeachersController@edit');
Route::patch('/teachers/{teacher}', 'TeachersController@update');