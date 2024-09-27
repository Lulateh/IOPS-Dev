<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    use HasFactory;

    protected $table = 'entradas'; 
    protected $fillable = [
        'cantidad_entrada', 
        'producto_id', 
        'proveedor_id'
    ];

    
    public function product()
    {
        return $this->belongsTo(Product::class, 'producto_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }
}
