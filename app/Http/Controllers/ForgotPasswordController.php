<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    //
    public function forgotPasswordView()
    {
        return view('forgotPassword');
    }



}
