<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $fillable = ['nombre_proveedor', 'email', 'telefono', 'estado'];

    
    public function incoming()
    {
        return $this->hasMany(Incoming::class);
    }
}
