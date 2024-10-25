<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Empresa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsuarios()
    {
        $usuario = auth()->user();
        $empresa = Empresa::where('id', $usuario->empresa_id)->first();
        $usuarios = Usuario::all();
        
        return view('users.usuarios',compact('usuarios', 'usuario', 'empresa'));
    }
    public function user(){
        return view('users.editUsers');
    }

    public function edit($id)
    {
        
        // Obtener el usuario de la base de datos
        $existingUser = Usuario::findOrFail($id);
        $roles = [
            'administrador' => 'Administrador',
            'colaborador' => 'Colaborador',
            'supervisor' => 'Supervisor',
        ];
        $status = [
            'activo' => 'Activo',
            'inactivo' => 'Inactivo',
        ];

        // Retornar la vista de edición con los datos del usuario
        return view('users.editUsers', compact('existingUser','roles','status'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'username' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'status' => 'required|in:activo,inactivo',
            'rol' => 'required|in:administrador,colaborador,supervisor',
        ]);

        $existingUser =Usuario::find($id);
        if($existingUser){
            $existingUser -> nombre = $request -> username;
            $existingUser -> email = $request -> email;
            $existingUser -> estado = $request -> status;
            $existingUser -> rol = $request -> rol;

            $existingUser -> save();
            return redirect()->route('edit.users', $id)->with('success', 'Usuario actualizado correctamente');
        }else{
            return redirect()->route('edit.users', $id)->with('error', 'Usuario no actualizado correctamente');
        }

    }

}