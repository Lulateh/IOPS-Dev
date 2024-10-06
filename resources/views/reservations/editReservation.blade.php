<h1>Editar Reservas</h1>

<H2>Reserva N° {{$existingReservation['id']}}</H2>

<h2>Productos asociados a la reserva</h2>
    <ul>
        @foreach($productosReservados as $productosReservados)
            @foreach($productos as $product)
                @if ($productosReservados -> producto_id == $product['id'])
                    <li>{{$product['nombre']}}</li>   
                @endif
            @endforeach
        @endforeach
    </ul>

<h2>cliente asociado a la reserva: {{$existingClient['nombre_cliente']}}</h2>