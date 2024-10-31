<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Empresa extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'empresas';
    protected $fillable = ['nombre', 'direccion', 'telefono', 'correo', 'logo', 'usuario_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function incoming()
    {
        return $this->hasMany(Incoming::class);
    }

    public function sales()
    {
        return $this->hasMany(Venta::class);
    }

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    public function proveedores()
    {
        return $this->hasMany(Proveedor::class);
    }

    public function productos_reservados()
    {
        return $this->hasMany(ProductoReservado::class);
    }

    public function productos_entregados()
    {
        return $this->hasMany(ProductoEntregado::class);
    }
}