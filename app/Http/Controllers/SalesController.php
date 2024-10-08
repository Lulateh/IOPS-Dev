<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Product;
use App\Models\Clientes;

class SalesController extends Controller
{
    public function sales()
    {
        return view('sales');
    }

    public function viewSales($id)
    {
        $existingReservation = Reserva::find($id);
        if($existingReservation){
            $existingClient = Clientes::find($existingReservation->cliente_id);
            $existingProduct = Product::find($existingReservation->product_id);
            return view('salidas.viewSales', compact('existingReservation', 'existingProduct', 'existingClient', 'id'));
        }else{
            return view('sales')->with("error", "No se a encontrado la Reserva");
        }
    }

    public function addSale(Request $request)
{
    $newSale = new Sale();
    $newSale -> product_id = $request -> product_id;
    $newSale -> quantity = $request -> quantity;
    $newSale -> save();
    return redirect()->route('AddSales');
}



    public function showAddSaleForm()
    {
        
        $productos = Product::all();
        $ventas = Sale::all();
        return view('sales.addSales', compact('productos', 'ventas'));
    }    
    public function editSales()
    {
        
        return view('salidas.editSales');
    }

}