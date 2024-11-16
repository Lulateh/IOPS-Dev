@extends('layouts.plantilla')

@php
    use Carbon\Carbon;
@endphp

@section('title')
    LogiStock - Reporte de compras
@endsection 

@section('content')
@include('components.header')

<section>

    <!-- <div class="basis-1/6 bg-green bg-opacity-15 h-[calc(100vh-85px)] overflow-y-auto ">
        <div class="flex flex-col font-Coda justify-center text-center mt-20 text-main-blue">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                    </svg>
                    <li><a href="{{route('home')}}" class="ml-5">Inventario</a></li>
                </div>

                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                    </svg>
                    <li><a href="{{route('incoming')}}" class = "ml-5">Entradas</a></li>
                </div>

                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <li><a href="{{route('reservations')}}" class = "ml-5">Reservas</a></li>
                </div>

                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                    </svg>
                    <li><a href="{{route('sales')}}" class = "ml-5">Ventas</a></li>
                </div>

                <div class="flex columns-2 px-4 py-2 text-xl bg-main-blue text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
                      </svg>
                    <li><a href="{{route('reporte.ventas')}}" class = "ml-5">Reportes</a></li>
                </div>
            </ul>

            <ul>
                <h2 class="text-3xl font-bold my-3">Personas</h2>
                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                    </svg>
                    <li><a href="{{route('proveedores.index')}}" class = "ml-5">Proveedores</a></li>
                </div>

                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                    <li><a href="{{route('clientes.index')}}" class = "ml-5">Clientes</a></li>
                </div>

                @if(Auth::user()->rol == 'administrador')
                    <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                        </svg>
                        <li><a href="{{route('users.index')}}" class = "ml-5">Usuarios</a></li>
                    </div> 
                @endif
            </ul>
        </div>
    </div> -->

    <div >
               <!-- Botonera top -->
               <div class="px-4 py-6">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between space-y-4 lg:space-y-0 gap-y-4 lg:gap-x-8 lg:space-x-[27rem] w-full">
                 <!-- Título -->
                  <h1 class="text-3xl text-main-blue font-Coda">Reportes</h1>

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

            <div class=" mt-8 overflow-x-auto px-5 py-5">
                <table id="salesReport" class="min-w-full bg-white display compact ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Nombre del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Marca del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Descripción del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Condición de stock</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Fecha</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Precio de compra</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Precio de venta</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Productos comprados</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Proveedor</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $iteration = 0;
                            @endphp

                            @foreach ($audits as $audit)
                                @if($audit->auditable_type == 'App\Models\Incoming' && $audit->event == 'created')
                                    @foreach ($incomings as $incoming)
                                        @if($audit->auditable_id == $incoming->id)
                                            @foreach ($products as $product)
                                                @if($incoming->producto_id == $product->id)
                                                <tr>
                                                    <td class="py-2 px-4 text-center border-b">{{ $product->nombre }}</td>
                                                    <td class="py-2 px-4 text-center border-b">{{ $product->marca }}</td>
                                                    <td class="py-2 px-4 text-center border-b">{{ $product->descripcion }}</td>
                                                    @if($product->cantidad_stock > 0)
                                                        <td class="py-2 px-4 text-center border-b">En stock ({{ $product->cantidad_stock }})</td>
                                                    @else
                                                        <td class="py-2 px-4 text-center border-b">Agotado</td>
                                                    @endif
                                                    <td class="py-2 px-4 text-center border-b">{{ Carbon::parse($incoming->created_at)->format('Y-m-d') }}</td>
                                                    <td class="py-2 px-4 text-center border-b">₡{{ $product->precio_compra }}</td>
                                                    <td class="py-2 px-4 text-center border-b">₡{{ $product->precio_venta }}</td>
                                                    <td class="py-2 px-4 text-center border-b dt-body-center">{{ $incoming->cantidad_entrada }}</td>
                                                    @foreach ($proveedores as $proveedor)
                                                        @if($incoming->proveedor_id == $proveedor->id)
                                                            <td class="py-2 px-4 text-center border-b">{{ $proveedor->nombre_proveedor }}</td>
                                                        @endif
                                                    @endforeach
                                                </tr>
                                                @endif
                                            @endforeach
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
</script>

@endsection