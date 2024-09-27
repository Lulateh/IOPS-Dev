<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Incoming;
use App\Models\Proveedor;

class IncomingController extends Controller
{
    public function index()

    {
    
        $incomings = Incoming::all(); 
    
        return view('incoming', compact('incomings'));
    
    }
    public function showIncoming($id){

        $incoming = Incoming::with('product')->find($id);

        if ($incoming) {            
            return view('incomingDetail', compact('incoming'));           
        } else {
            return redirect(route('incoming')) -> with('error', 'No se ha encontrado la entrada');
        }
        
    }

    public function incoming()
    {
        $incomings = Incoming::all();
        return view('incoming', compact('incomings'));
    }

    public function addIncoming()
    {
        return view('add_incoming');
    }

    public function details() {
        return view('incomingDetail');
    }

    public function edit() {
        return view('incomingEdit');
    }

    public function destroy($id)
{
    $incoming = Incoming::find($id);

    if ($incoming) {
        $incoming->delete(); 
        return redirect()->route('incoming')->with('success', 'Entrada eliminada correctamente.');
    } else {
        return redirect()->route('incoming')->with('error', 'No se encontró la entrada.');
    }
}
}