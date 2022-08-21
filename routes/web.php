<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductoController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\Categoriacontroller;
use App\Http\Controllers\Productos_SucursalesController;

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

Route::get('/','App\Http\Controllers\InicioController@index');

/*PRODUCTOS*/
Route::resource('/productos', 'App\Http\Controllers\ProductoController');

Route::get('/productos/{id}', 'App\Http\Controllers\ProductoController@show');

/*SUCURSALES*/
Route::resource('/sucursales', 'App\Http\Controllers\SucursalController');

/*CATEGORIAS*/
Route::resource('/categorias', 'App\Http\Controllers\CategoriaController');

/*PRODUCTOS SUCURSALES*/
Route::resource('/productosconsucursales', 'App\Http\Controllers\ProductosconsucursalesController');

/*USUARIOS*/
Route::resource('/users','App\Http\Controllers\UserController');
Route::get('/user/login', 'App\Http\Controllers\UserController@login');
Route::get('/user/create', 'App\Http\Controllers\UserController@create');

//Auth::routes();

Auth::routes();

//recuperar imagen
Route::get('miniatura/{filename}', 'App\Http\Controllers\ProductoController@getImagen');