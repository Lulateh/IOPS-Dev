@extends('layouts.plantilla')

@section('title')
    Productos
@endsection

@section('content')
@include('components.header')

<div class="mt-8">
    <a href="{{ route('home') }}" class="ml-20 text-black font-Coda hover:underline text-3xl md:text-2xl">  
    ← Volver
   </a>
 </div>

<section class ="columns-1 md:columns-2 mt-4 ml-24   md:ml-[25rem] flex">
    <div class="flex bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg gap-8 justify-center">
        <div class="basis-1/3 ">
            <img class="content-center rounded-lg w-full h-auto" src = "../../img/{{$existingProduct['imagen_url']}}" alt = "{{$existingProduct['imagen_url']}}">
        </div>

        <div class="content-center">
            
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold uppercase">{{$existingProduct['nombre']}}</h1>
            <p class="text-sm sm:text-xl mt-2"> Codigo: {{$existingProduct['id']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Marca: {{$existingProduct['marca']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Descripción: {{$existingProduct['descripcion']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Ubicación: {{$existingProduct['ubicacion_bodega']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Precio de compra: ₡{{$existingProduct['precio_compra']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Precio de venta: ₡{{$existingProduct['precio_venta']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Fecha de caducidad: {{$existingProduct['fecha_vencimiento']}}</p>
            <p class="text-sm sm:text-xl mt-2"> Existencias: {{$existingProduct['cantidad_stock']}}</p>

            <div class="mt-4 flex">
                <a href="{{ route('product.redirect.edit', $existingProduct['id'])}}" class="text-white bg-main-blue hover:bg-secondary-green px-6 py-2 rounded-lg font-Coda w-full sm:w-auto sm:ml-4">Editar</a>
        
                {{-- <div class="mt-[0.43rem] ml-5">
                    <label for="deleteProductModal" class=" hover:bg-red-500 text-white bg-main-green px-6 py-2 rounded-lg font-Coda">
                        Eliminar
                    </label>
                </div> --}}
                <input type="checkbox" id="deleteProductModal" class="peer fixed appearance-none opacity-0">
                <label for="deleteProductModal" class="pointer-events-none invisible fixed inset-0 flex cursor-pointer items-center justify-center overflow-hidden overscroll-contain bg-slate-700/30 opacity-0 transition-all duration-200 ease-in-out peer-checked:pointer-events-auto peer-checked:visible peer-checked:opacity-100 peer-checked:[&>*]:translate-y-0 peer-checked:[&>*]:scale-100">
                    <label class="max-h-[calc(100vh - 5em)] h-fit max-w-screen-lg scale-90 overflow-y-auto overscroll-contain rounded-md bg-white p-6 text-black shadow-2xl transition" for="deleteProductModal">
                        <div>
                            <div class="text-center">
                                <h4 class="text-xl font-bold">Estas por eliminar un producto de forma permanente</h4><br>
                                <p class="text-lg">¿Deseas continuar?</p>
                            </div>
                        </div>
                        <div class="flex justify-center mt-4">
                            <a href="{{ route('product.delete', $existingProduct['id'])}}" class="text-black bg-red-700 px-6 py-2 rounded-lg font-Coda margin-auto">Eliminar</a>
                        </div>
                    </label>
                </label>
            </div>
        </div>
    </div>
   
</section>

@endSection