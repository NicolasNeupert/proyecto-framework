<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos';


    public function categorias(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function sucursales(){
        return $this->belongsTo(Sucursal::class, 'sucursal_id');
    }
}
