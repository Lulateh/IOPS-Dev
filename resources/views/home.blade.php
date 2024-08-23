@extends('layouts.plantilla')

@section('title')
    Home
@endsection

@section('content')
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
            <img class="w-24 ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
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

<!--Seccion 1-->
<div>
    <div>
        <div>
            <h1>
                LogiStock by I.OPS
            </h1>
            <p>
                La nueva forma de mantener actualizado tu <br> inventario, brindandote distintos servicios <br> para optimizar esta función.
            </p>
        </div>
        <div>
            <button>
                Probar LogiStock
            </button>
            <button>
                Ir a LogiStock
            </button>
        </div>
    </div>

    <div>
        <img src="D:\Repositorios\LogiStock\icons\IopsIconBlack.png" alt="">
    </div>
</div>
@endsection