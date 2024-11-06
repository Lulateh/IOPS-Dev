@extends('layouts.plantilla')

@section('title')
    LogiStock - Reporte diario
@endsection 

@section('content')
@include('components.header')
<section class="flex columns-2">

    <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl bg-main-green  text-gray-100">Reportes</a></li>
            </ul>

            <ul>
                <h2 class="text-3xl font-bold my-3">Personas</h2>
                <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Proveedores</a></li>
                <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
                @if(Auth::user()->rol == 'administrador')
                <li><a href="{{route('users.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
                @endif            </ul>
        </div>
    </div>

    <div >
        <div>
            <div class="flex flex-row mt-10 ml-20">

                    <h1 class="text-3xl text-main-green font-Coda mt-4">Reportes</h1>

                    <div class="space-x-2 pt-6 ml-[27rem]">
                        <a href="{{ route('reporte.diario') }}" class="px-4 py-2 bg-[#26413C] text-white rounded">Reporte diario</a>
                        <a href="{{ route('reporte.semanal') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte semanal</a>
                        <a href="{{ route('reporte.mensual') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte mensual</a>
                    </div>

                </div>

            <div class="flex columns-2 mt-10">

                    <button class="px-4 h-[2.5rem] pb-[1rem] pt-[0.5rem] bg-[#26413C]  ml-20 text-white rounded">
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