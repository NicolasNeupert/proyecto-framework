<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;

class ProductoController extends Controller
{
    public function index()
    {
        $data = Producto::get() -> load('categorias');
        return view('producto.mostrar', ['productos' => $data]);
    }

    public function create()
    {
        $categoriasList = Categoria::all();
        $sucursalList = Sucursal::all();
        return view('producto.crear', [
            'categorias' => $categoriasList,
            'sucursales' => $sucursalList
        ]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'nombre' => 'required',
            'codigo' => 'required',
            'categoria' => 'required',
            'sucursal' => 'required',
            'estado' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->codigo = $request->codigo;
        $producto->categoria_id = $request->categoria;
        $producto->sucursal_id = $request->sucursal;
        $producto->estado = $request->estado;
        $producto->cantidad = $request->cantidad;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;

        $producto->save();

        $producto = Producto::get();

        return view('producto.mostrar', [
            'productos' => $producto
        ]);
    }

    public function destroy(){
        return view('producto.eliminar');
    }

    public function edit($id){
        $producto = Producto::where('id', $id)->get()->load('categorias')->load('sucursales');
        $categoriasList = Categoria::all();
        $sucursalList = Sucursal::all();
        return view('producto.editar', [
            'producto' => $producto,
            'categorias' => $categoriasList,
            'sucursales' => $sucursalList
        ]);
    }

    public function show($id){
        
        $producto = Producto::where('id', $id)->get()->load('categorias')->load('sucursales');

        //dd($producto);
        return view('producto.detalle', [
            'producto' => $producto
        ]);
    }

    public function consultar(){
        return view('producto.consultar');
    }
}
