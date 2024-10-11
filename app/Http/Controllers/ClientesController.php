<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    public function addCliente(Request $request)
    {
        $cliente = new Clientes();
        $cliente->nombre_cliente = $request->nombre;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente guardado exitosamente.');
    }

    public function showClientes()
    {
        $clientes = Clientes::all();
        return view('personas.clientes', compact('clientes'));
    }

    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('personas.editCliente', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->update($request->all());

        return redirect()->route('personas.clientes')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();

        return redirect()->route('personas.clientes')->with('success', 'Cliente eliminado correctamente.');
    }
}
