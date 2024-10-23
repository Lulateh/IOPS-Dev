<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        //
        $usuario = auth()->user();
        $empresa = Empresa::where('id', $usuario->empresa_id)->first();
        return view('profile', compact('usuario', 'empresa'));
    }

}
