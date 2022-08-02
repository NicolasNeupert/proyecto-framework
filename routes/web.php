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





//Route::resource('users', UserController::class);


/* RUTAS USERS CONTROLLERS */
//Route::get('/user/login', [UserController::class, 'login']);
//Route::get('/user/create', [UserController::class, 'create']);
/* FIN RUTAS USERS*/

//Auth::routes();
