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

Route::get('/contacts', 'ContactController@index');
Route::get('/contacts/{id}', 'ContactController@show');
Route::post('/contacts/store', 'ContactController@store');
Route::post('/contacts/update/{id}', 'ContactController@update');
Route::post('/contacts/delete/{id}', 'ContactController@destroy');