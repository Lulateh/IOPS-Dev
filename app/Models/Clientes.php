<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    protected $fillable = ['nombre_cliente', 'email', 'telefono', 'direccion', 'estado', 'empresa_id'];

    
    public function incoming()
    {
        return $this->hasMany(Incoming::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}