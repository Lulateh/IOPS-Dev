@extends('layouts.plantilla')

@php
    use Carbon\Carbon;
@endphp

@section('title')
    LogiStock - Reporte de compras
@endsection 

@section('content')
@include('components.header')

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
                <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Proveedores</a></li>
                <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
                @if(Auth::user()->rol == 'administrador')
                <li><a href="{{route('users.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
                @endif
            </ul>
        </div>
    </div>

    <div >
        <div>
            <div class="flex flex-row mt-10 ml-20">

                    <h1 class="text-3xl text-main-green font-Coda mt-4">Reportes</h1>

                    <div class="space-x-2 pt-6 ml-[27rem]">
                        <a href="{{ route('reporte.ventas') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte de ventas</a>
                        <a href="{{ route('reporte.compras') }}" class="px-4 py-2 bg-[#26413C] text-white rounded">Reporte de compras</a>
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
                                <th class="py-2 px-4 border-b bg-[#64746B] text-white dt-head-center">Productos comprados</th>
                                <th class="py-2 px-4 border-b bg-[#26413C] text-white dt-head-center">Proveedor</th>
                                
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