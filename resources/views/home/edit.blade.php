@extends('layouts.plantilla')

@section('title')
    Editar
@endsection

@section('content')
@include('components.header')

<div class="mt-8">
    <a href="{{ route('product.show', $existingProduct->id) }}" class="ml-20 text-black font-Coda hover:underline text-3xl md:text-2xl">  
    ← Volver
   </a>
 </div>

<div class="mt-6 flex justify-center">
    <div class="bg-lilac bg-opacity-20 px-5 py-3 rounded-lg w-full sm:w-11/12 md:w-9/12 lg:w-8/12">
        <form action="{{ route('product.edit', $existingProduct->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="font-Coda text-xl md:text-3xl font-bold text-center my-5">Editar producto</h2>
    
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-16 gap-y-6">
                <div >
                    <label for="productName" class="font-Coda">Nombre del producto </label> <br>
                    <input class="rounded-lg my-2 bg-white w-full" type="text" id="productName" name="productName" value="{{ old('productName', $existingProduct['nombre']) }}" required><br>
                    @error('productName')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                    <label for="brand" class="font-Coda">Marca </label> <br>
                    <input class="rounded-lg my-2 bg-white w-full" type="text" id="brand" name="brand" value="{{ old('brand', $existingProduct['marca']) }}" required><br>
                    @error('brand')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                    <label for="price_income" class="font-Coda">Precio de Compra </label> <br>
                    <input class="rounded-lg my-2 bg-white w-full" type="text" id="price_income" name="price_income" value="{{ old('price_income', $existingProduct['precio_compra']) }}" required><br>
                    @error('price_income')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                    <label for="price_sale" class="font-Coda"> Precio de Venta </label> <br>
                    <input class="rounded-lg my-2 bg-white w-full" type="text" id="price_sale" name="price_sale" value="{{ old('price_sale', $existingProduct['precio_venta']) }}" required><br>
                    @error('price_sale')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                    <label for="location" class="font-Coda"> Ubicación </label> <br>
                    <input class="rounded-lg my-2 bg-white w-full" type="text" id="location" name="location" value="{{ old('location', $existingProduct['ubicacion_bodega']) }}"><br>
                    @error('location')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div >
                    <label for="details" class="font-Coda text-wrap">Descripción </label> <br>
                    <input class="rounded-lg my-2 bg-white w-full h-16" type="text" id="details" name="details" value="{{ old('details', $existingProduct['descripcion']) }}" required><br>
                    @error('details')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                    <label for ="expiration" class="font-Coda">Fecha de Vencimiento </label><br>
                    <input class="rounded-lg my-2 bg-white w-full" type="date" id="expiration" name="expiration" value="{{ old('expiration', $existingProduct['fecha_vencimiento']) }}"><br>
                    @error('expiration')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                    <label for="img" class="font-Coda">Imagen </label> <br>
                    <input type="file" id="img" name="img" accept="image/*, .jpg, .jpeg, .png" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:bg-main-blue file:text-white"><br>
                    @error('img')
                        <div class="text-red-600 mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="flex mt-4 gap-5 justify-center">
                <input class="text-white bg-main-blue mb-5 mt-3 px-8 py-1 rounded-lg w-full sm:w-auto" type="submit" value="Editar producto">
            </div>
        </form>
    </div>

</div>

@endsection