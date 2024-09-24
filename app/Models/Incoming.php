<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    use HasFactory;

    protected $table = 'entradas'; // Nombre de la tabla
    protected $fillable = [
        'cantidad_entrada', 
        'producto_id', 
        'proveedor_id'
    ];

    // Relación con Producto
    public function product()
    {
        return $this->belongsTo(Product::class, 'producto_id');
    }

    // Relación con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }
}
