@extends('layouts.plantilla')

@section('title')
    Agregar
@endsection

@section('content')
@include('components.header')

<div class="mt-8">
    <a href="{{ route('home') }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
    ← Volver
   </a>
 </div>

<div class="mt-6 flex justify-center">
    <div class="bg-lilac bg-opacity-20 px-5 py-3 rounded-lg">
        <form action="{{ route('product.post') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="font-Coda text-3xl font-bold text-center my-5">Agregar producto</h2>
    
            <div class="columns-2 gap-x-16 flex text-black font-medium">
                <div >
                    <label for="productName" class="font-Coda">Nombre del producto </label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="text" id="productName" name="productName" required><br>
                    <label for="brand" class="font-Coda">Marca </label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="text" id="brand" name="brand" required><br>
                    <label for="price_income" class="font-Coda">Precio de Compra </label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="text" id="price" name="price_income" required><br>
                    <label for="price_sale" class="font-Coda"> Precio de Venta </label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="text" id="price" name="price_sale" required><br>
                    @if ($errors->has('price_sale'))
                        <div class="text-red-600 mt-1">{{ $errors->first('price_sale') }}</div>
                    @endif
                    <label for="location" class="font-Coda"> Ubicación </label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="text" id="location" name="location"><br>
                </div>
                <div >
                    <label for="details" class="font-Coda text-wrap">Descripción </label> <br>
                    <input class="rounded-lg my-2 bg-white w-60 h-16" type="text" id="details" name="details" required><br>
                    <label for ="expiration" class="font-Coda">Fecha de Vencimiento </label><br>
                    <input class="rounded-lg my-2 bg-white w-96" type="date" id="expiration" name="expiration"><br>
                    <label for="img" class="font-Coda">Imagen </label> <br>
                    <input  type="file" id="img" name="img" required accept="image/*, .jpg, .jpeg, .png"><br>
                </div>
            </div>
            <div class="flex mt-4 gap-5 justify-center mb-5">
                <input class="text-white bg-main-blue px-8 py-1 rounded-lg" type="submit" value="Agregar producto">
            </div>
        </form>
    </div>

</div>

@endsection