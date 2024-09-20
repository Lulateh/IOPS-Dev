<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    
    public function products()
    {
        return $this->hasMany(Producto::class, 'proveedor_id');
    }

    public function reporte()
    {
        return $this->hasMany(Reporte::class, 'proveedor_id');
    }
}