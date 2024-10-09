<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'id',
        'cantidad_reservas',
        'fecha_salida',
        'estado',
        'cliente_id',
        'producto_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class);
    }

    public function producto()
    {
        return $this->belongsTo(Product::class);
    }

    public function productosReservados()
    {
        return $this->hasMany(ProductoReservado::class, 'reservas_id');
    }
}
