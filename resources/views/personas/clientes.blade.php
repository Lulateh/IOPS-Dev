@extends('layouts.plantilla')

@section('title')
    Lista de Clientes
@endsection

@section('content')
@include('components.headerTables')

<section class="md:ml-[18rem] md:mr-[1rem]">

    <div>
        <div class="flex flex-col md:flex-row justify-between items-center mt-12 mb-10 mx-4 md:mx-20">
            <div class="mb-4 md:mb-0">
                <h1 class="text-main-blue font-Coda text-3xl md:text-4xl">  
                    Clientes
                </h1>
        </div>

            <div class="flex flex-col lg:flex-row items-center gap-4">
            <div class="md:ml-8 ">
                    <form action="{{ route('clientes.index') }}" method="GET">
                        <select name="estado" class="px-4 md:px-0  py-1 border rounded-lg">
                            <option value="">Estado</option>
                            <option value="activo" {{ request('estado') === 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ request('estado') === 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        <button type="submit" class=" ml-2 md:mt-2 text-white bg-main-blue cursor-pointer px-4 md:px-2 py-1 rounded-xl font-Poppins shadow-lg hover:bg-blue-900" >Filtrar</button>
                    </form>
                </div>

            <div class="mx-6 lg:grid md:grid md:text-center">
            <a href="{{ route('clientes.create') }}" class="text-white bg-main-blue cursor-pointer px-4 py-1 rounded-xl font-Poppins shadow-lg hover:bg-blue-900">Agregar Cliente</a> 
            </div>
        </div>
        </div>

        <div class="grid">
        <div class="overflow-x-auto mx-4 md:mx-10">
            <table class="w-[65rem] shadow-lg ">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b bg-main-blue text-white rounded-tl-lg ">Nombre</th>
                        <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white">Correo</th>
                        <th class="py-2 px-4 border-b bg-main-blue text-white">Teléfono</th>
                        <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white">Dirección</th>
                        <th class="py-2 px-4 border-b bg-main-blue text-white ">Estado</th>
                        <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white rounded-tr-lg">Acciones</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($clientes as $cliente)
                    <tr>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->nombre_cliente }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->email }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->telefono }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->direccion ?? 'N/A' }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">
                        @if($cliente->estado === 'activo')
                            <span class="text-green-600">Activo</span>
                        @else
                            <span class="text-red-600">Inactivo</span>
                        @endif
                    </td>
                        <td class="py-2 px-4 bg-card-bg border t-black text-center">
                            <a href="{{ route('clientes.edit', $cliente->id) }}" class="text-white hover:bg-blue-900 bg-main-blue rounded-lg px-3 py-2">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");

        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
        });
    });
</script>

@endsection
