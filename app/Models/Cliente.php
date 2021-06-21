<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $identificacion
 * @property $direccion
 * @property $estado
 * @property $pais
 * @property $telefono
 * @property $email
 * @property $tarjeta_de_credito
 * @property $usuario
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrito[] $carritos
 * @property Compra[] $compras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'identificacion' => 'required',
		'direccion' => 'required',
		'estado' => 'required',
		'pais' => 'required',
		'telefono' => 'required',
		'email' => 'required',
		'tarjeta_de_credito' => 'required',
		'usuario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','identificacion','direccion','estado','pais','telefono','email','tarjeta_de_credito','usuario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos()
    {
        return $this->hasMany('App\Models\Carrito', 'id_cliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function compras()
    {
        return $this->hasMany('App\Models\Compra', 'id_cliente', 'id');
    }
    

}
