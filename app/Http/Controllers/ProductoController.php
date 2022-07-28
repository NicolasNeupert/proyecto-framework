<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller{

    public function index(){
        $data = Producto::all();
        return view('index', ['productos'=>$data]);
    }

    public function create(){
        return view('nuevo-producto');
    }

    public function control(){
        return view('productos');
    }

    public function show(){
        return view('producto');
    }

    public function update(){
        return view('actualizar-producto');
    }

    public function destroy(){
        return view('borrar-producto');
    }

    public function edit(){
        return view('actualizar-producto');
    }
}