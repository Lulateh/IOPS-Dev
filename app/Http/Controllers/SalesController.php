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
}