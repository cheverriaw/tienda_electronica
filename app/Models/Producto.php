<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $id_categoria
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $cantidad
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property DetalleCarrito[] $detalleCarritos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'cantidad' => 'required',
		'foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_categoria','nombre','descripcion','precio','cantidad','foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleCarritos()
    {
        return $this->hasMany('App\Models\DetalleCarrito', 'id_productos', 'id');
    }
    

}
