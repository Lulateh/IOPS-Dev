@extends('layouts.plantilla')

@section('title')
    Reservations
@endsection

@section('content')
@include('components.headerTables')

<section class="md:ml-[15rem] md:mr-[1rem]">
    
    <div class="basis-5/6 gap-2 flex flex-wrap">

        <div class="flex columns-2 mt-10 lg:ml-24 md:ml-16 max-sm:ml-4">
            <h1 class="font-normal font-Coda text-main-blue text-3xl md:text-4xl">
                Reservas
            </h1>

            <div class="lg:ml-[45rem] md:ml-[5rem] mt-1 text-sm md:text-lg max-sm:ml-20">
                <a class="text-white hover:bg-blue-900 bg-main-blue px-8 py-1 rounded-lg font-Poppins" href="{{route('reservation.add')}}">Agregar reserva</a>
            </div>
        </div>

        <div class="lg:ml-20 md:ml-20 max-sm:ml-12 mt-5">
            <div class="overflow-y-scroll basis-5/6 gap-4 flex flex-wrap lg:mt-2 lg:h-[30rem] max-sm:mr-auto lg:w-[95%] md:h-[50rem] max-sm:h-[44rem] md:w-[28rem]">
            
                @foreach ($reservas as $reserva)
                    <div class="lg:w-[45%] md:w-[30rem] md:h-[15rem] lg:h-60 max-sm:h-[20rem] max-sm:w-[22rem] bg-lightB bg-opacity-20 mr-4 shadow-lg rounded-lg border hover:border-main-blue">
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
        
                                <div class="lg:flex md:flex max-sm:grid ">
                                    @foreach ($productosReservados as $productoReservado)
                                        @if ($productoReservado -> reservas_id == $reserva -> id)
                                            <div class="flex  m-1 box-border lg:h-16 md:h-16 max-sm:h-20   gap-2 mr-4 mt-3  text-black ">
                                                <div class="flex  border border-black max-sm:w-[13rem]  h-12 px-2">
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

@if(session('error'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
            button: {
                text: "OK",
                value: true,
                visible: true,
                className: "my-button",
                closeModal: true,
            }
        });
    </script>
@endif

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");

        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
        });
    });
</script>

</section>