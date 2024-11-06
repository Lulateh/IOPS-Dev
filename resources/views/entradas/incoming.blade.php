@extends('layouts.plantilla') 

@section('title')
    incoming
@endsection

@section('content')

@include('components.header')

    <section class="flex columns-2">

        <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
            <div class="flex flex-col font-Coda justify-center text-center mt-20">
                <ul>
                <h2 class="text-3xl font-bold mb-3">Menu</h2>
                    <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                    <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl bg-main-green  text-gray-100">Entradas</a></li>
                    <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                    <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                    <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reportes</a></li>
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
        
        <div>

            <div class="flex columns-2 mt-10 ml-20">
                
                <div>
                    <h1 class="font-Coda text-main-green text-3xl">
                    Entradas
                    </h1>
                </div>

                <div class="ml-[30rem]">
                    <a href="{{ route('incoming.addIncoming') }}" class=" cursor-pointer active:bg-secondary-green text-white bg-main-green px-8 py-1 rounded-lg font-Coda">
                        Agregar entrada
                    </a>
                </div>
                    
            </div>

            <div class="ml-20 mt-5">

                <div class="mt-10 max-h-[600px] overflow-y-auto">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($incomings as $incoming)
                            <a href="{{ route('incomings.show', ['id' => $incoming->id]) }}">
                                <div class="font-Coda relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
                                    <div class="mx-10 flex flex-col justify-center">
                                        <h2 class="text-l font-bold ">{{ $incoming->product->nombre }}</h2>
                                        <p class="text-sm">Código: {{ $incoming->producto_id }}</p>
                                    </div>
                                    <div class="ml-auto mb-8 mr-8 flex flex-col items-end">
                                        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-8">
                                            <span class="text-sm">{{ $incoming->cantidad_entrada }} unidades</span>
                                        </div>
                                        <p class="ml-10 mt-8 text-xs">Llegaron {{ $incoming->cantidad_entrada }} unidades el {{ $incoming->created_at->format('d-m-y') }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                </div>
            </div>

        </div>

    </section>


@endsection