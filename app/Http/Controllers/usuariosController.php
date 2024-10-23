<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Empresa;


use Illuminate\Http\Request;

class usuariosController extends Controller
{
    //
    public function showUsuarios()
    {
        $usuario = auth()->user();
        $empresa = Empresa::where('id', $usuario->empresa_id)->first();
        $usuarios = Usuario::all();
        
        return view('usuarios.usuarios',compact('usuarios', 'usuario', 'empresa'));
    }

    public function addUsuario(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'rol' => 'required',
            'password' => 'required',
        ]);


        $usuario = new Usuario();
        $usuario -> nombre = $request -> nombre;
        $usuario -> empresa_id = $request -> empresa_id;
        $usuario -> email = $request -> email;
        //$usuario -> estado = $request -> estado;
        $usuario -> rol = $request -> rol;
        $usuario -> password = Hash::make($request -> password);
        $usuario -> save();
        return redirect(route("usuarios")) -> with("success", "Usuario creado exitosamente");
    }
}
