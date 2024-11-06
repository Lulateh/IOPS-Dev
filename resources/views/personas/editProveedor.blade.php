@extends('layouts.plantilla') 

@section('title')
    Edit incoming
@endsection

@section('content')
@include('components.header')
    
    
<div class="mt-8">
    <a href="{{ route('proveedores.index', ['id' => $proveedor->id]) }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
         ← Volver
    </a>
</div>
   
   <div class= "mt-10 flex justify-center">
    <div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg">
    <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Editar Proveedor</h1>
       
        <form action="{{ route('proveedores.update', ['id' => $proveedor->id]) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="grid grid-cols-2 gap-8 font-Poppins ">
    <div class="ml-16">
        <label class="block mb-2 font-semibold">Nombre</label>
        <div class="relative inline-block mb-5">
            <input type="text" name="nombre" value="{{ $proveedor->nombre_proveedor }}" class="w-[22rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
        </div>
    </div>

    <div>
        <label class="block mb-2 font-semibold">Email</label>
       
            <input type="email" name="email" value="{{ $proveedor->email }}" class="w-[22rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
    </div>
<div class="ml-16">
    <label class="block  mb-2 font-semibold">Teléfono</label>
    <input type="text" name="telefono" value="{{ $proveedor->telefono }}" class="w-[22rem] p-1 rounded-lg text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
</div>
<div>
    <label class="block mb-2 font-semibold">Estado</label>
    <select name="estado" class="w-[22rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
        <option value="activo" {{ $proveedor->estado == 'activo' ? 'selected' : '' }}>Activo</option>
        <option value="inactivo" {{ $proveedor->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>
</div>




            <div class="flex justify-center mt-10">
                <input type="submit" class="text-white text-2xl bg-main-green px-6 py-1 rounded-lg font-Poppins" value="Modificar">
            </div>
        </form>
    </div>
</div>
@endsection
