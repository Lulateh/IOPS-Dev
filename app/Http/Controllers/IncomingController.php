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
        $existingIncoming =Incoming::find($id);
        if($existingIncoming){            
            return view('incoming', compact('existingIncoming', 'id'));            
        }else{
            return redirect(route('incoming')) -> with("error", "No se a encontrado la entrada");
        }
        
    }

    public function incoming()
    {
        $incoming = Incoming::all();
        return view('incoming', compact('incoming'));
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


    public function updateIncoming(Request $request){
        $existingIncoming = Incoming::find(1);
        if($existingIncoming){
            $existingIncoming -> cantidad_entrada = $request -> cantidad;
            $existingIncoming -> save();
            return redirect(route('incoming'));
        }else{
            return redirect(route('incoming')) -> with("error", "Ha ocurrido un error");
        }
    }
}