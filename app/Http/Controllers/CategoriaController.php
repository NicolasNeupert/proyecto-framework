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
    public function show($id){
        
        $categoria = Categoria::where('id', $id)->get();

        //dd($categorias);
        return view('categoria.detalle', [
            'categoria' => $categoria
        ]);
    }

   
    public function search($search = null){
        if($search = null){
            $search = \Request::get('search');
        }

        $categoria = Categoria::where('nombre', 'LIKE', '%'.$search.'%')->get();
        return view('categoria.mostrar')
        ->with(
            array(
                'categorias' => $categoria,
                'search' => $search
            )
        );
    }
    
    
    public function edit($id){
        $categoria = Categoria::where('id', $id)->get();
        return view('categoria.editar', [
            'categorias' => $categoria
            
        ]);
    }


    public function update(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        Categoria::findOrFail('id', $request->id)
        ->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion
    
        ]);
        $categoria = Categoria::get();
    return view('categoria.mostrar', [
        'categorias' => $categoria,
    ]);
    }

    
}





