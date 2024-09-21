<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function loginPost(Request $request){

        $request->validate([
            "email"=>"required",
            "password"=>"required",
        ]);
        
        $credentials = $request->only("email", "password");

        if (Auth::guard('usuario')->attempt($credentials)) {
            return redirect()->intended(route('home'));
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

    function registro(){
        return view('auth.registro');
    }

    function registroPost(Request $request){
        $request->validate([
            "fullName" => "required",
            "corporationName" => "required",
            "email" => "required",
            "password" => "required",
            //"safepass" => "required",
        ]);

        $usuario = new Usuario();
        $usuario -> nombre = $request -> fullName;
        $usuario -> nombre_empresa = $request -> corporationName;
        $usuario -> email = $request -> email;
        $usuario -> password = Hash::make($request -> password);
        $usuario -> rol = "usuario";

        if ($usuario -> save()){
            return redirect(route("login")) -> with("success", "Usuario creado exitosamente");
        }

        return redirect(route("registro")) -> with("error", "Se ha producido un error al crear una la cuenta");
    }

    function logout(Request $request){
        Auth::guard('usuario')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route("login"));
    }
}
