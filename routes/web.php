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

// Route::post('/', [UserController::class, 'login']);
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/crear-usuario', function () {
//     return view('nuevo-usuario');
// });
// Route::get('/productos', function () {
//     return view('productos');
// });
// Route::get('/nuevo-producto', function () {
//     return view('nuevo-producto');
// });
// Route::get('/asignar-producto', function () {
//     return view('asignar-producto');
// });
// Route::get('/consultar-producto', function () {
//     return view('consultar-producto');
// });
// Route::get('/borrar-producto', function () {
//     return view('borrar-producto');
// });
// Route::get('/actualizar-producto', function () {
//     return view('actualizar-producto');
// });

