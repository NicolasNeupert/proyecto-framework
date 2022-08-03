<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    public function index()
    {
        $data = Sucursal::all();
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
}
