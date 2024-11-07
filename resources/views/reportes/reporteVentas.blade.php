@extends('layouts.plantilla')

@php
    use Carbon\Carbon;
@endphp

@section('title')
    LogiStock - Reporte de ventas
@endsection 

@section('content')
<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
        <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </a>
        </div>

        <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        </div>
    </div> 
</header>

<section class="flex columns-2">

    <div class="basis-1/6 bg-card-bg h-screen ">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                <li><a href="{{route('reporte.ventas')}}" class = "block px-4 py-2 text-xl bg-main-green  text-gray-100">Reportes</a></li>
            </ul>

            <ul>
                <h2 class="text-3xl font-bold my-3">Personas</h2>
                <li><a href="{{route('proveedores.index')}}" class = "flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                </svg>
                Proveedores
            </a>
        </li>
                <li><a href="{{route('clientes.index')}}" class = "flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                </svg>
                Clientes
            </a>
        </li>
                @if(Auth::user()->rol == 'administrador')
                <li><a href="{{route('users.index')}}" class = "flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                        <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
                    </svg>Usuarios
                </a>
            </li>
                @endif
            </ul>
        </div>
    </div>

    <div >
        <div>
            <div class="flex flex-row mt-10 ml-5">

                    <h1 class="text-3xl text-main-green font-Coda mt-4">Reportes</h1>

                    <div class="space-x-2 pt-6 ml-[27rem]">
                        <a href="{{ route('reporte.ventas') }}" class="px-4 py-2 bg-[#26413C] text-white rounded">Reporte de ventas</a>
                        <a href="{{ route('reporte.compras') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte de compras</a>
                        <a href="{{ route('reporte.reservas') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte de reservas</a>
                    </div>

                </div>

        <div class="ml-20 mt-5 overflow-y-auto">
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

        <div class="ml-5 mt-5">
            <div class=" mt-8 rounded h-[26rem]  mr-10">
                <table id="salesReport" class="min-w-full bg-white display compact ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Nombre del producto</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Marca del producto</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Descripción del producto</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Condición de stock</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Fecha</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Precio de compra</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Precio de venta</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Productos vendidos</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Ganancias brutas</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Ganancias netas</th>
                                
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
                                <th colspan="9" style="text-align:right">Total:</th>
                                <th></th>
                            </tr>
                        </tfoot>
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
            api.column(9).footer().innerHTML = '₡' + pageTotal + ' ( ₡' + total + ' total)';
        },
    });

    document.querySelectorAll('#min, #max').forEach((el) => {
        el.addEventListener('change', () => table.draw());
    });
</script>

@endsection