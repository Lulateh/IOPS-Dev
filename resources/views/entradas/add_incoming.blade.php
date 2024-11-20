@extends('layouts.plantilla') 

@section('title')
    Addincoming
@endsection

@section('content')
@include('components.header')
    
<div class="mt-8">
    <a href="{{ route('incoming')}}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>
   
<div class= "mt-10 flex justify-center ">
    <div class="bg-lilac bg-opacity-20 lg:w-3/4 md:w-3/4 p-10 rounded-lg shadow-lg">
        <h1 class="font-Poppins font-medium text-center text-3xl mb-10 text-main-blue">Agregar Entrada</h1>
        <form action="{{route('incoming.post')}}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-8 font-Poppins">
                <div>
                    <label class="flex items-center mb-2 font-semibold text-xl">
                        
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                     <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z"/>
                    </svg>Producto</label>
                    <div class="relative inline-block mb-5">
                        <select name="prod_id" class="md:w-[16rem] block appearance-none lg:w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            <option value="">Seleccione un producto</option>
                            @foreach($posts as $producto)
                            <option value="{{ $producto->id }}" {{ old('prod_id') == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }} ({{ $producto->cantidad_stock }})</option>
                            @endforeach
                        </select>
                        @error('prod_id')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div>
                    <label class="flex items-center mb-2 font-semibold text-xl">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                    </svg>
                Proveedor</label>
                    <div class="relative inline-block  mb-5">
                        <select name="prov_id" class="block appearance-none lg:w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline md:w-[16rem]" style="background-color: rgb(255, 255, 255);">
                            <option value="">Seleccione un proveedor</option>
                            @foreach($proveedores as $proveedor)
                            @if($proveedor->estado == 'activo')
                                <option value="{{ $proveedor->id }}" {{ old('prov_id') == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre_proveedor }}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('prov_id')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                
            </div>
            <div class="lg:ml-[16rem] md:items-center">
                <label class="flex items-center mt-9 bg- mb-2 font-semibold text-xl"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                    <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                 </svg>Cantidad del producto</label>
                <input type="number" name="cantidad" id="cantidad" class="w-[31.6rem] p-2 mb-4 bg-white rounded-lg text-black" value="{{ old('cantidad') }}" required>
                    @error('cantidad')
                    <div class="text-red-600 mt-1">{{ $message }}</div> 
                    @enderror
            </div>

            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-blue px-6 py-2 rounded-lg font-Poppins" value="Agregar entrada">
            </div>
        </form>
    </div>
</div>
@endsection
