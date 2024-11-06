@extends('layouts.plantilla')

@section('title')
    Lista de Clientes
@endsection

@section('content')
@include('components.header')

<div class="mt-8">
    <a href="{{ route('clientes.index') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
         ← Volver
    </a>
</div>

<div class="flex justify-center">
<div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg mt-10">
<h1 class="font-Poppins font-bold text-center text-3xl mb-10">Agregar Cliente</h1>
       
    <form action="{{ route('cliente.add') }}" method="POST" class="w-full">
        @csrf
        <div class="grid grid-cols-2 gap-2 font-Poppins">
           <div class="mr-10">
                <label class="block mb-2 font-semibold">Nombre</label>
                <input type="text" name="nombre" class="w-[23rem] p-1 rounded-xl" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            <div>
                <label class="block mb-2 font-semibold">Dirección</label>
                <input type="text" name="direccion" class="w-[23rem] p-1 rounded-xl text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            
            <div>
                <label class="block mb-2 font-semibold">Teléfono</label>
                <input type="text" name="telefono" class="w-[23rem] p-1  rounded-xl" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            
            <div>
                <label class="block mb-2 font-semibold">Email</label>
                <input type="email" name="email" class="w-[23rem] p-1  rounded-xl text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
        </div>

<div class="flex justify-center mt-16">
                <input type="submit" class="text-white bg-main-green cursor-pointer text-2xl px-8 py-1 rounded-xl font-Poppins" value="Agregar">
            </div>
        </form>
    </div>
</div>
@endsection