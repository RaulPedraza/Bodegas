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


Route::get('/bodegas', 'BodegaController@index');
Route::get('/bodegas/create', 'BodegaController@create');
Route::post('/bodegas', 'BodegaController@store');
Route::get('/bodegas/{id}', 'BodegaController@show');

Route::get('/bodegas/{id}/create', 'VinoController@create');
Route::post('/bodegas/{id}', 'VinoController@store');
Route::get('/vinos/{id}', 'VinoController@show');
