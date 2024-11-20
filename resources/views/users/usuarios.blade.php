@extends('layouts.plantilla')

@section('title')
    Usuarios
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
@include('components.headerTables')




<section class="md:ml-[18rem] md:mr-[1rem]">


    <div>
        <div class="flex flex-col md:flex-row justify-between items-center mt-12 mb-10 mx-4 md:mx-20">
            <div class="mb-4 md:mb-0">
                <h1 class="text-main-blue font-Coda text-4xl">  
                    Usuarios: {{$empresa->nombre}}
                </h1>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-4">
                    <form action="{{ route('users.index') }}" method="GET">
                        <select name="estado" class="px-4 py-1 border rounded-lg">
                            <option value="">Estado</option>
                            <option value="activo" {{ request('estado') === 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ request('estado') === 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        <button type="submit" class=" ml-2 text-white bg-main-blue cursor-pointer px-4 py-1 rounded-xl font-Poppins shadow-lg hover:bg-blue-900 " >Filtrar</button>
                    </form>
            
            <div class="mx-6">
                <a href="{{route('users.add')}}"  class="text-white bg-main-blue cursor-pointer px-4 py-1 rounded-xl font-Poppins shadow-lg hover:bg-blue-900">Agregar Usuario</a> 
            </div>
        </div>
        </div>

        <div class="grid">
        <div class="overflow-x-auto mx-4 md:mx-10">
            <table class="w-[65rem] shadow-lg">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b bg-main-blue text-white rounded-tl-lg ">Nombre</th>
                        <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white">Correo</th>
                        <th class="py-2 px-4 border-b bg-main-blue text-white">Rol</th>
                        <th class="py-2 px-4 border-b bg-main-blue bg-opacity-90 text-white">Estado</th>
                        <th class="py-2 px-4 border-b bg-main-blue text-white rounded-tr-lg">Acciones</th>
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
                            <a href="{{route('edit.users',['id' => $usuario->id])}}" class="text-white hover:bg-green bg-main-blue rounded-lg px-3 py-2 hover:bg-blue-900">Editar</a>
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
        <a href="{{ route('home') }}" class="mt-6 inline-block px-4 py-2 bg-main-blue text-white rounded hover:bg-green-600">Regresar al Inicio</a>
    </div>
</body>
@endif
@endsection