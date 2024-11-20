@extends('layouts.plantilla') 

@section('title')
    Edit proveedor
@endsection

@section('content')
@include('components.header')
    
    
<div class="mt-8">
    <a href="{{ route('proveedores.index') }}" class="ml-5 lg:ml-20 text-black font-Coda hover:underline text-2xl">  
    ← Volver
   </a>
 </div>
   
   <div class= "flex justify-center">
    <div class=" mt-4 bg-lilac bg-opacity-20 w-3/4 p-2 lg:p-10 rounded-lg shadow-lg lg:mt-10">
    <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Editar Proveedor</h1>
       
        <form action="{{ route('proveedores.update', ['id' => $proveedor->id]) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="grid-cols-1 grid lg:grid-cols-2 gap-2 lg:gap-8 font-Poppins ">
    <div class="lg:ml-16">
        <label class="block mb-2 font-semibold">Nombre</label>
        <div class="relative inline-block mb-5">
            <input type="text" name="nombre" value="{{ $proveedor->nombre_proveedor }}" class="lg:w-[22rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
        </div>
    </div>

    <div>
        <label class="block mb-2 font-semibold">Email</label>
       
            <input type="email" name="email" value="{{ $proveedor->email }}" class="lg:w-[22rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
    </div>
<div class="lg:ml-16">
    <label class="block  mb-2 font-semibold">Teléfono</label>
    <input type="text" name="telefono" value="{{ $proveedor->telefono }}" class="lg:w-[22rem] p-1 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required 
       maxlength="10" 
       pattern="[0-9]{1,10}" 
       title="Solo números, hasta 10 dígitos" 
       oninput="this.value = this.value.replace(/[^0-9]/g, '')" 
       placeholder="Ejemplo: 12345678">
</div>
<div>
    <label class="block mb-2 font-semibold">Estado</label>
    <select name="estado" class="lg:w-[22rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
        <option value="activo" {{ $proveedor->estado == 'activo' ? 'selected' : '' }}>Activo</option>
        <option value="inactivo" {{ $proveedor->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>
</div>




            <div class="flex justify-center mt-10">
            <button class="text-white bg-main-blue group hover:bg-blue-900  px-6 py-2 rounded-lg font-Poppins flex items-center relative">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" absolute w-6 h-6 text-white group-hover:opacity-0 transition-opacity duration-300" viewBox="0 0 16 16">
    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-6 h-6 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
    </svg>
    <span class="ml-8 font-Poppins text-white">Editar Proveedor</span>
</button></div>
        </form>
    </div>
</div>
@endsection
