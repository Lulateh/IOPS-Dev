<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SalesController extends Controller
{
    public function sales()
    {
        
        return view('sales');
    }

    public function viewSales()
    {
        
        return view('salidas.viewSales');
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