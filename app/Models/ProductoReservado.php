<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoReservado extends Model
{
    use HasFactory;

    protected $table = "productos_reservados";

    protected $fillable = [
        'id',
        'reserva_id',
        'producto_id',
        'cantidad',
    ];

    public function producto()
    {
        return $this->belongsTo(Product::class);
    }

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
