<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ReporteController extends Controller
{
    // Reporte diario
    public function diario()
    {
       

        return view('reportes.diario');
    }

    // Reporte semanal
    public function semanal()
    {
      

        return view('reportes.semanal');
    }

    // Reporte mensual
    public function mensual()
    {
        

        return view('reportes.mensual');
    }
}