<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Producto_Sucursal;

class ProductosconsucursalesController extends Controller
{
    public function index()
    {
        $data = Producto_Sucursal::get()->load('sucursales')->load('productos');
        $sucursal = Sucursal::all();
        $producto = Producto::all();
        return view('productos_sucursales.mostrar', [
            'productos_sucursales' => $data,
            'sucursales' => $sucursal,
            'productos' => $producto
        ]);
    }
    public function create()
    {   
        $producto = Producto::all();
        $sucursalList = Sucursal::all();
        return view('productos_sucursales.crear', [
            'productos' => $producto,
            'sucursales' => $sucursalList
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cantidad' => 'required',
            'producto' => 'required',
            'sucursal' => 'required'
        ]);

        $producto_sucursal = new Producto_Sucursal();

        $producto_sucursal->producto_id = $request->producto;
        $producto_sucursal->sucursal_id = $request->sucursal;
        $producto_sucursal->cantidad = $request->cantidad;

        $producto_sucursal->save();

        $producto = Producto::all();
        $sucursal = Sucursal::all();
        $producto_sucursal = Producto_Sucursal::all();
        return view('productos_sucursales.mostrar', [
            'productos' => $producto,
            'sucursales' => $sucursal,
            'productos_sucursales' => $producto_sucursal
        ]);
    }

    public function edit($id){

        $producto=Producto::where('id', $id)->get();
        $producto_sucursal_List = Producto_Sucursal::all();  

        return view('productos_sucursales.crear', [
            'productos_sucursales' => $producto_sucursal_List,
            'productos' => $producto
        ]);
    }



    public function update(Request $request){
        $this->validate($request, [
            'cantidad' => 'required',
            'producto' => 'required',
            'sucursal' => 'required'
        ]);

        
        Producto::findOrFail('id', $request->id)
        ->update([
            'cantidad' => $request->cantidad,
            'sucursal' => $request->sucursal,
            'producto' => $request->input('producto')
        ]);
        

        $producto_sucursal = Producto_Sucursal::get();

        return view('productos_sucursales.mostrar', [
            'productos_sucursales' => $producto_sucursal
        ]);
    }

    public function destroy($id){
        Producto_Sucursal::destroy($id);
        $producto_sucursal = Producto_Sucursal::get();
        return view('productos_sucursales.mostrar', [
            'productos_sucursales' => $producto_sucursal
        ]);
    }
}

