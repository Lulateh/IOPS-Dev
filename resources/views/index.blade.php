@extends('layouts.plantilla')

@section('title')
    Iops
@endsection

@section('content')
<header class="bg-main-blue py-2">
    <div class="flex flex-col md:flex-row items-center justify-between px-4">
        <div>
            <img class="w-24 lg:ml-20 md:ml-20" src= "{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>

        <div class="mt-4 md:mt-0 space-x-2 max-sm:mb-6">
            <a href=" {{ url('/login') }} ">
                <button class="bg-neutral-300 px-8 py-1 rounded-lg font-Coda">
                    Ir a LogiStock
                </button>
            </a>

            <a href="./safetyPage">
                <button class="text-white bg-lilac ml-2 px-8 py-1 rounded-lg font-Coda">
                    Probar LogiStock
                </button>
            </a>
        </div>
    </div> 
</header>

<section class="grid grid-cols-1 md:grid-cols-2 bg-neutral-300 items-center px-4">
    <div class=" my-10 md:my-40 ml-20 break-inside-avoid">

        <div>
            <h1 class="font-medium font-Poppins text-3xl md:text-6xl">
                LogiStock by I.OPS
            </h1>
            <p class="mt-4 font-Coda text-lg md:text-xl">
                La nueva forma de mantener actualizado tu <br> inventario, brindandote distintos servicios <br> para optimizar esta función.
            </p>
        </div>

        <div class="mt-4 space-x-4 md:text-xl">
            <a href="./safetyPage">
                <button class="text-white bg-lilac  md:mb-6 max-sm:mb-6 px-8 py-1 rounded-lg font-Coda">
                    Probar LogiStock
                </button>
            </a>

            <a href=" {{ url('/login') }} ">
                <button class="text-white bg-lilac lg:ml-4 px-8 py-1 rounded-lg font-Coda">
                    Ir a LogiStock
                </button>
            </a>
        </div>

    </div>

    <div class="flex justify-center mt-12 mb-6 lg:mr-20 md:mr-20">
        <img class="w-3/4 md:w-full" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="LogiStockIconBlack">
    </div>
</section>

<section class="grid grid-cols-1 md:grid-cols-2 bg-main-blue py-10">
        
        <div class="flex justify-center lg:my-10 md:my-[15rem] md:ml-20">
            <img class="lg:w-3/4 max-sm:w-3/4 md:w-full md:h-[15rem]" src="{{ asset('img/LogiStockIconWhite.png') }}" alt="LogiStockIconWhite">
        </div>

        <div class="text-center md:text-left px-4 lg:ml-16 mt-10 md:mt-28 md:ml-8 md:mr-8">
            <p class=" font-Coda sm:text-center text-lg md:text-2xl  text-white align-middle">
                LogiStock by I.OPS te ofrece distintas funciones y <br> apartados tales como Inventario, Entregas, Reportes, <br> etc.<br> <br> 
                Todos estos pensados para mejorar tu experiencia <br> manejando tu negocio y optimizando procesos tediosos <br> como el ordenar tu inventario.<br> <br>
                Seguimos creciendo y aun estamos en el proceso de <br> implementar otras funciones utiles para ti y tu negocio.
            </p>
        </div>

</section>

<section class="grid grid-cols-1 md:grid-cols-2 bg-neutral-300 px-4 py-10 items-center">
    
        <div class="ml-10">
            <h2 class="font-medium font-Poppins text-2xl md:text-4xl">
                ¿Quienes somos?
            </h2>
            <p class=" font-Coda mt-4 text-lg md:text-xl">
                Somos I.OPS Inventory Operations, una empresa cuya meta es apoyar a pequeños y grandes empresarios otorgando herramientas capaces de optimizar y mejorar los procesos tediosos y largos del oficio.<br><br>
                Por ahora estamos en el proceso de mejorar LogiStock, un sistema de manejo de inventarios que comprenda desde microempresas hasta operaciones más grandes y complejas, como hoteles o hospitales.
            </p>
        </div>

        <div class="flex justify-center">
            <img class="w-3/4 md:w-full" src="{{ asset('img/IopsIconBlack.png') }}" alt="">
        </div>
    
</section>

<footer class="bg-main-blue py-2">
    <div class="flex flex-col md:flex-row items-center justify-between px-4">
       
        <img class="w-24 ml-20" src= "{{ asset('img/IopsIconWhite.png') }}" alt="">
        <p class="font-Coda text-white text-center md:text-righ">
                Información de contacto <br>
                invntryoperations@gmail.com
        </p>
    </div> 
</footer>
@endsection