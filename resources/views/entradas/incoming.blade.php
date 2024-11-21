@extends('layouts.plantilla') 

@section('title')
    incoming
@endsection

@section('content')
@include('components.headerTables')

    <section class="md:ml-[15rem] md:mr-[1rem]">
        
        <div>

            <div class="flex columns-2 mt-10 lg:ml-24 md:ml-12">
                
                <div>
                    <h1 class="font-Coda text-main-blue text-3xl md:text-4xl">
                    Entradas
                    </h1>
                </div>

                <div class="lg:ml-[45rem] md:ml-[7rem] mt-1 text-sm md:text-lg">
                    <a href="{{ route('incoming.addIncoming') }}" class=" cursor-pointer hover:bg-blue-900 text-white bg-main-blue px-8 py-1 rounded-lg font-Poppins">
                        Agregar entrada
                    </a>
                </div>
                    
            </div>

            <div class="ml-20 mt-5">

                <div class="mt-10 max-h-[600px] overflow-y-auto">
                    <div class="lg:grid lg:grid-cols-2 gap-4 md:grid lg:w-[100%] md:w-[26rem]">
                        @foreach ($incomings as $incoming)
                            <a href="{{ route('incomings.show', ['id' => $incoming->id]) }}">
                                <div class="font-Coda border hover:border-main-blue relative w-full h-32 bg-lightB bg-opacity-20 mr-4 rounded-lg flex items-center">
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

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuToggle = document.getElementById("menu-toggle");
            const sidebar = document.getElementById("sidebar");

            menuToggle.addEventListener("click", () => {
                sidebar.classList.toggle("hidden");
            });
        });
</script>

@endsection