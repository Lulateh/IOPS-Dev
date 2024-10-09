@extends('layouts.plantilla')

@section('title')
    Lista de Clientes
@endsection

@section('content')
<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}">
                <img class="w-[6rem] ml-20" src="{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>
        <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        </div>
    </div> 
</header>

<div class="mt-8">
    <a href="{{ route('home') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
        ← Volver
    </a>
</div>

<div class="mt-28 flex justify-center">
    <div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg">
        <form action="{{ route('add.cliente') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-8 font-Poppins">
                <div>
                    <label class="block mb-2 font-semibold">Nombre</label>
                    <input type="text" name="nombre" class="w-[20rem] p-2 mb-4 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);" required>
                </div>
                <div>
                    <label class="block mb-2 font-semibold">Teléfono</label>
                    <input type="text" name="telefono" class="w-[20rem] p-2 mb-4 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);" required>
                </div>
            </div>
            <div class="ml-[16rem]">
                <label class="block mb-2 font-semibold">Email</label>
                <input type="email" name="email" class="w-[31.6rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            <div class="ml-[16rem]">
                <label class="block mt-9 mb-2 font-semibold">Dirección</label>
                <input type="text" name="direccion" class="w-[31.6rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-green px-6 py-2 rounded-lg font-Poppins" value="Agregar Cliente">
            </div>
        </form>
    </div>
</div>
@endsection
