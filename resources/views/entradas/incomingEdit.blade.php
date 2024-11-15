@extends('layouts.plantilla') 

@section('title')
    Edit incoming
@endsection

@section('content')
@include('components.header')
    
    
<div class="mt-8">
    <a href="{{ route('incomings.show', ['id' => $incoming->id]) }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>
   
   <div class= "mt-10 flex justify-center">
    <div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg">
        <h1 class="font-Poppins font-medium text-center text-3xl mb-10 text-main-blue">Editar Entrada</h1>
        <form action="{{ route('update.incoming', ['id' => $incoming->id]) }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-8 font-Poppins">
                <div>
                    <label class="block mb-2 font-semibold">Código del producto</label>
                    <div class="relative inline-block mb-5">
                        <select name ="prod_id" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            @foreach($posts as $producto)
                            <option value="{{ $producto->id }}" {{ $incoming->producto_id == $producto->id ? 'selected' : '' }}>{{ $producto->nombre }}</option>
                            @endforeach
                          </select>
                          @error('prod_id')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                          @enderror
                      </div>

                </div>

                <div>
                    <label class="block mb-2 font-semibold">Proveedor</label>
                    <div class="relative inline-block  mb-5">
                        <select name ="prov_id" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            @foreach($proveedores as $proveedor)
                              <option value="{{ $proveedor->id }}" {{ $incoming->proveedor_id == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre_proveedor}}</option>
                            @endforeach
                          </select>
                    @error('prov_id')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                      </div>

                </div>
                
            </div>
            <div class="ml-[16rem]">
                <label class="block mt-9 mb-2 font-semibold">Cantidad del producto</label>
                <input type="number" name="cantidad" class="w-[31.6rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
            @error('cantidad')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
             </div>

            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-blue px-6 py-2 rounded-lg font-Poppins" value="Modificar entrada">
            </div>
        </form>
    </div>
</div>
@endsection
