<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sucursale
 *
 * @property $id
 * @property $comuna
 * @property $direccion
 * @property $telefonoSucursal
 * @property $emailSucursal
 * @property $horarioSucursal
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sucursale extends Model
{
    
    static $rules = [
		'comuna' => 'required',
		'direccion' => 'required',
		'telefonoSucursal' => 'required',
		'emailSucursal' => 'required',
		'horarioSucursal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['comuna','direccion','telefonoSucursal','emailSucursal','horarioSucursal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'sucursal_id', 'id');
    }
    

}
