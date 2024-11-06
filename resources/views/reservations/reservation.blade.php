@extends('layouts.plantilla')

@section('title')
    Reservations
@endsection

@section('content')
@include('components.header')

<section class="columns-2 flex">

    <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl bg-main-green text-gray-100">Reservas</a></li>
                <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reportes</a></li>
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

    <div>

        <div class="flex columns-2 mt-10 ml-24">
            <h1 class="font-normal font-Poppins text-main-green text-3xl">
                Reservas
            </h1>

            <div class="ml-[38rem]">

                <form action="{{ route('reservation.add') }}" method="POST">
                    @csrf
                <input type="submit" value="Agregar reserva" class="cursor-pointer active:bg-secondary-green text-white bg-main-green px-8 py-1 rounded-lg font-Coda">
                </form>

            </div>
            
        </div>

        <div class="ml-20 mt-5">
            <div class="overflow-y-scroll basis-5/6 gap-2 flex flex-wrap mt-2 h-[32rem]">
            
                @foreach ($reservas as $reserva)
                    <div class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
                        <a href="{{route('reservation.show', $reserva->id)}}">
        
                            <div class="ml-4 mt-[20px] mr-3">
                                <div class="border-b-2 border-dotted border-main-green columns-2 m-1">
                                    <div class="font-Poppins text-secondary-green mt-2">
                                        <h3 class="uppercase">{{$reserva->estado}}</h3>
                                    </div>
        
                                    <div class="font-Coda text-main-green text-right mr-2">
                                        @foreach ($clientes as $cliente)
                                            @if ($reserva -> cliente_id == $cliente -> id)
                                                <p class="m-0">Cliente: {{$cliente -> nombre_cliente}}</p>
                                            @endif
                                        @endforeach
                                        <p class="m-0">Fecha: {{$reserva -> fecha_salida}}</p>
                                    </div>
                                </div>
        
                                <div class="flex ">
                                    @foreach ($productosReservados as $productoReservado)
                                        @if ($productoReservado -> reservas_id == $reserva -> id)
                                            <div class="flex  m-1 box-border h-16 gap-2 mr-4 mt-3  text-secondary-green ">
                                                <div class="flex border border-black h-12 px-2">
                                                    <div class="flex flex-col ml-2 mt-1">
                                                        @foreach ($posts as $producto)
                                                            @if ($productoReservado -> producto_id == $producto -> id)
                                                                <p class="font-Coda text-xs m-0">{{$producto -> nombre}}</p>
                                                                <p class="font-Coda text-xs m-0">codigo producto: {{$producto -> id}}</p>
                                                            @endif
                                                        @endforeach
                                                    </div>
        
                                                    <div class="flex ml-6 mt-[0.45rem]">
                                                        <p class="font-Poppins font-extrabold text-secondary-green text-2xl">{{$productoReservado -> cantidad}}</p>   
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
        
                            <div class="text-right mr-7">
                                <p class="font-Coda font-black text-lg">N° {{$reserva -> id}}</p>
                            </div>
                        </input>
                    </div> 
                @endforeach
                
            </div>
        </div>

    </div>

  


        

</section>