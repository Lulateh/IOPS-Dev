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

    public function addReservation()
    {
        $reserva = new Reserva();
        $reserva->cliente_id = 1;
        $reserva->fecha_salida = now();
        $reserva->user_id = auth()->user()->id;
        $reserva->estado = 'Reservado';
        $reserva->save();

        

        $id = $reserva->id;

        return redirect()->route('reservation.redirect.edit', [$id]);
    }
    
    // public function storeReservation(Request $request)
    // {
    //     $request->validate([
    //         'cliente_id' => 'required',
    //         'fecha_salida' => 'required',
    //         'estado' => 'required',
    //     ]);

    //     $reserva = new Reserva();
    //     $reserva->cliente_id = $request->cliente_id;
    //     $reserva->fecha_salida = $request->fecha_salida;
    //     $reserva->estado = $request->estado;
    //     $reserva->save();

    //     return redirect(route('reservations'))->with('success', 'Reserva creada correctamente');
    // }

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
        $productosReservados = ProductoReservado::with('producto')->where('reservas_id', $id)->get();
        $productos = Product::all();
        $reserva = Reserva::with('productosReservados.producto')->find($id);
        $existingClient = Clientes::find($existingReservation->cliente_id);
        $clientes = Clientes::all();
        if($existingReservation){            
            return view('reservations.editReservation', compact('existingReservation', 'existingClient', 'id', 'productosReservados', 'productos','clientes','reserva'));            
        }else{
            return redirect(route('reservations')) -> with("error", "No se a encontrado la Reserva");
        }
    }

    public function updateProductReservation(Request $request, $id)
    {
        // Encuentra la reserva existente
        $existingReservation = Reserva::find($id);
        
        // Encuentra el producto que se va a reservar
        $producto = Product::find($request->productSelect);
        
        // Verifica que el producto exista
        if (!$producto) {
            return redirect(route('reservation.redirect.edit', $id))
                ->with('error', 'Producto no encontrado.');
        }

        // Verificar la cantidad disponible del producto
        $cantidadDisponible = $producto->cantidad_stock; // Asegúrate de que este campo contenga la cantidad disponible en inventario

        // Verificar si el producto ya está reservado en la reserva existente
        $productoReservado = $existingReservation->productosReservados()->where('producto_id', $request->productSelect)->first();

        // Calcular la cantidad total que se desea reservar
        $cantidadTotalAReservar = $productoReservado ? $productoReservado->cantidad + $request->productCant : $request->productCant;

        // Comprobar si la cantidad total supera la cantidad disponible
        if ($cantidadTotalAReservar > $cantidadDisponible) {
            return redirect(route('reservation.redirect.edit', $id))
                ->with('error', 'No hay suficiente stock disponible para reservar.');
        }

        if ($productoReservado) {
            // Resta la cantidad antigua y suma la nueva
            $oldAmount = $productoReservado->cantidad;
            $incomingAmount = $request->productCant;
            $productoReservado->cantidad = $incomingAmount;
            $productoReservado->save();
            $newAmount = $productoReservado->cantidad;
            if ($oldAmount > $newAmount) {
                $producto -> cantidad_stock += $oldAmount - $newAmount;
                $producto -> save();
            }else{
                $producto -> cantidad_stock -= $newAmount - $oldAmount;
                $producto -> save();
            }
        } else {
            // Si no existe, crear un nuevo registro
            $newProductoReservado = new ProductoReservado();
            $newProductoReservado->reservas_id = $id;
            $newProductoReservado->producto_id = $request->productSelect;
            $newProductoReservado->cantidad = $request->productCant;
            $newProductoReservado->save();
            $producto -> cantidad_stock -= $request->productCant;
            $producto -> save();
        }

        // Redirigir a la vista de edición de reservas
        return redirect(route('reservation.redirect.edit', $id))
            ->with('success', 'Producto reservado actualizado o agregado correctamente.');
    }


    public function updateClientReservation(Request $request)
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
    
            return redirect()->route('reservation.redirect.edit', ['id' => $reservation->id])
                ->with('success', 'Fecha de entrega actualizada exitosamente.');
        }
    
        return redirect()->back()->with('error', 'No se pudo actualizar la información.');
    }

    public function deleteProductReservation($reservaId, $productoId)
    {
        // Encuentra la reserva
        $reservation = Reserva::find($reservaId);

        // Verifica que la reserva exista
        if (!$reservation) {
            return redirect()->back()->with('error', 'Reserva no encontrada.');
        }

        // Busca el producto reservado
        $productoReservado = $reservation->productosReservados()->where('producto_id', $productoId)->first();

        // Verifica que el producto reservado exista
        if (!$productoReservado) {
            return redirect()->route('reservation.redirect.edit',  $reservaId)
                ->with('error', 'Producto no encontrado en la reserva.');
        }

        // Encuentra el producto en el inventario
        $producto = Product::find($productoId);

        // Verifica que el producto exista en el inventario
        if (!$producto) {
            return redirect()->route('reservation.redirect.edit', $reservaId)
                ->with('error', 'Producto no encontrado en el inventario.');
        }

        // Suma la cantidad reservada al inventario
        $producto->cantidad_stock += $productoReservado->cantidad;
        $producto->save();

        // Elimina el producto reservado
        $productoReservado->delete();

        // Redirige después de la eliminación
        return redirect()->route('reservation.redirect.edit', $reservaId)
            ->with('success', 'Producto eliminado con éxito y cantidad restaurada al inventario.');
    }

    public function updateStatus(Request $request, $id)
    {
        $reserva = Reserva::find($id);
        if ($reserva) {
            $reserva->estado = $request->input('estado');
            $reserva->save();

            return redirect()->route('reservation.show', $id)->with('success','Estado actualizado correctamente');
        }
        return redirect()->route('reservation.show', $id)->with('error', 'Error al actualizar el estado');
    }

}
