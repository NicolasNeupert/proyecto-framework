<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos_sucursales';


    public function productos(){
        return $this->belongsTo('App\Models\Productos', 'productos_id');
    }
    public function sucursales(){
        return $this->belongsTo('App\Models\Sucursal', 'sucursal_id');
    }
}
