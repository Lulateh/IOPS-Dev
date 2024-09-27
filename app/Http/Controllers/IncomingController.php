<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Incoming;
use App\Models\Proveedor;

class IncomingController extends Controller
{

    public function guardarEntrada(Request $request){
        $newIncoming = new Incoming();
        $newIncoming -> producto_id = $request -> prod_id;
        $newIncoming -> cantidad_entrada = $request -> cantidad;
        $newIncoming -> proveedor_id = $request -> prov_id;
        $newIncoming -> save();
        $product = Product::find($request -> prod_id);
        if($product){
            $product -> cantidad_stock += $request -> cantidad;
            $product -> save();
        }
        return redirect(route('incoming'));
    }
    
    public function index()

    {
    
        $incomings = Incoming::all(); 
    
        return view('incoming', compact('incomings'));
    
    }
    public function showIncoming($id){

        $incoming = Incoming::with('product', 'proveedor')->find($id);

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


    public function details() {
        return view('incomingDetail');
    }

    public function destroy($id)
{
    $incoming = Incoming::find($id);
    if ($incoming) {
        $product = $incoming->product;

        if ($product) {
           
            $product->cantidad_stock -= $incoming->cantidad_entrada;
            $product->save();
        }

      
        $incoming->delete();

        return redirect()->route('incoming')->with('success', 'Entrega eliminada y cantidad de stock actualizada.');
    } else {
        return redirect()->route('incoming')->with('error', 'No se ha encontrado la entrega.');
    }
}

    public function edit($id)
    {
        $incoming = Incoming::findOrFail($id); 
        $proveedores = Proveedor::all();
        $posts = Product::all();

        return view('incomingEdit', compact('incoming', 'proveedores', 'posts'));
    }
 
    

    public function updateIncoming(Request $request, $id){
        $existingIncoming = Incoming::find($id);
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
            return redirect(route('incomings.show', ['id' => $existingIncoming->id]));
        }else{
            return redirect(route('incoming')) -> with("error", "Ha ocurrido un error");
        }
    }
}