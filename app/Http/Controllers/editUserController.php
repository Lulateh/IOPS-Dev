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
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        try {
            $usuario = Auth::user();
    

            if ($request->hasFile('imagen')) {

                if ($usuario->imagen_url && file_exists(public_path('profile_images/' . $usuario->imagen_url))) {
                    unlink(public_path('profile_images/' . $usuario->imagen_url));
                }
    

                $imagen = $request->file('imagen');
                $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
                $imagen->move(public_path('profile_images'), $nombreImagen);
    

                $usuario->imagen_url = $nombreImagen;
            }
    

            $usuario->update([
                'nombre' => $request->nombre,
                'email' => $request->email,
            ]);
    
            return redirect()->back()->with('success', 'Los datos han sido actualizados correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hubo un problema al actualizar los datos. Intenta nuevamente.');
        }
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

    return redirect()->back()->with('success', 'La contraseña ha sido actualizada correctamente.\n\nAhora inicia sesion con la nueva contraseña');

    }   

   

}
