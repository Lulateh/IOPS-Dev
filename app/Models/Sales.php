<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'salidas'; 
    protected $fillable = [
        'id',
        'fecha_salida', 
        'user_id',
        'cliente_id',
        'empresa_id',
    ];

    
    public function product()
    {
        return $this->belongsTo(Product::class, 'producto_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}