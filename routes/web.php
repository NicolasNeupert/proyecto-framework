<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductoController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\Categoriacontroller;

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

///////---------------PRODUCTOS--------------------------//////////////
Route::resource('productos', 'App\Http\Controllers\ProductoController');

// MOSTRAR TODOS LOS PRODUCTOS POR SU ID
Route::get('/producto/mostrar','App\Http\Controllers\ProductoController@index');

//  ELIMINAR PRODUCTO
Route::get('/producto/eliminar','App\Http\Controllers\ProductoController@destroy');

// MOSTRAR PRODUCTO POR ID 
Route::get('/producto/detalle','App\Http\Controllers\ProductoController@show');

// ACTUALIZAR PRODUCTO
Route::post('/producto/actualizar/{id}','App\Http\Controllers\ProductoController@update');

// CREAR PRODUCTO
Route::get('/producto/crear','App\Http\Controllers\ProductoController@create');

// EDITAR PRODUCTO
Route::get('/producto/editar','App\Http\Controllers\ProductoController@edit');

// DETALLE PRODUCTO
Route::get('/producto/detalle','App\Http\Controllers\ProductoController@show');

// DETALLE PRODUCTO
Route::get('/producto/consultar','App\Http\Controllers\ProductoController@consultar');


///////---------------SUCURSALES--------------------------//////////////
Route::resource('sucursales', 'App\Http\Controllers\SucursalController');
// MOSTRAR SUCURSALES
Route::get('/sucursal/mostrar','App\Http\Controllers\SucursalController@index');
//  ELIMINAR SUCURSAL
Route::get('/sucursal/eliminar','App\Http\Controllers\SucursalController@destroy');
// EDITAR SUCURSAL
Route::get('/sucursal/editar','App\Http\Controllers\SucursalController@edit');
// CREAR SUCURSAL
Route::get('/sucursal/crear','App\Http\Controllers\SucursalController@create');


///////---------------CATEGORIAS--------------------------//////////////
Route::resource('categorias', 'App\Http\Controllers\CategoriaController');

// MOSTRAR CATEGORIA
Route::get('/categoria/mostrar','App\Http\Controllers\CategoriaController@index');
//  ELIMINAR CATEGORIA
Route::get('/categoria/eliminar','App\Http\Controllers\CategoriaController@destroy');
// EDITAR CATEGORIA
Route::get('/categoria/editar','App\Http\Controllers\CategoriaController@edit');
// CREAR CATEGORIA
Route::get('/categoria/crear','App\Http\Controllers\CategoriaController@create');





Route::resource('users','App\Http\Controllers\UserController');


/* RUTAS USERS CONTROLLERS */
Route::get('/user/login', 'App\Http\Controllers\UserController@login');
Route::get('/user/create', 'App\Http\Controllers\UserController@create');
/* FIN RUTAS USERS*/

//Auth::routes();

Auth::routes();


