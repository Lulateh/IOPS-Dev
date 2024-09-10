@extends('layouts.plantilla')

@section('title')
    LogiStock - Reporte mensual
@endsection 

@section('content')
<header class="bg-main-green py-4">
    <div class="columns-2">
        <div>
            <img class="w-16 ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </div>

        <div class="relative float-right mr-20 ">
            <img class="w-12" src="{{ asset ('icons/profileIcon.svg')}}" alt="">
        </div>
    </div> 
</header>

<div class="min-h-screen bg-gray-100">
    <div class="flex justify-between p-4">
        <h1 class="text-[3.5rem] text-[#26413C] font-bold">Reportes</h1>
        <div class="space-x-2 pt-6">
            <a href="{{ route('reporte.diario') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte diario</a>
            <a href="{{ route('reporte.semanal') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte semanal</a>
            <a href="{{ route('reporte.mensual') }}" class="px-4 py-2 bg-[#26413C] text-white rounded">Reporte mensual</a>
        </div>
    </div>
    <button class="px-4 py-2 bg-[#26413C] ml-[20rem] text-white rounded">
        Refrescar tabla
    </button>
    <div class="container mt-8 rounded max-w-[75%] float-right mr-[3.8rem]">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b bg-[#26413C] text-white">Nombre del producto</th>
                    <th class="py-2 px-4 border-b bg-[#64746B] text-white">Marca del producto</th>
                    <th class="py-2 px-4 border-b bg-[#26413C] text-white">Descripción del producto</th>
                    <th class="py-2 px-4 border-b bg-[#64746B] text-white">Precio del producto</th>
                    <th class="py-2 px-4 border-b bg-[#26413C] text-white">Condición de stock</th>
                    <th class="py-2 px-4 border-b bg-[#64746B] text-white">Cantidad de productos vendidos</th>
                    <th class="py-2 px-4 border-b bg-[#26413C] text-white">Cantidad de productos ingresados</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td class="py-2 px-4 border-b">Cigarros Malboro Blosson</td>
                    <td class="py-2 px-4 border-b">Malboro</td>
                    <td class="py-2 px-4 border-b">Cigarros</td>
                    <td class="py-2 px-4 border-b">₡2100.00</td>
                    <td class="py-2 px-4 border-b">En stock</td>
                    <td class="py-2 px-4 border-b">50</td>
                    <td class="py-2 px-4 border-b">100</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-8 float-right">
            <h2 class="text-xl"><?php echo date('d-m-Y'); ?></h2>
        </div>
    </div>
@endsection