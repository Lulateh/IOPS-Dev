<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ForgotPasswordController extends Controller
{

    public function forgotPasswordView()
    {
        return view('forgotPassword');
    }

    public function checkEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:usuarios,email', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'No encontramos una cuenta vinculada a este correo.'); 
        }

        

    $user = usuario::where('email', $request->email)->first();

   
    $token = Str::random(60); 

    DB::table('password_reset_tokens')->updateOrInsert(
        ['email' => $request->email],  // Condición de búsqueda
        ['token' => $token, 'created_at' => now()]  // Valores a actualizar o insertar
    );
    

   
    Mail::to($user->email)->send(new PasswordResetMail($user->email, $token));

    return redirect()->back()->with('success', 'Se ha enviado un correo para restablecer tu contraseña.');

    }
    public function showResetPasswordForm($token)
    {
    return view('auth.reset_password', compact('token'));
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:usuarios,email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required',
        ], [
            'password.confirmed' => 'Las contraseñas no coinciden.', // Mensaje si las contraseñas no coinciden
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.', // Mensaje si la longitud es menor de 8
            'email.exists' => 'No se encontró una cuenta con ese correo electrónico.', // Mensaje si el correo no existe
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput()
                             ->with('error', 'Las contraseñas no coinciden o no son de la longitud correcta. \n \n Intentalo de nuevo.');
        }

        // Verificar si el token es válido
        $reset = DB::table('password_reset_tokens')
                    ->where('email', $request->email)
                    ->where('token', $request->token)
                    ->first();

        if (!$reset) {
            return redirect()->back()->with('error', 'El token es inválido, ha expirado o el correo es incorrecto.');
        }

        // Buscar el usuario y actualizar la contraseña
        $user = Usuario::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        // Eliminar el token de la base de datos
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->back()->with('success', 'Tu contraseña ha sido restablecida con éxito.');
    }



}
