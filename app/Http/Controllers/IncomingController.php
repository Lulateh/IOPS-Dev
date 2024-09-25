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

    

    public function updateIncoming(Request $request,){
        $existingIncoming = Incoming::find(1);
        $product = Product::find($request -> prod_id);
        if($existingIncoming){
            $existingIncoming -> producto_id = $request -> prod_id;
            $existingIncoming -> cantidad_entrada = $request -> cantidad;
            $existingIncoming -> proveedor_id = $request -> prov_id;
            $existingIncoming -> save();
            
            if($product){
                $allIncomings = Incoming::all();
                $total = 0;
                foreach($allIncomings as $incoming){
                    if($incoming -> producto_id == $request -> prod_id){
                        $total += $incoming -> cantidad_entrada;
                    }
                }
                $product->cantidad_stock = $total;
                $product->save();
            }
            return redirect(route('incoming'));
        }else{
            return redirect(route('incoming')) -> with("error", "Ha ocurrido un error");
        }
    }
}