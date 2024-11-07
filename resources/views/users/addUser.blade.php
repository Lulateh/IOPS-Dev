@extends('layouts.plantilla')

@section('title')
    LogiStock - Agregar usuario
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
    <section class="bg-main-green py-2 h-screen">
        <div class="block">
            <img class="mx-auto w-32" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>

        <div class="grid justify-center">
            <form method="POST" action="{{ route('users.add') }}" class="bg-white/[.17] px-16 py-8 mt-4 font-Coda rounded-xl">
                @csrf
                <h2 class="text-center text-3xl">Registrar Usuario</h2>

                <div>
                    <label for="name" class=" flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" mr-2" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>Nombre Completo</label>
                    <input class="rounded-lg my-2" type="text" id="nombre" name="nombre" size="50" required><br>
                    @if ($errors->has('nombre'))
                        <span class="text-red-500">{{ $errors->first('nombre') }}</span>
                    @endif
                </div>

                <div>
                    <label for="email" class=" flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                </svg>Correo Electrónico</label>
                    <input class="rounded-lg my-2" type="email" id="email" name="email" size="50" required><br>
                    @if ($errors->has('email'))
                        <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div>
                    <label for="password" class=" flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg>Contraseña</label>
                    <input class="rounded-lg my-2" type="password" id="password" name="password" size="50" required><br>
                    @if ($errors->has('password'))
                        <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div>
                    <label for="role">Rol del Usuario</label><br>
                    <select class="rounded-lg my-2" id="rol" name="rol" required>
                        <option value="administrador">Administrador</option>
                        <option value="colaborador">Colaborador</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                    
                </div>

                <div class=" mt-4 grid">
                    <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="submit" value="Registrar">
                </div>
            </form>
        </div>

        <div class="flex">
            <a class="mx-auto mt-4" href="{{ route('users.index') }}">
                <button class="font-Coda text-white bg-secondary-green px-8 py-1 rounded-lg">
                    Volver
                </button>
            </a>
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