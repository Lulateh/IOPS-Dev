<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "productos";
    protected $fillable = [
        'nombre',
        'marca',
        'descripcion',
        'precio',
        'imagen_url',
        'cantidad_stock',
    ];
    public function incomings()
    {
        return $this->hasMany(Incomings::class, 'producto_id');
    }

}
