<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sales;
use App\Models\Clientes;

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

    public function addSales()
    {
        
        return view('salidas.addSales');
    }

    public function editSales()
    {
        return view('salidas.editSales');
    }

}