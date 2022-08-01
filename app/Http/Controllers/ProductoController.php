<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller{

    public function index()
    {
        return view('home');
    }

    public function create(Request $request){

        
        $this->validate($request,[
            'nombre' => 'String|required|max:255',
            'codigo' => 'required',
            'categoria' => 'required',
            'sucursal' => 'required',
            'descripcion' => 'String',
            'imagen' => 'required',
            'cantidad' => 'Integer',
            'precio' => 'Integer'

        ]);
        

        return view('producto.nuevo-producto');
    }

    public function control(){
        return view('');
    }

    public function show(){
        $data = Producto::all();

        return view ('producto.mostrar-productos', ['productos'=>$data]);
    }

    public function store(){
        return view('producto.detalle-producto');
    }

    public function destroy(){
        return view('producto.eliminar-producto');
    }

    public function edit(){
        return view('producto.editar-producto');
    }

 

    public function search(){
        return view('producto.consultar-producto');
    }
}