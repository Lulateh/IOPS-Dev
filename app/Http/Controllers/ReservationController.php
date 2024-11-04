<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Product;
use App\Models\Clientes;
use App\Models\ProductoReservado;
use App\Models\Sales;
use App\Models\ProductoEntregado;

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
    
    public function viewReservation($id)
    {
        $reserva = Reserva::find($id);
        $productosReservados = DB::table('productos_reservados')->where('reservas_id', '=', $id)->get();
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

    $clientes = Clientes::where('estado', 'activo')->get();

    if ($existingReservation) {
        return view('reservations.editReservation', compact('existingReservation', 'existingClient', 'id', 'productosReservados', 'productos', 'clientes', 'reserva'));
    } else {
        return redirect(route('reservations'))->with("error", "No se encontró la Reserva");
    }
}

    public function updateProductReservation(Request $request, $id)
    {
        $existingReservation = Reserva::find($id);
        $producto = Product::find($request->productSelect);

        if (!$existingReservation) {
            return redirect(route('reservations'))->with('error', 'Reserva no encontrada.');
        }
        if (!$producto) {
            return redirect(route('reservation.redirect.edit', $id))->with('error', 'Producto no encontrado.');
        }

        $cantidadDisponible = $producto->cantidad_stock;
        $productoReservado = $existingReservation->productosReservados()->where('producto_id', $request->productSelect)->first();
        $cantidadTotalAReservar = $productoReservado ? $productoReservado->cantidad + $request->productCant : $request->productCant;

        $request -> validate([
            'productSelect' => 'required|exists:productos,id',
            'productCant' => 'required|integer|min:1'
        ]);
        if ($cantidadTotalAReservar > $cantidadDisponible) {
            return redirect(route('reservation.redirect.edit', $id))->with('error', 'No hay suficiente stock disponible para reservar.');
        }

        if ($productoReservado) {
            $oldAmount = $productoReservado->cantidad;
            $incomingAmount = $request->productCant;
            $productoReservado->cantidad = $incomingAmount;
            $productoReservado->save();
            $newAmount = $productoReservado->cantidad;
            if ($oldAmount > $newAmount) {
                $producto->cantidad_stock += $oldAmount - $newAmount;
            } else {
                $producto->cantidad_stock -= $newAmount - $oldAmount;
            }
            $producto->save();
        } else {
            $newProductoReservado = new ProductoReservado();
            $newProductoReservado->reservas_id = $id;
            $newProductoReservado->producto_id = $request->productSelect;
            $newProductoReservado->cantidad = $request->productCant;
            $newProductoReservado->save();
            $producto->cantidad_stock -= $request->productCant;
            $producto->save();
        }

        return redirect(route('reservation.redirect.edit', $id))->with('success', 'Producto reservado actualizado o agregado correctamente.');
    }

    public function updateClientReservation(Request $request)
    {
        $request->validate([
            'clientId' => 'required|exists:clientes,id',
            'reservationId' => 'required|exists:reservas,id',
            'deliveryDate' => 'required|date',
        ]);

        $reservation = Reserva::find($request->reservationId);

        if ($reservation) {
            $reservation->fecha_salida = $request->deliveryDate;
            $reservation->cliente_id = $request->clientId;
            $reservation->save();

            return redirect()->route('reservation.redirect.edit', ['id' => $reservation->id])->with('success', 'Fecha de entrega actualizada exitosamente.');
        }

        return redirect()->back()->with('error', 'No se pudo actualizar la información.');
    }

    public function deleteProductReservation($reservaId, $productoId)
    {
        $reservation = Reserva::find($reservaId);
        if (!$reservation) {
            return redirect()->back()->with('error', 'Reserva no encontrada.');
        }

        $productoReservado = $reservation->productosReservados()->where('producto_id', $productoId)->first();
        if (!$productoReservado) {
            return redirect()->route('reservation.redirect.edit', $reservaId)->with('error', 'Producto no encontrado en la reserva.');
        }

        $producto = Product::find($productoId);
        if (!$producto) {
            return redirect()->route('reservation.redirect.edit', $reservaId)->with('error', 'Producto no encontrado en el inventario.');
        }

        $producto->cantidad_stock += $productoReservado->cantidad;
        $producto->save();

        $productoReservado->delete();

        return redirect()->route('reservation.redirect.edit', $reservaId)->with('success', 'Producto eliminado con éxito y cantidad restaurada al inventario.');
    }

    public function updateStatus(Request $request, $id)
    {
        $reserva = Reserva::find($id);
        $productosReservados = DB::table('productos_reservados')->where('reservas_id', '=', $id)->get();

        if ($reserva && $reserva->estado != 'entregado' && $reserva->estado != 'cancelado') {
            $reserva->estado = $request->input('estado');
            
            if ($reserva->estado == 'entregado') {
                $newSales = new Sales();
                $newSales->fecha_salida = now();
                $newSales->cliente_id = $reserva->cliente_id;
                $newSales->user_id = auth()->user()->id;
                $newSales->save();

                foreach ($productosReservados as $productoReservado) {
                    $newProductoEntregado = new ProductoEntregado();
                    $newProductoEntregado->salidas_id = $newSales->id;
                    $newProductoEntregado->producto_id = $productoReservado->producto_id;
                    $newProductoEntregado->cantidad = $productoReservado->cantidad;
                    $newProductoEntregado->save();
                }

                // Elimina los productos de productos_reservados
                DB::table('productos_reservados')->where('reservas_id', $id)->delete();
                DB::table('reservas')->where('id', $id)->delete();
            }

            if ($reserva->estado == 'cancelado') {
                foreach ($productosReservados as $productoReservado) {
                    $producto = Product::find($productoReservado->producto_id);
                    if ($producto) {
                        $producto->cantidad_stock += $productoReservado->cantidad;
                        $producto->save();
                    }
                }
            }

            $reserva->save();

            return redirect()->route('reservations')->with('success', 'Estado actualizado correctamente.');
        }

        return redirect()->route('reservations')->with('error', 'Error al actualizar el estado o el estado ya fue cambiado.');
    }
}