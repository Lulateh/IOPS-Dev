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
        // Obtener la empresa de la base de datos
        $existingCompany = Empresa::findOrFail($id);

        // Retornar la vista de edición con los datos de la empresa
        return view('editCompany', compact('existingCompany'));
    }

    public function update(Request $request, $id){
        //dd($id);

        $existingCompany = Empresa::find($id);
        if($existingCompany){
            $existingCompany -> nombre = $request -> companyName;
            $existingCompany -> correo = $request -> companyEmail;
            $existingCompany -> telefono = $request -> companyPhone;
            $existingCompany -> direccion = $request -> companyAddress;

            if ($request->hasFile('imagen')) {
                $imagePath = $request->file('imagen')->store('uploads', 'public');
                $existingCompany->logo = $imagePath;
            }

            $existingCompany->save();
            

            return redirect()->route('profile')->with('success', 'Información de la empresa actualizada correctamente.');
        }else{
            return redirect()->route('profile')->with('error', 'No se logro actualizar la información de la empresa actualizada correctamente.');
        }
    }



}
