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
    <div class="bg-lilac bg-opacity-20  md:w-3/4 lg:w-3/4  max-sm:w-[24rem] p-10 rounded-lg shadow-lg">
        <h1 class="font-Poppins font-medium text-center text-3xl mb-10 text-main-blue">Editar Entrada</h1>
        <form action="{{ route('update.incoming', ['id' => $incoming->id]) }}" method="POST">
            @csrf
            <div class="grid lg:grid-cols-2 md:grid-cols-2  gap-8 font-Poppins">
                <div>
                    <label class="block mb-2 font-semibold">Código del producto</label>
                    <div class="relative inline-block mb-5">
                        <select name ="prod_id" class="md:w-[16rem] max-sm:w-[16rem] block appearance-none lg:w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
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
                        <select name ="prov_id" class="md:w-[16rem] max-sm:w-[16rem] block appearance-none lg:w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);"">
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
            <div class="lg:ml-[16rem] md:items-center">
                <label class="block mt-9 mb-2 font-semibold">Cantidad del producto</label>
                <input type="number" name="cantidad" class="lg:w-[31.6rem] md:w-[31.6rem] max-sm:w-[16rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
            @error('cantidad')
                <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
             </div>

            <div class="flex justify-center mt-8">
            <button class="text-white bg-main-blue group hover:bg-blue-900  px-6 py-2 rounded-lg font-Poppins flex items-center relative">
    
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" absolute w-6 h-6 text-white group-hover:opacity-0 transition-opacity duration-300" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-6 h-6 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                </svg>
                <span class="ml-8 font-Poppins text-white">Modificar Entrada</span>
            </button></div>
        </form>
    </div>
</div>
@endsection
