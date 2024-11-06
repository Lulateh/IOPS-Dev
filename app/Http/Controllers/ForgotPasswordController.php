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
        ['email' => $request->email], 
        ['token' => $token, 'created_at' => now()] 
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
            'password' => 'required|confirmed',
                    'min:8',                
                    'regex:/[A-Z]/',        
                    'regex:/[a-z]/',        
                    'regex:/[0-9]/',        
                    'regex:/[@$!%*?&]/',
            'token' => 'required',
        ], [
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'email.exists' => 'No se encontró una cuenta con ese correo electrónico.', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput()
                             ->with('error', 'Las contraseñas no coinciden o no son de la longitud correcta. \n \n Intentalo de nuevo.');
        }

     
        $reset = DB::table('password_reset_tokens')
                    ->where('email', $request->email)
                    ->where('token', $request->token)
                    ->first();

        if (!$reset) {
            return redirect()->back()->with('error', 'El token es inválido, ha expirado o el correo es incorrecto.');
        }


        $user = Usuario::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

    
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        return redirect()->back()->with('success', 'Tu contraseña ha sido restablecida con éxito.');
    }



}
