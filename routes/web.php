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
    return view('formulario');
});

Route::get('/usuarioaceptado','UsuariosController@index');

Route::post('/usuarioaceptado' , function () {
    return view('usuarioaceptado');
});
Route::post('/usuarionoaceptado' , function () {
    return view('usuarionoacept');
});