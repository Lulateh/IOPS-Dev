@extends('layouts.plantilla')

@section('tittle')
    Sales Page
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
            <img class="w-16 ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </div>

        <div class="relative float-right mr-20 ">
            <img class="w-12" src="{{ asset ('icons/profileIcon.svg')}}" alt="">
        </div>
    </div> 
</header>
<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<section>
    <div class="columns-2 ">
    <h1 class="font-normal font-Poppins text-main-green text-3xl mt-10 ml-20 col-1">
        Salidas
    </h1>

    <a href=" {{ url('/login') }} ">
        <button class="text-white bg-main-green ml-[28rem] mt-20 px-4 py-1 rounded-lg font-Poppins col-2">
            Agregar reserva
        </button>  
    </a> 
</div>
    <div class="columns-2 ">
    
    </div>
</section>
<!-- --------------BODY-------------- -->

@endsection