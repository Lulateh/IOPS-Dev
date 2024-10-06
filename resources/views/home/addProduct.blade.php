@extends('layouts.plantilla')

@section('title')
    Agregar
@endsection

@section('content')

<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>

        <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        </div>
    </div> 
</header>

<div>
    <a class="ml-20 mt-4 flex" href="{{ route('home') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" class="mt-1 w-6 fill-main-green"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg>
        <p class="font-Coda text-main-green text-2xl">Regresar</p>
    </a>
</div>

<div class="mt-6 flex justify-center">
    <div class="bg-[#d7d7d7] px-5 py-3 rounded-lg">
        <form action="{{ route('product.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="font-Coda text-3xl font-bold text-center">Agregar producto</h2>
    
            <div class="columns-2 gap-x-16 flex">
                <div >
                    <label for="productName" class="font-Coda">Nombre del producto </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="text" id="productName" name="productName" required><br>
                    <label for="brand" class="font-Coda">Marca </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="text" id="brand" name="brand" required><br>
                    <label for="price_income" class="font-Coda">Precio de Compra </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="text" id="price" name="price_income" required><br>
                    <label for="price_sale" class="font-Coda"> Precio de Venta </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="text" id="price" name="price_sale" required><br>
                    <label for="location" class="font-Coda"> Ubicación </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="text" id="location" name="location" required><br>
                </div>
                <div >
                    <label for="details" class="font-Coda text-wrap">Descripción </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-60 h-16" type="text" id="details" name="details" required><br>
                    <label for="provider" class="font-Coda">Proveedor </label><br>
                    <select name="provider" class="rounded-lg my-2 bg-card-bg w-96">
                        @foreach ($proveedor as $proveedor)
                            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_proveedor }}</option>                            
                        @endforeach
                    </select><br>
                    <label for ="expiration" class="font-Coda">Fecha de Vencimiento </label><br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="date" id="expiration" name="expiration" required><br>
                    <label for="img" class="font-Coda">Imagen </label> <br>
                    <input  type="file" id="img" name="img" required accept="image/*, .jpg, .jpeg, .png"><br>
                </div>
            </div>
            <div class="flex mt-4 gap-5 justify-center">
                <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="submit" value="Agregar producto">
            </div>
        </form>
    </div>

</div>

@endsection