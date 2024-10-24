<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use App\Models\Empresa;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('users.addUser');
    }

    public function addUsers(Request $request)
    {
        // Validar los datos del formulario
        // $request->validate([
        //     'nombre' => 'required|string|max:255',
        //     'email' => 'required|email|max:255|unique:usuarios,email',
        //     'password' => 'required|string|min:4',
        //     'rol' => 'required|in:administrador,colaborador,supervisor',
        // ]);

        
        $empresa_id = Auth::user()->empresa_id;

        // Crear un nuevo usuario
        $newUser = new Usuario();
        $newUser->nombre = $request->nombre;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->rol = $request->rol;
        $newUser->empresa_id = $empresa_id; 
        $newUser->save();

        // Redireccionar a la lista de usuarios con un mensaje de éxito
        return redirect()->route('users.addUser')->with('success', 'Usuario creado exitosamente.');
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