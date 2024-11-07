@extends('layouts.plantilla') 

@section('title')
    Add proveedor
@endsection

@section('content')
@include('components.header')
</header>
    
    
<div class="mt-8">
    <a href="{{ route('proveedores.index') }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
    ← Volver
   </a>
 </div>

   
<div class= "flex justify-center">
    <div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg mt-10">
    <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Agregar Proveedor</h1>
        <form action="{{ route('proveedor.add') }}" method="POST" class="w-full">
                @csrf
                <div class="grid grid-cols-2 gap-2 font-Poppins">
                    <div class="ml-28">
                        <label class="block font-semibold">Nombre</label>
                        <input type="text" name="nombre" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);" required>
                    </div>
                    <div >
                        <label class="block font-semibold">Teléfono</label>
                        <input type="text" name="telefono" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);" required>
                    </div>
                </div>
                    <div class="mt-10 mb-10 flex justify-center">
                    <div>
                        <label class="block font-semibold">Email</label>
                        <input type="email" name="email" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);" required>
                    </div>
                    </div>
                
                <div class="flex justify-center">
                     <input type="submit" class="text-white bg-main-blue cursor-pointer px-4 py-1 rounded-xl font-Poppins" value="Agregar">
                     </div>
        </form>
    </div>
</div>
@endsection
