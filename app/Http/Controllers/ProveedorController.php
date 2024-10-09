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

    public function showProveedores()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    public function update(Request $request, $id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->update($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente.');
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente.');
    }
}
