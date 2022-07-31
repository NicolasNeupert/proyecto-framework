<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

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

Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('users', 'App\Http\Controllers\UserController');
Route::resource('sucursales', 'App\Http\Controllers\SucursalController');
Route::resource('categorias', 'App\Http\Controllers\CategoriaController');

/* RUTAS PRODUCTOS CONTROLLERS */

Route::get('/', [ProductoController::class, 'index']);
Route::get('/nuevo-producto', [ProductoController::class, 'create']);
Route::get('/productos', [ProductoController::class, 'control']);
Route::get('/producto/{producto}', [ProductoController::class, 'show']);
Route::get('/borrar-producto', [ProductoController::class, 'delete']);
Route::get('/actualizar-producto', [ProductoController::class, 'edit']);
Route::get('/actualizar-producto', [ProductoController::class, 'update']);


/* FIN DE RUTAS PRODUCTOS */



/* RUTAS USERS CONTROLLERS */
Route::get('/user/login', [UserController::class, 'login']);
Route::get('/user/create', [UserController::class, 'create']);
/* FIN RUTAS USERS*/


