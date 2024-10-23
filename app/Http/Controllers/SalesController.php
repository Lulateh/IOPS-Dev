<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Clientes;
use App\Models\Sales;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function sales()
    {
        return view('sales');
    }

    public function viewSales($id)
    {
        $existingSale = sales::find($id);
        if($existingSale){
            $client = Clientes::find($existingSale->cliente_id);
            $products = Product::all();
            $productosEntregados = DB::table('productos_entregados') -> where('salidas_id', '=', $id) -> get();
            return view('salidas.viewSales', compact('existingSale', 'products', 'client', 'id', 'productosEntregados'));
        }else{
            return view('salidas.sales')->with("error", "No se a encontrado la Reserva");
        }
    }
}