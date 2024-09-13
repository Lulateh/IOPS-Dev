<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IncomingController extends Controller
{
    public function incoming()
    {
        
        return view('incoming');
    }
}