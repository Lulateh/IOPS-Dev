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
    
            return redirect()->route('profile')->with('success', 'Los datos han sido actualizados correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('profile')->with('error', 'Hubo un problema al actualizar los datos. Intenta nuevamente.');
        }
    }

    public function changePassword()
    {
       return view('changePassword');
    }

    public function updatePassword(Request $request)
    {
        try {
            // Realizar la validación
            $request->validate([
                'current_password' => 'required',
                'new_password' => [
                    'required',
                    'confirmed',
                    'min:8',                
                    'regex:/[A-Z]/',        
                    'regex:/[a-z]/',        
                    'regex:/[0-9]/',        
                    'regex:/[@$!%*?&]/',    
                ],
            ]);
    
            $user = Auth::user();
    
            
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'La contraseña actual no es correcta.']);
            }
    
            
            $user->password = Hash::make($request->new_password);
            $user->save();
    
            return redirect()->back()->with('success', 'La contraseña ha sido actualizada correctamente. Por favor, inicia sesión con la nueva contraseña.');
        } catch (ValidationException $e) {
            
            return redirect()->back()
                ->withErrors($e->errors()) 
                ->withInput();
        } catch (\Exception $e) {
            
            return redirect()->back()
                ->withErrors(['error' => 'Ocurrió un error al intentar actualizar la contraseña. Por favor, inténtelo de nuevo.'])
                ->withInput();
        }
    }

   

}
