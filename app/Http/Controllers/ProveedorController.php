<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function addPerson(Request $request){
        $proveedor = new Proveedor();
        $proveedor -> nombre_proveedor = $request -> nombre;
        $proveedor -> email = $request -> email;
        $proveedor -> telefono = $request -> telefono;
        $proveedor -> save();

        return redirect(route('personas'));
    }
}
