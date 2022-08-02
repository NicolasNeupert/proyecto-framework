<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{
    public function index()
    {
        $data = Producto::all();
        return view('producto.mostrar', ['productos'=>$data]);
    }

    public function create()
    {
        return view('producto.crear');
    }

    public function destroy(){
        return view('producto.eliminar');
    }

    public function edit(){
        return view('producto.editar');
    }

    public function show(){
        return view('producto.detalle');
    }

    public function consultar(){
        return view('producto.consultar');
    }
}
