<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CategoriaController extends Controller{

    public function index(){
        $data = Categoria::all();
        return view('index', ['categorias'=>$data]);
    }

    public function create(Request $request){

        $this->validate($request,[
            'nombre' => 'String|required|max:255',
            'descripcion' => 'String'

        ]);

        

        return view('nuevo-categoria');
    }

    public function control(){
        return view('categorias');
    }

    public function show(){
        return view('categoria');
    }

    public function update(){
        return view('actualizar-categoria');
    }

    public function destroy(){
        return view('borrar-categoria');
    }

    public function edit(){
        return view('actualizar-categoria');
    }


}