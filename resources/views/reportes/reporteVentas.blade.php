@extends('layouts.plantilla')

@php
    use Carbon\Carbon;
@endphp

@section('title')
    LogiStock - Reporte de ventas
@endsection 

@section('content')
@include('components.headerTables')

<section class="md:ml-72">
        <div>
        <!-- Botonera top -->
        <div class="px-4 py-6">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-4 lg:space-y-0 gap-y-4 lg:gap-x-8 lg:space-x-auto w-full">
                 <!-- Título -->
                  <h1 class="text-3xl md:text-4xl text-main-blue font-Coda ml-5">Reportes</h1>

        <!-- Botones -->
        <div class="flex flex-col sm:flex-row sm:gap-x-4 gap-y-2 w-full">
            <a href="{{ route('reporte.ventas') }}" 
               class="inline-block w-full sm:w-auto text-center px-6 py-2 bg-main-blue text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-main-blue transition duration-300"
               aria-label="Ir al reporte de ventas">
               Reporte de Ventas
            </a>                       
            <a href="{{ route('reporte.compras') }}" 
               class="inline-block w-full sm:w-auto text-center px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 transition duration-300"
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

<!-- teibol -->


        <div class= "px-5 py-5 over" >
            <div class=" mt-8 md:overflow-y-auto max-sm:overflow-x-auto md:h-[500px]">
                <table id="salesReport" class="min-w-full bg-white display compact">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Nombre del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Marca del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Descripción del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Condición de stock</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Fecha</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Precio de compra</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Precio de venta</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Productos vendidos</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Ganancias brutas</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Ganancias netas</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $iteration = 0;
                            @endphp

                            @foreach ($audits as $audit)
                                @if($audit->auditable_type == 'App\Models\ProductoEntregado' && $audit->event == 'created')
                                    <tr>
                                        <td class="py-2 px-4 text-center border-b">{{ $reportedProducts[ $iteration ]->nombre }}</td>
                                        <td class="py-2 px-4 text-center border-b">{{ $reportedProducts[ $iteration ]->marca }}</td>
                                        <td class="py-2 px-4 text-center border-b">{{ $reportedProducts[ $iteration ]->descripcion }}</td>
                                        @if($reportedProducts[ $iteration ]->cantidad_stock > 0)
                                            <td class="py-2 px-4 text-center border-b">En stock ({{ $reportedProducts[ $iteration ]->cantidad_stock }})</td>
                                        @else
                                            <td class="py-2 px-4 text-center border-b">Agotado</td>
                                        @endif
                                        @foreach ($saledProducts as $saledProduct)
                                            @if($saledProduct->id == $audit->auditable_id)
                                            <td class="py-2 px-4 text-center border-b">{{ Carbon::parse($saledProduct->created_at)->format('Y-m-d') }}</td>
                                            @endif
                                        @endforeach
                                        <td class="py-2 px-4 text-center border-b">₡{{ $reportedProducts[ $iteration ]->precio_compra }}</td>
                                        <td class="py-2 px-4 text-center border-b">₡{{ $reportedProducts[ $iteration ]->precio_venta }}</td>
                                        
                                        <td class="py-2 px-4 text-center border-b dt-body-center">{{ $saledProducts[ $iteration ]->cantidad }}</td>
                                        <td class="py-2 px-4 text-center border-b">₡{{ $saledProducts[ $iteration ]->cantidad * $reportedProducts[ $iteration ]->precio_venta }}</td>
                                        <td class="py-2 px-4 text-center border-b">₡{{ $saledProducts[ $iteration ]->cantidad * ($reportedProducts[ $iteration ]->precio_venta - $reportedProducts[ $iteration ]->precio_compra) }}</td>
                                    </tr>
                                    @php
                                        $iteration++;
                                    @endphp
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="9" style="text-align:right"></th>
                                <th></th>
                            </tr>
                        </tfoot>
                </table>
            </div>
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

        columnDefs: [
            {
                targets: 9,
                width: '12%',
            }
        ],

        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json',
        },

        footerCallback: function (row, data, start, end, display) {
            let api = this.api();
    
            // Remove the formatting to get integer data for summation
            let intVal = function (i) {
                return typeof i === 'string' ? i.replace(/[\₡,]/g, '') * 1 : typeof i === 'number' ? i : 0;
            };
    
            // Total over all pages
            total = api.column(9).data().reduce((a, b) => intVal(a) + intVal(b), 0);
    
            // Total over this page
            pageTotal = api.column(9, { page: 'current' }).data().reduce((a, b) => intVal(a) + intVal(b), 0);
    
            // Update footer
            api.column(9).footer().innerHTML = 'Total: ₡' + pageTotal + '<br> Total General: ₡' + total;
        },
    });

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