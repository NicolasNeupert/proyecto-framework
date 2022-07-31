<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;


Route::get('/home', );
Route::get('resources\views\producto\index.blade.php',[
    'uses' => 'App\Http\Controllers\ProductoController@index',
    'as' => 'producto'
]);





/* RUTAS USERS CONTROLLERS */
//Route::get('/user/login', [UserController::class, 'login']);
//Route::get('/user/create', [UserController::class, 'create']);
/* FIN RUTAS USERS*/



//Auth::routes();


