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
<<<<<<< HEAD
Route::get('/productos/{id}/delete', 'App\Http\Controllers\ProductoController@delete');
Route::get('/productos/{id}/edit','App\Http\Controllers\ProductoController@edit');
Route::post('/productos/update','App\Http\Controllers\ProductoController@update');
=======
Route::put('/productos/{id}', 'App\Http\Controllers\ProductoController@update');
>>>>>>> bcc7683b0e27f69dd7b830ebac8adce24c915e3a

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

//BUSCAR
Route::get('/buscar/{search?}', 'App\Http\Controllers\ProductoController@search')->name('buscar');