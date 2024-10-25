<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

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
        return view('users.addUser');
    }

    public function addUsers(Request $request)
    {
        
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
        return redirect()->route('users.index')->with('success', 'Usuario creado exitosamente.');
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
            return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente');
        }else{
            return redirect()->route('users.index')->with('error', 'Usuario no actualizado correctamente');
        }

    }

}