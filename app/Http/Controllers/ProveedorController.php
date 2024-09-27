<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use App\Models\Clientes;

class ProveedorController extends Controller
{
    public function addPerson(Request $request){

        if ($request->categoria_id === '1') {
            // Guardar en la tabla proveedores
            $persona = new Proveedor();
            $persona -> nombre_proveedor = $request -> nombre;
            $persona -> email = $request -> email;
            $persona -> telefono = $request -> telefono;
            $persona -> save();
        } elseif ($request->categoria_id === '2') {
            // Guardar en la tabla clientes
            $persona = new Clientes();
            $persona-> nombre_cliente = $request -> nombre;
            $persona -> email = $request -> email;
            $persona -> telefono = $request -> telefono;
            $persona -> direccion = $request -> direccion;
            $persona -> save();
        }

        return redirect(route('personas'))->with('success', 'Datos guardados exitosamente.');
    }

    public function showPerson(){
        $proveedores = Proveedor::all()->map(function ($proveedor) {
        $proveedor->categoria = 'Proveedor'; 
        $proveedor->direccion = null;
        return $proveedor;
        });

        $clientes = Clientes::all()->map(function ($cliente) {
        $cliente->categoria = 'Cliente'; 
        return $cliente;
        });

        
        $datos = $proveedores->concat($clientes);

        
        return view('personas.personas', compact('datos'));
    }

}
