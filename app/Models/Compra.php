<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $id_cliente
 * @property $id_carrito
 * @property $id_pago
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrito $carrito
 * @property Cliente $cliente
 * @property Pago $pago
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_cliente','id_carrito','id_pago','total'];


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
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pago()
    {
        return $this->hasOne('App\Models\Pago', 'id', 'id_pago');
    }
    

}
