<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Product;
use App\Models\Clientes;
use App\Models\Sales;

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
            return view('salidas.sales')->with("error", "No se a encontrado la Reserva");
        }
    }
}