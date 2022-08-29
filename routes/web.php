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
Route::get('/productos/{id}/delete', 'App\Http\Controllers\ProductoController@delete');
Route::get('/productos/{id}/edit','App\Http\Controllers\ProductoController@edit');
Route::post('/productos/update','App\Http\Controllers\ProductoController@update');

/*SUCURSALES*/
Route::resource('/sucursales', 'App\Http\Controllers\SucursalController');

/*CATEGORIAS*/
Route::resource('/categorias', 'App\Http\Controllers\CategoriaController');
Route::get('/categorias/{id}', 'App\Http\Controllers\CategoriaController@show');
Route::get('/categorias/{id}/edit','App\Http\Controllers\CategoriaController@edit');
Route::post('/categorias/update','App\Http\Controllers\CategoriaController@update');

/*PRODUCTOS SUCURSALES*/
Route::resource('/productosconsucursales', 'App\Http\Controllers\ProductosconsucursalesController');
Route::get('/productosconsucursales/create','App\Http\Controllers\ProductosconsucursalesController@create')->name('asignarProducto');
Route::get('/productosconsucursales/{id}/edit','App\Http\Controllers\ProductosconsucursalesController@edit');
Route::get('/productosconsucursales/update','App\Http\Controllers\ProductosconsucursalesController@update');

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