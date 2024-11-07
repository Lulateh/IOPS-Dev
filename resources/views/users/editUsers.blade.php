@extends('layouts.plantilla') 

@section('title')
LogiStock - Editar usuario
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
@include('components.header')
    
    
<div class="mt-8">
    <a href="{{route('users.index')}}" class="ml-20 text-main-green font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>
   
   <div class= "mt-10 flex justify-center">
    <div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg">
        <form method="POST" action={{ route('update.users', $existingUser->id) }}>
            @csrf

            <h2 class="text-4xl font-Poppins font-medium text-center mt-4 mb-8">Editar usuario</h2>

            <div class="grid grid-cols-2 gap-8 font-Poppins">
                <div>

                    <label class="block mb-2 font-semibold">Nombre del usuario</label>
                    <input type="text" name="username" class="w-[31.6rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255); text-align: center;" value="{{ ucfirst($existingUser->nombre) }}" required>

                </div>

                <div>

                    <label class="block mb-2 font-semibold">Correo del usuario</label>
                    <input type="email" name="email" class="w-[31.6rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255); text-align: center;" value="{{ $existingUser->email }}" required>

                </div>
                
            </div>

            <div class="grid grid-cols-2 gap-8 font-Poppins">

                <div class="">
                    <label class="block mt-9 mb-2 font-semibold">Estado del usuario</label>
                    <div class="relative inline-block  mb-5">
                        <select name ="status" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            @foreach($status as $key => $status)
                              <option value="{{ $key }}"{{$existingUser->estado == $key ? 'selected' : ''}}>
                                {{$status}}
                              </option>
                            @endforeach
                          </select>
                      </div>
                </div>

                <div class="">
                    <label class="block mt-9 mb-2 font-semibold">Rol del usuario</label>
                    <div class="relative inline-block mb-5">
                        <select name="rol" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            @foreach($roles as $key => $rol)
                                <option value="{{ $key }}" {{ $existingUser->rol == $key ? 'selected' : '' }}>
                                    {{ $rol }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>                               

            </div>

            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-blue px-6 py-2 rounded-lg font-Poppins" value="Modificar usuario">
            </div>
        </form>
    </div>
</div>
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
@endsection
