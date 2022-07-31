<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class SucursalController extends Controller{

    public function index(){
        $data = Sucursal::all();
        return view('index', ['sucursales'=>$data]);
    }

    public function create(Request $request){

        $this->validate($request,[
            'comuna' => 'String|required|max:255',
            'direccion' => 'required',
            'telefonoSucursal' => 'required',
            'emailSucursal' => 'required',
            'horarioSucursal' => 'required',

        ]);

        return view('nuevo-sucursal');
    }

    public function control(){
        return view('sucursales');
    }

    public function show(){
        return view('sucursal');
    }

    public function update(){
        return view('actualizar-sucursal');
    }

    public function destroy(){
        return view('borrar-sucursal');
    }

    public function edit(){
        return view('actualizar-sucursal');
    }
}