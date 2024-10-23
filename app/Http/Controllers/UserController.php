<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('users\addUser');
    }

    public function addUsers(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,colaborator,supervisor',
        ]);

        // Crear un nuevo usuario
        $newUser = new Usuario();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->role = $request->role;
        $newUser->save();

        // Redireccionar a la lista de usuarios con un mensaje de éxito
        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');

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