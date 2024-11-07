@extends('layouts.plantilla')

@section('title')
    LogiStock - Reporte diario
@endsection 

@section('content')
<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
        <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </a>
        </div>

        <div class="relative float-right mr-20 mt-3">
        <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
            </a>
        </div>
    </div> 
</header>

<section class="flex columns-2">

<div class=" basis-1/7 bg-card-bg pb-[10.3rem]">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class=" text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class="flex items-center px-4 py-2 text-2xl  text-gray-700  hover:bg-main-green hover:text-gray-100">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                        <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464z"/>
                    </svg>
                    Inventario
                </a>
            </li>
                <li><a href="{{route('incoming')}}" class ="flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4 mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z"/>
                    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                </svg>
                Entradas
            </a>
        </li>
                <li><a href="{{route('reservations')}}" class = "flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                </svg>
                Reservas
            </a>
        </li>
                <li><a href="{{route('sales')}}" class = "flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                </svg>
                Ventas
            </a>
        </li>
                <li><a href="{{route('reporte.diario')}}" class = "flex items-center px-4 py-2 text-2xl text-gray-700 hover:bg-main-green hover:text-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                </svg>
                Reportes
            </a>
        </li>
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
                        <a href="{{ route('reporte.diario') }}" class="px-4 py-2 bg-[#26413C] text-white rounded">Reporte diario</a>
                        <a href="{{ route('reporte.semanal') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte semanal</a>
                        <a href="{{ route('reporte.mensual') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte mensual</a>
                    </div>

                </div>

            <div class="flex columns-2 mt-10">

                    <button class="px-4 h-[2.5rem] pb-[1rem] pt-[0.5rem] bg-[#26413C]  ml-5 text-white rounded">
                        Refrescar tabla
                    </button>

                    <h2 class="text-xl ml-[50rem]"><?php echo date('d-m-Y'); ?></h2>

                </div>
            </div>

        <div class="ml-5 mt-5">
            <div class=" mt-8 rounded h-[26rem]  mr-10">
                <table id="salesReport" class="min-w-full bg-white display compact ">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Nombre del producto</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Marca del producto</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Descripción del producto</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Precio de compra</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Precio de venta</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Condición de stock</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Movimiento</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Cantidad de productos del movimiento</th>
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Ganancias bruta</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Ganancias netas</th>
                                
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