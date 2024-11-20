@extends('layouts.plantilla') 

@section('title')
LogiStock - Editar usuario
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
@include('components.header')
    
    
<div class="mt-8">
    <a href="{{route('users.index')}}" class="ml-5 lg:ml-20 text-main-green font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>
   
   <div class= "lg:mt-8 flex justify-center">
    <div class="bg-lilac mt-4 lg:mt-0 bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg">
        <form method="POST" action={{ route('update.users', $existingUser->id) }}>
            @csrf

            <h2 class="text-4xl font-Poppins font-medium text-center mt-4 mb-8">Editar usuario</h2>

            <div class="grid-cols-1 grid lg:grid-cols-2 gap-8 font-Poppins">
                <div>

                    <label class="block mb-2 font-semibold">Nombre del usuario</label>
                    <input type="text" name="username" class="lg:w-[28rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255); text-align: center;" value="{{ ucfirst($existingUser->nombre) }}" required>

                </div>

                <div>

                    <label class="block mb-2 font-semibold">Correo del usuario</label>
                    <input type="email" name="email" class="lg:w-[28rem] p-2 mb-4 rounded-lg text-black" style="background-color: rgb(255, 255, 255); text-align: center;" value="{{ $existingUser->email }}" required>

                </div>
                
            
                  <div class="">
                    <label class="block lg:mt-9 mb-2 font-semibold">Estado del usuario</label>
                    <div class="relative inline-block  mb-5">
                        <select name ="status" class="block appearance-none lg:w-[28rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                            @foreach($status as $key => $status)
                              <option value="{{ $key }}"{{$existingUser->estado == $key ? 'selected' : ''}}>
                                {{$status}}
                              </option>
                            @endforeach
                          </select>
                      </div>
                </div>

                <div class="">
                    <label class="block lg:mt-9 mb-2 font-semibold">Rol del usuario</label>
                    <div class="relative inline-block mb-5">
                        <select name="rol" class="block appearance-none lg:w-[28rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
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
            <button class="text-white bg-main-blue group hover:bg-blue-900  px-6 py-2 rounded-lg font-Poppins flex items-center relative">
    
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" absolute w-6 h-6 text-white group-hover:opacity-0 transition-opacity duration-300" viewBox="0 0 16 16">
                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-6 h-6 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                            <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
                        </svg>
                        <span class="ml-8 font-Poppins text-white">Editar Usuario</span>
                </button>
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
