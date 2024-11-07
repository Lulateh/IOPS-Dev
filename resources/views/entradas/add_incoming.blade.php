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
   
<div class= "mt-10 flex justify-center">
    <div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg">
        <h1 class="font-Poppins font-medium text-center text-3xl mb-10 text-main-blue">Agregar Entrada</h1>
        <form action="{{route('incoming.post')}}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-8 font-Poppins">
                <div>
                    <label class="block mb-2 font-semibold">Código del producto</label>
                    <div class="relative inline-block mb-5">
                        <select name ="prod_id" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            <option value="">Seleccione un producto</option>
                            @foreach($posts as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre}} ({{ $producto->cantidad_stock}})</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div>
                    <label class="block mb-2 font-semibold">Proveedor</label>
                    <div class="relative inline-block  mb-5">
                        <select name ="prov_id" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            <option value="">Seleccione un proveedor</option>
                            @foreach($proveedores as $proveedor)
                            @if($proveedor->estado == 'activo')
                                <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_proveedor}}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                </div>
                
            </div>
            <div class="ml-[16rem]">
                <label class="block mt-9 mb-2 font-semibold">Cantidad del producto</label>
                <input type="number" name="cantidad" class="w-[31.6rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
            </div>

            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-blue px-6 py-2 rounded-lg font-Poppins" value="Agregar entrada">
            </div>
        </form>
    </div>
</div>
@endsection
