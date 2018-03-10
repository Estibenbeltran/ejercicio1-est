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
    return view('master');
});
Route::get('/catalogo', function () {
    return view('catalogo');
});
Route::get('/prueba1', function () {
    return view('prueba1');
});
Route::get('/prueba2', function () {
    return view('prueba2');
});

Route::post('busqueda','logicaController@buscar');