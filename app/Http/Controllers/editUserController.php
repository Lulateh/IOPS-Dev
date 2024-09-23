<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class editUserController extends Controller
{
    public function edituser()
    {
        $usuario = auth()->user();
        return view('edituser', compact('usuario'));
    }

    public function updateUser(Request $request)
    {
    
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(), 
            'nombre_empresa' => 'nullable|string|max:255',
     
        ]);

        $usuario = Auth::user();
        $usuario->update([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'nombre_empresa' => $request->nombre_empresa,      
        ]);
        
        return redirect()->back()->with('success', 'Los datos han sido actualizados correctamente.');
        
    }

    public function changePassword()
    {
       return view('changePassword');
    }

    public function updatePassword(Request $request)
    {

       $request->validate([
        'current_password' => 'required',
        'new_password' => 'required|confirmed',
    ]);


    $user = Auth::user();


    if (!Hash::check($request->current_password, $user->password)) {
        return back()->withErrors(['current_password' => 'La contraseña actual no es correcta.']);
    }

  
    $user->password = Hash::make($request->new_password);
    $user->save();

    return redirect()->back()->with('success', 'La contraseña ha sido actualizada correctamente.');

    }   

   

}
