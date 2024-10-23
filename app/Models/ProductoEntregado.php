<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoEntregado extends Model
{
    use HasFactory;

    protected $table = 'productos_entregados';

    protected $fillable = [
        'id',
        'salidas_id',
        'producto_id',
        'cantidad'];

    public function salida()
    {
        return $this->belongsTo(Sales::class);
    }

    public function producto()
    {
        return $this->belongsTo(Product::class);
    }
}
