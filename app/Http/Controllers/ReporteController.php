<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ReporteController extends Controller
{
    public function diario()
    {
        
        return view('reportes.diario');
    }

    public function semanal()
    {
        return view('reportes.semanal');
    }

    public function mensual()
    {
        return view('reportes.mensual');
    }
}