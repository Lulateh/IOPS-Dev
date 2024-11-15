@extends('layouts.plantilla') 

@section('title')
    Edit client
@endsection

@section('content')
@include('components.header')
    
    
<div class="mt-8">
    <a href="{{ route('clientes.index', ['id' => $cliente->id]) }}" class="ml-20 text-main-green font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>
   
   <div class= "flex justify-center">
    <div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg mt-10 ">
        <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Editar Cliente</h1>
        <form action="{{ route('clientes.update', ['id' => $cliente->id]) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="grid grid-cols-2 gap-2 font-Poppins">
                
        <div class="ml-28">
        <label class="block font-semibold">Nombre</label>
        <input type="text" name="nombre_cliente" value="{{ $cliente->nombre_cliente }}" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
        </div>

        <div>
        <label class="block  font-semibold">Email</label>
    <input type="email" name="email" value="{{ $cliente->email }}" class="w-[20rem] p-1 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
   
         </div>


    <div class="ml-28">
    <label class="block font-semibold">Teléfono</label>
        <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);"required 
       maxlength="10" 
       pattern="[0-9]{1,10}" 
       title="Solo números, hasta 10 dígitos" 
       oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
       placeholder="Ejemplo: 12345678">
       
    </div>

    <div>
    <label class="block font-semibold">Dirección</label>
    <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="w-[20rem] p-1 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
    </div>
    </div>


    <div class="flex justify-center mt-5">
    <div>
    <label class="block mb-2 font-semibold">Estado</label>
    <select name="estado" class="w-[22rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
        <option value="activo" {{ $cliente->estado == 'activo' ? 'selected' : '' }}>Activo</option>
        <option value="inactivo" {{ $cliente->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>
</div>



            <div class="flex justify-center mt-16">
                <input type="submit" class="text-white text-2xl bg-main-blue  px-8 py-1 rounded-xl font-Poppins" value="Modificar">
            </div>
        </form>
    </div>
</div>
@endsection
