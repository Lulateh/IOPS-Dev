@extends('layouts.plantilla')

@section('title')
    LogiStock - Reporte mensual
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

<div class="min-h-screen bg-gray-100">
    <div class="flex justify-between p-4">
        <h1 class="text-[3.5rem] text-[#26413C] font-bold">Reportes</h1>
        <div class="space-x-2 pt-6">
            <a href="{{ route('reporte.diario') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte diario</a>
            <a href="{{ route('reporte.semanal') }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded">Reporte semanal</a>
            <a href="{{ route('reporte.mensual') }}" class="px-4 py-2 bg-[#26413C] text-white rounded">Reporte mensual</a>
        </div>
    </div>
    <section class="flex columns-2 gap-[55rem]">
    <button class="px-4 h-[2.5rem] pb-[1rem] pt-[0.5rem]  bg-[#26413C] ml-[16rem] text-white rounded">
        Refrescar tabla
    </button>
    <h2 class="text-xl pt-8 bg-gray-100 "><?php echo date('d-m-Y'); ?></h2>
    </section>
    <section class="flex columns-2">
        <div class="basis-1/6">
            <div class="basis-1/6 bg-card-bg h-screen pt-6">
                <div class="flex flex-col font-Coda justify-center text-center">
                    <ul>
                    <h2 class="text-3xl font-bold ">Menu</h2>
                        <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                        <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                        <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl  text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                        <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                        <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl bg-main-green text-gray-100">Reportes</a></li>
                    </ul>
        
                    <ul>
                        <h2 class="text-3xl font-bold ">Personas</h2>
                        <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Proveedores</a></li>
                        <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
                        <li><a href="#" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
                    </ul>
                </div>
              </div>
        </div>
    <div class="container mt-8 rounded max-w-[75%] h-[26rem] overflow-y-scroll mr-[3.8rem]">
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
                    <th class="py-2 px-4 border-b bg-[#64746B] text-white">Ganancias</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td class="py-2 px-4 text-center border-b">Cigarros Pall Moll Alaska</td>
                    <td class="py-2 px-4 text-center border-b">Pall Moll</td>
                    <td class="py-2 px-4 text-center border-b">Cigarros</td>
                    <td class="py-2 px-4 text-center border-b">₡2115.00</td>
                    <td class="py-2 px-4 text-center border-b">En stock</td>
                    <td class="py-2 px-4 text-center border-b">75</td>
                    <td class="py-2 px-4 text-center border-b">20</td>
                    <td class="py-2 px-4 text-center border-b">10000</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 text-center border-b">Cigarros Pall Moll Alaska</td>
                    <td class="py-2 px-4 text-center border-b">Pall Moll</td>
                    <td class="py-2 px-4 text-center border-b">Cigarros</td>
                    <td class="py-2 px-4 text-center border-b">₡2115.00</td>
                    <td class="py-2 px-4 text-center border-b">En stock</td>
                    <td class="py-2 px-4 text-center border-b">75</td>
                    <td class="py-2 px-4 text-center border-b">20</td>
                    <td class="py-2 px-4 text-center border-b">10000</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 text-center border-b">Cigarros Pall Moll Alaska</td>
                    <td class="py-2 px-4 text-center border-b">Pall Moll</td>
                    <td class="py-2 px-4 text-center border-b">Cigarros</td>
                    <td class="py-2 px-4 text-center border-b">₡2115.00</td>
                    <td class="py-2 px-4 text-center border-b">En stock</td>
                    <td class="py-2 px-4 text-center border-b">75</td>
                    <td class="py-2 px-4 text-center border-b">20</td>
                    <td class="py-2 px-4 text-center border-b">10000</td>
                </tr>
                <tr>
                    <td class="py-2 px-4 text-center border-b">Cigarros Pall Moll Alaska</td>
                    <td class="py-2 px-4 text-center border-b">Pall Moll</td>
                    <td class="py-2 px-4 text-center border-b">Cigarros</td>
                    <td class="py-2 px-4 text-center border-b">₡2115.00</td>
                    <td class="py-2 px-4 text-center border-b">En stock</td>
                    <td class="py-2 px-4 text-center border-b">75</td>
                    <td class="py-2 px-4 text-center border-b">20</td>
                    <td class="py-2 px-4 text-center border-b">10000</td>
                </tr>
            </tbody>
        </table>
        
    </div>
    </section>
@endsection