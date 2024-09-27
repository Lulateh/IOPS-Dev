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

    public function inventario()
    {
        return $this->hasMany(Inventario::class, 'producto_id');
    }

    public function reporte()
    {
        return $this->hasMany(Reporte::class, 'producto_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

}
