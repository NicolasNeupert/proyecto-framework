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

Route::get('/create-user', function () {
    return view('nuevo-usuario');
});

Route::get('/nuevo-producto', function () {
    return view('nuevo-producto');
});

Route::get('/nuevo-producto/eliminar', function () {
    return view('formulario-producto');
});

Route::get('/nuevo-producto/editar', function () {
    return view('formulario-producto');
});
Route::get('/borrar', function () {
    return view('borrar-producto');
});
Route::get('/actualizacion', function () {
    return view('actualizacion-productos');
});

