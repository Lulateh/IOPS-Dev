<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = 'reportes';

    protected $fillable = [
        'producto_id',
        'cantidad_entradas',
        'cantidad_salidas',
        'tipo_reporte',
        'ganancias',
        'fecha_inicio',
        'fecha_fin',
    ];

   
    public function products()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }
}