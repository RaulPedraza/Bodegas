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
Route::get('/bodegas/edit/{id}', 'BodegaController@edit');
Route::get('/bodegas/destroy/{id}', 'BodegaController@destroy');
Route::get('/bodegas/{id}', 'BodegaController@show');
Route::post('/bodegas/{id}', 'BodegaController@update');

Route::get('/bodegas/{id}/create', 'VinoController@create');
Route::post('/bodegas/{id}', 'VinoController@store');
Route::get('/bodegas/{idBodega}/vino/edit/{idVino}', 'VinoController@edit');
Route::get('/bodegas/{idBodega}/vino/destroy/{idVino}', 'VinoController@destroy');
Route::get('/bodegas/{idBodega}/vino/{idVino}', 'VinoController@show');
Route::post('/bodegas/{idBodega}/vino/{idVino}', 'VinoController@update');


