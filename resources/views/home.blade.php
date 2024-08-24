@extends('layouts.plantilla')

@section('title')
    Home
@endsection

@section('content')
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
            <img class="w-24 ml-20" src= "{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>

        <div class="relative float-right mr-20 mt-4">
            <button class="bg-neutral-300 px-8 py-1 rounded-lg font-Coda">
                Ir a LogiStock
            </button>
            <button class="text-white bg-secondary-green ml-2 px-8 py-1 rounded-lg font-Coda">
                Probar LogiStock
            </button>
        </div>
    </div> 
</header>

<section class="columns-2 bg-neutral-300">
    <div class=" my-40 ml-20 break-inside-avoid">

        <div>
            <h1 class="font-Coda text-6xl">
                LogiStock by I.OPS
            </h1>
            <p class="mt-4 font-Coda text-xl">
                La nueva forma de mantener actualizado tu <br> inventario, brindandote distintos servicios <br> para optimizar esta función.
            </p>
        </div>

        <div class="mt-4">
            <button class="text-white bg-secondary-green px-8 py-1 rounded-lg font-Coda">
                Probar LogiStock
            </button>
            <button class="text-white bg-main-green ml-4 px-8 py-1 rounded-lg font-Coda">
                Ir a LogiStock
            </button>
        </div>

    </div>

    <div class="inline-flex justify-end mt-12 mr-20">
        <img class=" size-11/12" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="">
    </div>
</section>

<section class="columns-2 bg-main-green">
    <div class=" py-28">
        
        <div class="break-inside-avoid  ml-20">
            <img class=" size-11/12" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="">
        </div>

        <div class="inline-flex mt-36">
            <p class=" font-Coda text-xl text-white align-middle">
                LogiStock by I.OPS te ofrece distintas funciones y <br> apartados tales como Inventario, Entregas, Reportes, <br> etc.<br> <br> 
                Todos estos pensados para mejorar tu experiencia <br> manejando tu negocio y optimizando procesos tediosos <br> como el ordenar tu inventario.<br> <br>
                Seguimos creciendo y aun estamos en el proceso de <br> implemtar otras funciones utiles para ti y tu negocio.
            </p>
        </div>

    </div>
</section>
@endsection