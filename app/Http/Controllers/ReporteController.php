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
        $fecha = Carbon::now()->format('d-m-Y');
        $reportes = Reporte::whereDate('created_at', $fecha)->get();

        return view('reportes.diario', compact('reportes'));
    }

    // Reporte semanal
    public function semanal()
    {
        $startOfWeek = Carbon::now()->startOfWeek()->format('d-m-Y');
        $endOfWeek = Carbon::now()->endOfWeek()->format('d-m-Y');
        $reportes = Reporte::whereBetween('created_at', [$startOfWeek, $endOfWeek])->get();

        return view('reportes.semanal', compact('reportes'));
    }

    // Reporte mensual
    public function mensual()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('d-m-Y');
        $endOfMonth = Carbon::now()->endOfMonth()->format('d-m-Y');
        $reportes = Reporte::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();

        return view('reportes.mensual', compact('reportes'));
    }
}