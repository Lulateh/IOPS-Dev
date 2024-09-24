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
        
        return view('viewSales');
    }

    public function addSales()
    {
        
        return view('addSales');
    }

    public function editSales()
    {
        
        return view('editSales');
    }

}