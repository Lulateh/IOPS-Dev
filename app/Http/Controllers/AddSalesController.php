<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AddSalesController extends Controller
{
    public function addSales()
    {
        
        return view('addSales');
    }
}