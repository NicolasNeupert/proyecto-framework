<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required'
        ]);

        $imagen = $request->file('imagen');

        if($imagen){
            $imagen_path = time()."-".$imagen->getClientOriginalName();
            \Storage::disk('images')->put($imagen_path, \File::get($imagen));
        }

        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->codigo = $request->codigo;
        $producto->categoria_id = $request->categoria;
        $producto->estado = $request->estado;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $imagen_path;

        $producto->save();

        $producto = Producto::get();
        $sucursal = Sucursal::get();
        return view('productos_sucursales.crear', [
            'productos' => $producto,
            'sucursales' => $sucursal,
        ]);
    }

    public function destroy(){
        return view('producto.eliminar');
    }

    // public function edit($id){
    //     $producto = Producto::where('id', $id)->get()->load('categorias');
    //     $categoriasList = Categoria::all();
    //     return view('producto.editar', [
    //         'producto' => $producto,
    //         'categorias' => $categoriasList,
    //     ]);
    // }
    public function edit($id)
    {
        $producto = Producto::where('id', $id)->get()->load('categorias');
        $categoriasList = Categoria::all();
        return view('producto.editar', [
            'producto' => $producto,
            'categorias' => $categoriasList
        ]);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        $producto->nombre = $request->input('nombre');
        $producto->codigo = $request->input('codigo');
        $producto->estado = $request->input('estado');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->imagen = $imagen_path;

        $producto->update();
        
        return redirect()->back()->with('status','Product Updated Successfully');
    }
    
    public function show($id){
        
        $producto = Producto::where('id', $id)->get()->load('categorias');

        //dd($producto);
        return view('producto.detalle', [
            'producto' => $producto
        ]);
    }

    public function getImagen($filename){
        $file = \Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    public function search($search = null){
        if($search = null){
            $search = \Request::get('search');
        }

        $producto = Producto::where('nombre', 'LIKE', '%'.$search.'%')->get();
        return view('producto.mostrar')
        ->with(
            array(
                'productos' => $producto,
                'search' => $search
            )
        );
    }
}
