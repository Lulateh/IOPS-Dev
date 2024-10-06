<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Product;
use App\Models\Clientes;
use App\Models\ProductoReservado;

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
        $existingProduct = Product::find($existingReservation->product_id);
        if($existingReservation){            
            return view('reservations.editReservation', compact('existingReservation', 'existingClient', 'existingProduct', 'id', 'productosReservados', 'productos'));            
        }else{
            return redirect(route('reservations')) -> with("error", "No se a encontrado la Reserva");
        }
    }
}
