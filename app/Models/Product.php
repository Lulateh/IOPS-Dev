<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Product extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = "productos";
    protected $fillable = [
        'nombre',
        'marca',
        'descripcion',
        'precio_venta',
        'precio_compra',
        'fecha_vencimiento',
        'imagen_url',
        'ubicacion_bodega',
        'proveedor_id',
        'cantidad_stock',
        'empresa_id',
    ];
    public function incomings()
    {
        return $this->hasMany(Incoming::class, 'producto_id');
    }

    public function empresas(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
