<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Product;
use App\Models\Clientes;

class ReservationController extends Controller
{
    public function viewReservation($id)
    {
        $reserva = Reserva::find($id);
        $productosReservados = DB::table('productos_reservados') -> where('reservas_id', '=', $id) -> get();
        $productos = Product::all();
        $client = Clientes::find($reserva->cliente_id);

        return view('reservations.showReservation', compact('reserva', 'client', 'id', 'productosReservados', 'productos'));        
    }

    public function redirectToEdit($id)
    {
        $existingReservation = Reserva::find($id);
        $productosReservados = DB::table('productos_reservados') -> where('reservas_id', '=', $id) -> get();
        $productos = Product::all();
        $existingClient = Clientes::find($existingReservation->cliente_id);
        if($existingReservation){            
            return view('reservations.editReservation', compact('existingReservation', 'existingClient', 'id', 'productosReservados', 'productos'));            
        }else{
            return redirect(route('reservations')) -> with("error", "No se a encontrado la Reserva");
        }
    }
}
