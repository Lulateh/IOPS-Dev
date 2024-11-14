@extends('layouts.plantilla')

@section('title')
    Reservations
@endsection

@section('content')
@include('components.header')

<section class="columns-2 flex">

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

                <div class="flex columns-2 px-4 py-2 text-xl bg-main-blue text-gray-100">
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

                <div class="flex columns-2 px-4 py-2 text-xl text-main-blue hover:bg-main-blue hover:text-gray-100">
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
    <div>

        <div class="flex columns-2 mt-10 ml-24">
            <h1 class="font-normal font-Poppins text-main-blue text-3xl">
                Reservas
            </h1>

            <div class="ml-[39rem] mt-1">
                

                <form action="{{ route('reservation.add') }}" method="POST">
                    @csrf
                    <input type="submit" value="Agregar reserva" class="cursor-pointer active:bg-secondary-green text-white bg-main-blue px-8 py-1 rounded-lg font-Coda">
                </form>

            </div>
            
        </div>

        <div class="ml-20 mt-5">
            <div class="overflow-y-scroll basis-5/6 gap-2 flex flex-wrap mt-2 h-[32rem]">
            
                @foreach ($reservas as $reserva)
                    <div class="w-[45%] h-60 bg-lightB bg-opacity-20 mr-4 rounded-lg">
                        <a href="{{route('reservation.show', $reserva->id)}}">
        
                            <div class="ml-4 mt-[20px] mr-3">
                                <div class="border-b-2 border-dotted border-black columns-2 m-1">
                                    <div class="font-Poppins text-black mt-2">
                                        <h3 class="uppercase">{{$reserva->estado}}</h3>
                                    </div>
        
                                    <div class="font-Coda text-black text-right mr-2">
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
                                            <div class="flex  m-1 box-border h-16 gap-2 mr-4 mt-3  text-black ">
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
                                                        <p class="font-Poppins font-extrabold text-black text-2xl">{{$productoReservado -> cantidad}}</p>   
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