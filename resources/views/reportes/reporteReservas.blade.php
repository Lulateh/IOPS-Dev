@extends('layouts.plantilla')

@php
    use Carbon\Carbon;
@endphp

@section('title')
    LogiStock - Reporte de reservas
@endsection 

@section('content')
@include('components.headerTables')

<section class="md:ml-72">

<div >
               <!-- Botonera top -->
               <div class="px-4 py-6">
               <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-4 lg:space-y-0 gap-y-4 lg:gap-x-8 lg:space-x-auto w-full">
               <!-- Título -->
                  <h1 class="text-3xl md:text-4xl text-main-blue font-Coda ml-5">Reportes</h1>

        <!-- Botones -->
        <div class="flex flex-col sm:flex-row sm:gap-x-4 gap-y-2 w-full">
            <a href="{{ route('reporte.ventas') }}" 
               class="inline-block w-full sm:w-auto text-center px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-blue transition duration-300"
               aria-label="Ir al reporte de ventas">
               Reporte de Ventas
            </a>                       
            <a href="{{ route('reporte.compras') }}" 
               class="inline-block w-full sm:w-auto text-center px-6 py-2 bg-main-blue text-white rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 transition duration-300"
               aria-label="Ir al reporte de compras">
               Reporte de Compras
            </a>                        
            <a href="{{ route('reporte.reservas') }}" 
               class="inline-block w-full sm:w-auto text-center px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 transition duration-300"
               aria-label="Ir al reporte de reservas">
               Reporte de Reservas
            </a>                   
        </div>

    </div>
</div>


  <!-- min-max date -->
   
        <div class=" md:ml-20 ml-5 mt-5 overflow-y-auto">
            <div>
                <table border="0" cellspacing="5" cellpadding="5">
                    <tbody>
                        <tr>
                            <td>Minimum date:</td>
                            <td><input type="text" id="min" name="min" class="border-2 rounded-md border-black"></td>
                        </tr>
                        <tr>
                            <td>Maximum date:</td>
                            <td><input type="text" id="max" name="max" class="border-2 rounded-md border-black"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class=" mt-8 overflow-x-auto px-5 py-5">
                <table id="salesReport" class="min-w-full bg-white display compact ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Numero de reserva</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Nombre del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Marca del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Descripción del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Condición de stock</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Fecha</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Precio de compra</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Precio de venta</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Cantidad en reserva</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Cliente</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $iteration = 0;
                            @endphp

                            @foreach ($audits as $audit)
                                @if($audit->auditable_type == 'App\Models\ProductoReservado' && $audit->event == 'created')
                                    @foreach ($productosReservados as $productoReservado)
                                        @if($audit->auditable_id == $productoReservado->id)
                                            <tr>
                                                @foreach ($reservas as $reserva)
                                                    @if($productoReservado->reservas_id == $reserva->id)
                                                        <td class="py-2 px-4 text-center border-b">{{ $reserva->id }}</td>
                                                        @endif
                                                @endforeach
                                                <td class="py-2 px-4 text-center border-b">{{ $reservedProducts[ $iteration ]->nombre }}</td>
                                                <td class="py-2 px-4 text-center border-b">{{ $reservedProducts[ $iteration ]->marca }}</td>
                                                <td class="py-2 px-4 text-center border-b">{{ $reservedProducts[ $iteration ]->descripcion }}</td>
                                                @if($reservedProducts[ $iteration ]->cantidad_stock > 0)
                                                <td class="py-2 px-4 text-center border-b">En stock ({{ $reservedProducts[ $iteration ]->cantidad_stock }})</td>
                                                @else
                                                    <td class="py-2 px-4 text-center border-b">Agotado</td>
                                                @endif
                                                <td class="py-2 px-4 text-center border-b">{{ Carbon::parse($productoReservado->created_at)->format('Y-m-d') }}</td>
                                                <td class="py-2 px-4 text-center border-b">₡{{ $reservedProducts[ $iteration ]->precio_compra }}</td>
                                                <td class="py-2 px-4 text-center border-b">₡{{ $reservedProducts[ $iteration ]->precio_venta }}</td>
                                                <td class="py-2 px-4 text-center border-b dt-body-center">{{ $productosReservados[ $iteration ]->cantidad }}</td>
                                                @foreach ($reservas as $reserva)
                                                    @if($productoReservado->reservas_id == $reserva->id)
                                                        @foreach ($clientes as $cliente)
                                                            @if($reserva->cliente_id == $cliente->id)
                                                                <td class="py-2 px-4 text-center border-b dt-body-center">{{ $cliente->nombre_cliente }}</td>
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </tr>
                                            @php
                                                $iteration++;
                                            @endphp
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- DataTables --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

{{-- Botones de exportar a diferentes formatos --}}
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>

{{-- Rangos de fecha --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.5.4/js/dataTables.dateTime.min.js"></script>

<script>
    let minDate, maxDate;

    DataTable.ext.search.push(function (settings, data, dataIndex) {
        let min = minDate.val();
        let max = maxDate.val();
        let date = new Date(data[4]);

    if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
    ) {
        return true;
    }
        return false;
    });

    minDate = new DateTime('#min', {
        format: 'MMMM Do YYYY'
    });
    maxDate = new DateTime('#max', {
        format: 'MMMM Do YYYY'
    });

    let table = new DataTable('#salesReport', {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
        }
    })

    document.querySelectorAll('#min, #max').forEach((el) => {
        el.addEventListener('change', () => table.draw());
    });

    document.addEventListener("DOMContentLoaded", () => {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");

        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
        });
    });
</script>

@endsection