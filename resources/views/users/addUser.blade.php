@extends('layouts.plantilla')

@section('title')
    LogiStock - Agregar usuario
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
    <section class="bg-main-blue py-2 h-screen">
        <div class="mt-8">
            <a href="{{route('users.index')}}" class="ml-20 text-white font-Coda hover:underline text-2xl">  
                 ← Volver
            </a>
        </div>

        <div class="block">
            <img class="mx-auto w-40"  src="{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>

        <div class="grid justify-center mt-5">
            <form method="POST" action="{{ route('users.add') }}" class="bg-white/[.17] px-16 py-8 mt-4 font-Coda rounded-xl">
                @csrf
                <h2 class="text-center text-3xl my-5">Registrar Usuario</h2>

                <div>
                    <label for="name">Nombre Completo</label><br>
                    <input class="rounded-lg my-2" type="text" id="nombre" name="nombre" size="50" required><br>
                    @if ($errors->has('nombre'))
                        <span class="text-red-500">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

                <div>
                    <label for="email">Correo Electrónico</label><br>
                    <input class="rounded-lg my-2" type="email" id="email" name="email" size="50" required><br>
                    @if ($errors->has('email'))
                        <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div>
                    <label for="password">Contraseña</label><br>
                    <input class="rounded-lg my-2" type="password" id="password" name="password" size="50" required><br>
                    @if ($errors->has('password'))
                        <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div>
                    <label for="role">Rol del Usuario</label><br>
                    <select class="rounded-lg my-2 w-[25.9rem]" style="text-align: center" id="rol" name="rol" required>
                        <option value="administrador">Administrador</option>
                        <option value="colaborador">Colaborador</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                    
                </div>

                <div class=" mt-4 ml-[9rem]">
                    <input class="text-white bg-main-blue px-8 py-1 rounded-lg" type="submit" value="Registrar">
                </div>
            </form>
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
@endsection