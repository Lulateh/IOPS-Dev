<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    // Reporte diario
    public function diario()
    {
        $audits = DB::table('audits')->get();
        $sales = DB::table('salidas')->get();
        $products = DB::table('productos')->get();
        $saledProducts = DB::table('productos_entregados')->get();
        $reportedProducts = collect();

        foreach ($saledProducts as $saledProduct) {
            foreach ($products as $product) {
                if ($saledProduct->producto_id == $product->id) {
                    $reportedProducts->push($product);
                }
            }
        }

        return view('reportes.diario', compact('audits', 'sales', 'saledProducts', 'products', 'reportedProducts'));
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