<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    public function addProveedor(Request $request)
    {
        $proveedor = new Proveedor();
        $proveedor->nombre_proveedor = $request->nombre;
        $proveedor->email = $request->email;
        $proveedor->telefono = $request->telefono;
        $proveedor->save();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor guardado exitosamente.');
    }
    public function create()
    {
    return view('personas.addProveedor');
    }

    public function index(Request $request)
{
    $estado = $request->input('estado');
    
    $proveedores = Proveedor::when($estado, function ($query, $estado) {
        return $query->where('estado', $estado);
    })->get();

    return view('personas.proveedores', compact('proveedores', 'estado'));
}

    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('personas.editProveedor', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'estado' => 'required|in:activo,inactivo',
        ]);
    
        $proveedor = Proveedor::findOrFail($id);
    
        $proveedor->update([
            'nombre_proveedor' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'estado' => $request->estado,
        ]);
    
        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente.');
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente.');
    }

    


}
