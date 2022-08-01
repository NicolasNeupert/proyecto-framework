<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
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


Route::get('/', [InicioController::class, 'index'])->name('home');




Route::resource('productos', ProductoController::class)->names([
    'create' => 'producto.nuevo-producto',
    'store' => 'producto.detalle-producto',
    'show' => 'producto.mostrar-productos',
    'edit' => 'producto.editar-producto',
    'destroy' => 'producto.eliminar-producto',
]);





/*
Route::resource('productos', [ProductoController::class, 'create'])->name('create');
Route::resource('productos', [ProductoController::class, 'destroy'])->name('destroy');

*/


Route::resource('users', UserController::class);
/*
Route::resource('sucursales', SucursalController::class);
Route::resource('categorias', CategoriaController::class);
*/





/* RUTAS USERS CONTROLLERS */
Route::get('/user/login', [UserController::class, 'login']);
Route::get('/user/create', [UserController::class, 'create']);
/* FIN RUTAS USERS*/

Auth::routes();

