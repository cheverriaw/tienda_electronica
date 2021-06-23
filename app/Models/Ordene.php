<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordene
 *
 * @property $id
 * @property $id_carrito
 * @property $id_productos
 * @property $cantidad
 * @property $precio
 * @property $subtotal
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrito $carrito
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordene extends Model
{
    
    static $rules = [
		'cantidad' => 'required',
		'precio' => 'required',
		'subtotal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_carrito','id_productos','cantidad','precio','subtotal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrito()
    {
        return $this->hasOne('App\Models\Carrito', 'id', 'id_carrito');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_productos');
    }
    

}
