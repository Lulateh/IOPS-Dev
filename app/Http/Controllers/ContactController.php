<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ]);

        $details = [
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'user_message' => $validated['message'] ?? '',
        ];

        Mail::send('emails.contact', $details, function ($message) use ($details) {
            $message->to('invntryoperations@gmail.com') 
                    ->subject('Nuevo mensaje desde el formulario de contacto');
        });

        return back()->with('success', ' ¡Tu mensaje ha sido enviado con éxito! Nos pondremos en contacto contigo pronto.');

    }
}
