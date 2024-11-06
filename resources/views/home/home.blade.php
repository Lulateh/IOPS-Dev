@extends('layouts.plantilla')

@section('title')
    LogiStock - Home
@endsection

@section('content')
@include('components.header')

    
<section class="flex columns-2">

    <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl bg-main-green text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
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
                    Bienvenido, {{Auth::user()->nombre}}
                </h1>
            </div>

            <div class="columns-2 ml-72">
                <div>
                    <a href="{{ route('product.add') }}"  class="cursor-pointer active:bg-secondary-green text-white bg-main-green px-8 py-1 rounded-lg font-Coda">
                        Agregar producto
                    </a>
                </div>           
            </div>
        </div>

        <div class="ml-20 mt-5"> 

            <div class="basis-5/6 flex">
                @foreach ($posts as $post)
                <a href="{{route('product.show', $post->id)}}">
                    <div class="w-48 h-60 bg-card-bg mr-4 rounded-lg">
                        <figure>
                            <img class="h-32 mx-auto my-2" src="img/{{$post->imagen_url}}" alt="{{$post->imagen_url}}">
                        </figure>
                        <div class="ml-4 font-Coda">
                            <h2 class="text-xl"> {{$post->nombre}} </h2>
                            <p>Código: &nbsp; {{$post->id}}</p>
                            <div class=" flex justify-end  mr-4 mb-4">
                                <p class="bg-white px-2 rounded-lg">{{$post->cantidad_stock}} unidades</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        </div>

    </div>

</section>

    
@endsection