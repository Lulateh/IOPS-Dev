@extends('layouts.plantilla')

@section('title')
    LogiStock - Reporte diario
@endsection 

@section('content')
<header class="bg-main-blue py-3">
    <div class="columns-2">
        <div>
        <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </a>
        </div>

        <div class="relative float-right mr-20 mt-3">
        <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-white" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
            </a>
        </div>
    </div> 
</header>

<section class="flex columns-2">

    <div class="basis-1/6 bg-green bg-opacity-15 pb-[10.3rem]">
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
                    <li><a href="{{route('reporte.diario')}}" class = "ml-5">Reportes</a></li>
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

                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="ml-10" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    @if(Auth::user()->rol == 'administrador')
                    <li><a href="{{route('users.index')}}" class = "ml-5">Usuarios</a></li>
                    @endif
                </div> 
            </ul>
        </div>
    </div>

    <div >
        <div>
            <div class="flex flex-row mt-10 ml-20">

                    <h1 class="text-3xl text-main-blue font-Coda mt-4">Reportes</h1>

                    <div class="space-x-2 pt-6 ml-[27rem]">
                        <a href="{{ route('reporte.diario') }}" class="px-4 py-2 bg-main-blue text-white hover:bg-gray-200 hover:text-black rounded">Reporte diario</a>
                        <a href="{{ route('reporte.semanal') }}" class="px-4 py-2 bg-gray-200 text-black hover:bg-main-blue hover:text-white rounded">Reporte semanal</a>
                        <a href="{{ route('reporte.mensual') }}" class="px-4 py-2 bg-gray-200 text-black hover:bg-main-blue hover:text-white rounded">Reporte mensual</a>
                    </div>

                </div>

            <div class="flex columns-2 mt-10">

                    <button class="px-4 h-[2.5rem] pb-[1rem] pt-[0.5rem] bg-main-blue  ml-20 text-white rounded">
                        Refrescar tabla
                    </button>

                    <h2 class="text-xl ml-[58rem]"><?php echo date('d-m-Y'); ?></h2>

                </div>
            </div>

        <div class="ml-20 mt-5">
            <div class=" mt-8 rounded h-[26rem]  mr-10">
                <table id="salesReport" class="min-w-full bg-white display compact ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Nombre del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Marca del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Descripción del producto</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Precio de compra</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Precio de venta</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Condición de stock</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Movimiento</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Cantidad de productos del movimiento</th>
                                <th class="py-2 px-4 border-b bg-main-blue text-white dt-head-center">Ganancias bruta</th>
                                <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white dt-head-center">Ganancias netas</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $iteration = 0;
                            @endphp

                            @foreach ($audits as $audit)
                                @if($audit->auditable_type == 'App\Models\ProductoEntregado')
                                    <tr>
                                        <td class="py-2 px-4 text-center border-b">{{ $reportedProducts[ $iteration ]->nombre }}</td>
                                        <td class="py-2 px-4 text-center border-b">{{ $reportedProducts[ $iteration ]->marca }}</td>
                                        <td class="py-2 px-4 text-center border-b">{{ $reportedProducts[ $iteration ]->descripcion }}</td>
                                        <td class="py-2 px-4 text-center border-b">₡{{ $reportedProducts[ $iteration ]->precio_compra }}</td>
                                        <td class="py-2 px-4 text-center border-b">₡{{ $reportedProducts[ $iteration ]->precio_venta }}</td>
                                        @if($reportedProducts[ $iteration ]->cantidad_stock > 0)
                                            <td class="py-2 px-4 text-center border-b">En stock</td>
                                        @else
                                            <td class="py-2 px-4 text-center border-b">Agotado</td>
                                        @endif
                                        @if($audit->auditable_type == 'App\Models\ProductoEntregado')
                                            <td class="py-2 px-4 text-center border-b">Venta</td>
                                        @endif
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
                </table>
            </div>
        </div>
    </div>

</section>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>


<script>
    $(document).ready(function() {
        $('#salesReport').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],

            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
            }
        });
    });
</script>
@endsection