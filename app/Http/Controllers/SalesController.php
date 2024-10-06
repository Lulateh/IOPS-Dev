<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Product;
use App\Models\Clientes;

class SalesController extends Controller
{
    public function sales()
    {
        return view('sales');
    }

    public function viewSales($id)
    {
        $existingReservation = Reserva::find($id);
        if($existingReservation){
            $existingClient = Clientes::find($existingReservation->cliente_id);
            $existingProduct = Product::find($existingReservation->product_id);
            return view('salidas.viewSales', compact('existingReservation', 'existingProduct', 'existingClient', 'id'));
        }else{
            return view('salidas.sales')->with("error", "No se a encontrado la Reserva");
        }
    }

    public function addSale(Request $request)
{
    $newSale = new Sale();
    $newSale -> product_id = $request -> product_id;
    $newSale -> quantity = $request -> quantity;
    $newSale -> save();
    return redirect()->route('AddSales');
}



    public function showAddSaleForm()
    {
        
        $productos = Product::all();
        $ventas = Sale::all();
        return view('sales.addSales', compact('productos', 'ventas'));
    }    
    public function editSales()
    {
        // Obtener la reserva utilizando el ID proporcionado
        $existingReservation = Reserva::findOrFail($id);
        if($existingReservation){
            $existingClient = Clientes::find($existingReservation->cliente_id);
            $existingProduct = Product::find($existingReservation->product_id);
            $clients = Clientes::all();
            return view('salidas.editSales', compact('existingReservation', 'existingProduct', 'existingClient', 'id', 'clients'));
        }else{
            return view('salidas.sales')->with("error", "No se a encontrado la Reserva");
        }
    }

    public function updateClient(Request $request)
{
    // Validar el request
    $request->validate([
        'clientId' => 'required|exists:clientes,id',
        'reservationId' => 'required|exists:reservas,id',
        'deliveryDate' => 'required|date',
    ]);

    // Buscar la reserva
    $reservation = Reserva::find($request->reservationId);

    if ($reservation) {
        // Actualizar la fecha de entrega de la reserva
        $reservation->fecha_salida = $request->deliveryDate;

        // Asignar el cliente existente a la reserva sin modificar sus datos
        $reservation->cliente_id = $request->clientId; // Asumiendo que deseas asociar la reserva con el cliente existente
        $reservation->save();

        return redirect()->route('editSales', ['id' => $reservation->id])
            ->with('success', 'Fecha de entrega actualizada exitosamente.');
    }

    return redirect()->back()->with('error', 'No se pudo actualizar la información.');
}


    public function updateSales(){
        
    }
}