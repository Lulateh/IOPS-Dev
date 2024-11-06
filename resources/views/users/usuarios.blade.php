@extends('layouts.plantilla')

@section('title')
    Lista de Clientes
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
@include('components.header')




<section class="flex columns-2">

    <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reportes</a></li>
            </ul>

            <ul>
                <h2 class="text-3xl font-bold my-3">Personas</h2>
                <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Proveedores</a></li>
                <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
                @if(Auth::user()->rol == 'administrador')
                <li><a href="{{route('users.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
                @endif            </ul>
        </div>
    </div>

    <div>
        <div class="flex col-2 mt-10 ml-20">
            <div class="ml-1">
                <h2 class="text-main-green font-Coda text-4xl">  
                    Usuarios: {{$empresa->nombre}}
                </h2>
            </div>
            
            <div class="ml-[30rem]">
                <a href="{{route('users.add')}}"  class="text-white bg-main-green cursor-pointer px-4 py-1 rounded-xl font-Poppins">Agregar Usuario</a> 
            </div>
        </div>

        <div class="basis-5/6 flex items-center justify-center mr-5 mt-16 ml-6">
            <table class="w-[75rem] ">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tl-lg ">Nombre</th>
                        <th class="py-2 px-4 border-b bg-[#64746B] text-white">Correo</th>
                        <th class="py-2 px-4 border-b bg-[#26413C] text-white">Rol</th>
                        <th class="py-2 px-4 border-b bg-[#64746B] text-white">Estado</th>
                        <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tr-lg">Acciones</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $usuario->nombre }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $usuario->email }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $usuario->rol }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $usuario->estado}}</td>
                        <td class="py-2 px-4 bg-card-bg border t-black text-center">
                            <a href="{{route('edit.users',['id' => $usuario->id])}}" class="text-white hover:bg-blue-700 bg-blue-500 rounded-lg px-3 py-2">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@else
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center p-5 bg-white rounded shadow-md">
        <h1 class="text-2xl font-bold text-red-600">Acceso Denegado</h1>
        <p class="mt-4 text-gray-700">No tienes permiso para acceder a esta sección.</p>
        <a href="{{ route('home') }}" class="mt-6 inline-block px-4 py-2 bg-main-green text-white rounded hover:bg-green-600">Regresar al Inicio</a>
    </div>
</body>
@endif








<script>
        const dropdownButton = document.getElementById('profile-dropdown-button');
        const dropdownMenu = document.getElementById('profile-dropdown-menu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
</script>
@endsection