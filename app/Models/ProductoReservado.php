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
        'reservas_id',
        'producto_id',
        'cantidad',
        'empresa_id',
    ];

    public function producto()
    {
        return $this->belongsTo(Product::class);
    }

    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
