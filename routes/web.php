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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/crear-usuario', function () {
    return view('nuevo-usuario');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/nuevo-producto', function () {
    return view('nuevo-producto');
});

Route::get('/asignar-producto', function () {
    return view('asignar-producto');
});

Route::get('/consultar-producto', function () {
    return view('consultar-producto');
});
Route::get('/borrar-producto', function () {
    return view('borrar-producto');
});
Route::get('/actualizar-producto', function () {
    return view('actualizar-producto');
});

