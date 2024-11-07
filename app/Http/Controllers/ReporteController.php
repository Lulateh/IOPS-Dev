<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReporteController extends Controller
{
    // Reporte diario
    public function ventas()
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

        return view('reportes.reporteVentas', compact('audits', 'sales', 'saledProducts', 'products', 'reportedProducts'));
    }

    // Reporte semanal
    public function compras()
    {
        $empresaId = auth()->user()->empresa_id;

        $userId = auth()->user()->id;

        $audits = DB::table('audits')
                    ->join('usuarios', 'audits.user_id', '=', 'usuarios.id') 
                    ->where('usuarios.empresa_id', $empresaId) 
                    ->get();
        $incomings = DB::table('entradas')->where('empresa_id', $empresaId)->get();
        $products = DB::table('productos')->where('empresa_id', $empresaId)->get();
        $proveedores = DB::table('proveedores')->where('empresa_id', $empresaId)->get();

        return view('reportes.reporteCompras', compact('audits', 'incomings', 'products', 'proveedores' ));;
    }

    // Reporte mensual
    public function reservas()
    {
        $empresaId = auth()->user()->empresa_id;

        $userId = auth()->user()->id;

        $audits = DB::table('audits')
                    ->join('usuarios', 'audits.user_id', '=', 'usuarios.id') 
                    ->where('usuarios.empresa_id', $empresaId) 
                    ->get();
        $reservas = DB::table('reservas')->where('empresa_id', $empresaId)->get();
        $productosReservados = DB::table('productos_reservados')->where('empresa_id', $empresaId)->get();
        $clientes = DB::table('clientes')->where('empresa_id', $empresaId)->get();
        $products = DB::table('productos')->where('empresa_id', $empresaId)->get();

        $reservedProducts = collect();

        foreach ($productosReservados as $productoReservado) {
            foreach ($products as $product) {
                if ($productoReservado->producto_id == $product->id) {
                    $reservedProducts->push($product);
                }
            }
        }

        return view('reportes.reporteReservas', compact('audits', 'reservas', 'productosReservados', 'clientes', 'products', 'reservedProducts'));
    }
}