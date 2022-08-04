<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index()
    {
        $data = Sucursal::get();
        return view('sucursal.mostrar',['sucursales'=>$data]);
    }

    public function destroy(){
        return view('sucursal.eliminar');
    }

    public function edit(){
        return view('sucursal.editar');
    }

    public function create()
    {
        return view('sucursal.crear');
    }

    public function store(Request $request){

        $this->validate($request, [
            'direccion' => 'required',
            'comuna' => 'required',
            'ciudad' => 'required',
            'telefono' => 'required',
            'email' => 'required'
        ]);

        $sucursal = new Sucursal();

        $sucursal->direccion = $request->direccion;
        $sucursal->comuna = $request->comuna;
        $sucursal->ciudad = $request->ciudad;
        $sucursal->telefono = $request->telefono;
        $sucursal->email = $request->email;

        $sucursal->save();

        $sucursal = Sucursal::get();

        return view('sucursal.mostrar', [
            'sucursales' => $sucursal
        ]);
    }
}
