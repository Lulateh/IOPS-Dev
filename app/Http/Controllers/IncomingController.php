<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Incoming;
use App\Models\Proveedor;

class IncomingController extends Controller
{

    public function guardarEntrada(Request $request){
        
        $request->validate([
            'cantidad' => 'required|integer|min:1',
            'prod_id' => 'required|exists:productos,id', 
            'prov_id' => 'required|exists:proveedores,id',
        ],[
            'cantidad.required' => 'La cantidad es requerida',
            'cantidad.integer' => 'La cantidad debe ser un número entero',
            'cantidad.min' => 'La cantidad debe ser mayor a 0',
            'prod_id.required' => 'El producto es requerido',
            'prod_id.exists' => 'El producto no existe',
            'prov_id.required' => 'El proveedor es requerido',
            'prov_id.exists' => 'El proveedor no existe',
        ]);


        $proveedores = Proveedor::where('estado', 'activo')->get();
        $newIncoming = new Incoming();
        $newIncoming -> producto_id = $request -> prod_id;
        $newIncoming -> cantidad_entrada = $request -> cantidad;
        $newIncoming -> proveedor_id = $request -> prov_id;
        $newIncoming -> user_id = auth() -> user() -> id;
        $newIncoming -> empresa_id = auth() -> user() -> empresa_id;
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
    
        $incomings = Incoming::where('empresa_id', auth()->user()->empresa_id)->get();

    
        return view('entradas.incoming', compact('incomings'));
    
    }
    
    public function showIncoming($id){

        $incoming = Incoming::with('product', 'proveedor')->find($id);

        if ($incoming) {            
            return view('entradas.incomingDetail', compact('incoming'));           
        } else {
            return redirect(route('incoming')) -> with('error', 'No se ha encontrado la entrada');
        }
        
    }

    public function incoming()
    {
        $incomings = Incoming::where('empresa_id', auth()->user()->empresa_id)->get();
        return view('entradas.incoming', compact('incomings'));
    }


    public function details() {
        return view('entradas.incomingDetail');
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
        $proveedores = Proveedor::where('estado', 'activo')->get();
        $posts = Product::all();
        

        return view('entradas.incomingEdit', compact('incoming', 'proveedores', 'posts'));
    }
 
    

    public function updateIncoming(Request $request, $id){
        $request->validate([
            'cantidad' => 'required|integer|min:1',
            'prod_id' => 'required|exists:productos,id', 
            'prov_id' => 'required|exists:proveedores,id',
        ],[
            'cantidad.required' => 'La cantidad es requerida',
            'cantidad.integer' => 'La cantidad debe ser un número entero',
            'cantidad.min' => 'La cantidad debe ser mayor a 0',
            'prod_id.required' => 'El producto es requerido',
            'prod_id.exists' => 'El producto no existe',
            'prov_id.required' => 'El proveedor es requerido',
            'prov_id.exists' => 'El proveedor no existe',
        ]);

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