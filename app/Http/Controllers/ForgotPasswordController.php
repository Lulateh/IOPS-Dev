<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{

    public function forgotPasswordView()
    {
        return view('forgotPassword');
    }

    public function checkEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:Usuarios,email', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', 'No encontramos una cuenta vinculada a este correo.'); 
        }

        
        return response()->json(['success' => 'El correo electrónico existe.'], 200);
    }




}
