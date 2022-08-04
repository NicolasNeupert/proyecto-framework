<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $data = Categoria::all();
        return view('categoria.mostrar',['categorias'=>$data]);
    }

    public function destroy(){
        return view('categoria.eliminar');
    }

    public function edit(){
        return view('categoria.editar');
    }

    public function create()
    {
        return view('categoria.crear');
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        $categoria = new Categoria();

        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;

        $categoria->save();

        $categoria = Categoria::get();

        return view('categoria.mostrar', [
            'categorias' => $categoria
        ]);
    }
}
