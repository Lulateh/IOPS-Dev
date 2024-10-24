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
            'admin' => 'Administrador',
            'colaborator' => 'Colaborador',
            'supervisor' => 'Supervisor',
        ];

        // Retornar la vista de edición con los datos del usuario
        return view('users.editUsers', compact('existingUser','roles'));
    }

}