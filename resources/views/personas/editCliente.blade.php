@extends('layouts.plantilla') 

@section('title')
    Edit incoming
@endsection

@section('content')
<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>

        <div class="relative float-right mr-20 mt-3">
        <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
            </a>
        </div>
    </div> 
</header>
    
    
<div class="mt-8">
    <a href="{{ route('clientes.index', ['id' => $cliente->id]) }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
         ← Volver
    </a>
</div>
   
   <div class= "flex justify-center">
    <div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg mt-10 ">
        <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Editar Cliente</h1>
        <form action="{{ route('clientes.update', ['id' => $cliente->id]) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="grid grid-cols-2 gap-2 font-Poppins">
        <div class="ml-28">
        <label class="block font-semibold">Nombre</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre_cliente }}" class="w-[20rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
        </div>

        <div>
        <label class="block  font-semibold">Email</label>
    <input type="email" name="email" value="{{ $cliente->email }}" class="w-[20rem] p-1 rounded-lg text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
   
         </div>


    <div class="ml-28">
    <label class="block font-semibold">Teléfono</label>
        <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="w-[20rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
       
    </div>

    <div>
    <label class="block font-semibold">Dirección</label>
    <input type="email" name="email" value="{{ $cliente->direccion }}" class="w-[20rem] p-1 rounded-lg text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
    </div>
    </div>





            <div class="flex justify-center mt-16">
                <input type="submit" class="text-white text-2xl bg-main-green px-8 py-1 rounded-xl font-Poppins" value="Modificar">
            </div>
        </form>
    </div>
</div>
@endsection
