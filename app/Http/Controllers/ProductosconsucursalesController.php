<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;
use App\Models\Producto_Sucursal;

class ProductosconsucursalesController extends Controller
{
    //
    public function create()
    {
        $productosList = Producto::all();
        $categoriasList = Categoria::all();
        $sucursalList = Sucursal::all();
        return view('productos_sucursales.crear', [
            'productos' => $productosList,
            'categorias' => $categoriasList,
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
        return view('producto.mostrar', [
            'productos' => $producto
        ]);

    }
}
