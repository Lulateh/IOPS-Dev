<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;
use Illuminate\Support\Str;

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
    ]);

    if ($validator->fails()) {
        return redirect()->back()
                         ->withErrors($validator)
                         ->withInput()
                         ->with('error', 'Por favor, corrige los errores e inténtalo de nuevo.');
    }

   
    $user = Usuario::where('email', $request->email)->first();


    if (!$user) {
        return redirect()->back()->with('error', 'No se encontró una cuenta con ese correo electrónico.');
    }


    $user->password = bcrypt($request->password);
    $user->save();

    return redirect()->route('login')->with('success', 'Tu contraseña ha sido restablecida con éxito.');
}



}
