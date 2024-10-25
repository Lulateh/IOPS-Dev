<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class CompanyController extends Controller
{
    public function company(){
        return view('editCompany');
    }

    public function edit($id)
    {

        $existingCompany = Empresa::findOrFail($id);

        return view('editCompany', compact('existingCompany'));
    }

    public function update(Request $request, $id)
{
  
    $request->validate([
        'companyName' => 'required|string|max:255',
        'companyEmail' => 'required|email|unique:empresas,correo,' . $id,
        'companyPhone' => 'nullable|string|max:15',
        'companyAddress' => 'nullable|string|max:255',
        'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    try {
        $existingCompany = Empresa::find($id);

        if ($existingCompany) {
           
            $existingCompany->nombre = $request->companyName;
            $existingCompany->correo = $request->companyEmail;
            $existingCompany->telefono = $request->companyPhone;
            $existingCompany->direccion = $request->companyAddress;

            
            if ($request->hasFile('imagen')) {
                
                if ($existingCompany->logo && file_exists(public_path('company_images/' . $existingCompany->logo))) {
                    unlink(public_path('company_images/' . $existingCompany->logo));
                }

                
                $imagen = $request->file('imagen');
                $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
                $imagen->move(public_path('company_images'), $nombreImagen);

                $existingCompany->logo = $nombreImagen;
            }

            $existingCompany->save();

            return redirect()->route('profile')->with('success', 'Información de la empresa actualizada correctamente.');
        } else {
            return redirect()->route('profile')->with('error', 'No se logró encontrar la empresa para actualizar.');
        }
    } catch (\Exception $e) {
        return redirect()->route('profile')->with('error', 'Hubo un problema al actualizar la información de la empresa. Intenta nuevamente.');
    }
}



}
