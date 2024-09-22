@extends('layouts.plantilla')

@section('title')
    Productos
@endsection

@section('content')

<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>

        <div class="relative float-right mr-20 mt-3">
        <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
            </a>
        </div>
    </div> 
</header>

<div >
    <a class="ml-20 mt-4 flex" href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" class="mt-1 w-6 fill-main-green"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg>
        <p class="font-Coda text-main-green text-2xl">Regresar</p>
    </a>
</div>

<section class = "columns-2 mt-4 ml-20 flex ">

    <div class="basis-1/3">
        <img class="content-center" src = "../../img/{{$existingProduct['imagen_url']}}" alt = "{{$existingProduct['imagen_url']}}">
    </div>

    <div class="content-center ">
        
        <h1 class="text-3xl font-bold">{{$existingProduct['nombre']}}</h1>
        <p class="text-xl mt-2"> Marca: {{$existingProduct['marca']}}</p>
        <p class="text-xl mt-2"> Descripción: {{$existingProduct['descripcion']}}</p>
        <p class="text-xl mt-2"> Precio: {{$existingProduct['precio']}}</p>
        <p class="text-xl mt-2"> Existencias: {{$existingProduct['cantidad_stock']}}</p>

        <div class="mt-4 flex">
            <a href="{{ route('product.redirect.edit', $existingProduct['id'])}}" class="text-white bg-main-green hover:bg-secondary-green px-6 py-2 rounded-lg font-Coda">Editar</a>
    
            <div class="mt-[0.43rem] ml-5">
                <label for="deleteProductModal" class=" hover:bg-red-500 text-white bg-main-green px-6 py-2 rounded-lg font-Coda">
                    Eliminar
                </label>
            </div>
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

   
</section>

@endSection