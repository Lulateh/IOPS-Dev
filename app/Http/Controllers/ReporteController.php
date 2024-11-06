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
        $empresaId = auth()->user()->empresa_id;

        $userId = auth()->user()->id;

        $audits = DB::table('audits')
                    ->join('usuarios', 'audits.user_id', '=', 'usuarios.id') 
                    ->where('usuarios.empresa_id', $empresaId) 
                    ->get();
        $sales = DB::table('salidas')->where('empresa_id', $empresaId)->get();
        $products = DB::table('productos')->where('empresa_id', $empresaId)->get();
        $saledProducts = DB::table('productos_entregados')->where('empresa_id', $empresaId)->get();
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