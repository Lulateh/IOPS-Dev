<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(){
        return view('users.editUsers');
    }

    public function edit($id)
    {
        
        // Obtener el usuario de la base de datos
        $existingUser = Usuario::findOrFail($id);
        $roles = Usuario::select('rol')->distinct()->get();

        // Retornar la vista de edición con los datos del usuario
        return view('users.editUsers', compact('existingUser','roles'));
    }

}