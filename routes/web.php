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
Route::get('/', 'SiswaController@welcome');

Route::get('/index', 'SiswaController@index');

Route::get('/create', 'SiswaController@create');
Route::post('/create', 'SiswaController@store');

Route::get('/update', 'SiswaController@edit');
Route::post('/update/{id}', 'SiswaController@update');

Route::get('/destroy/{id}', 'SiswaController@destroy');
