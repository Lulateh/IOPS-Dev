@extends('layouts.plantilla')

@section('title')
    Iops
@endsection

@section('content')
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}">
                <img class="w-[6rem] ml-20" src="{{ asset('img/LogiStockIconWhite.png') }}" alt="Logotipo">
            </a>
        </div>
    </div> 
</header>

<body class="bg-teal-100">

    <div class="mt-5 mb-5">
        <a href="{{ route('home') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
            ← Volver
        </a>
    </div>


   <div class="bg-teal-100 flex flex-col md:flex-row justify-center py-10 mx-4">

    <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg flex flex-col items-center w-full md:w-[20%] mr-10 mb-4">

        <div class="mb-6">
            <img src="{{ Auth::user()->imagen_url ? asset('profile_images/' . Auth::user()->imagen_url) : 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y' }}" 
                 alt="Imagen de usuario" 
                 class="w-40 h-40 rounded-full border-2 border-gray-200">
        </div>

        <div class="text-center">
            <h2 class="text-2xl font-bold mb-2">{{ Auth::user()->nombre }}</h2>
            <p class="text-xl text-gray-600 font-Coda mb-2">{{ Auth::user()->id }}</p>
            <p class="text-2xl font-coda mb-16">{{ Auth::user()->rol }}</p> 
            <p class="text-xl font-Coda mb-16">{{ Auth::user()->email }}</p>
        </div>

        <div class="mt-6 mb-6 space-y-4 w-full">
            <a href="{{ route('editUser') }}" class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg mb-4 hover:bg-gray-600 w-full text-center block">Editar perfil</a>
            <a href="{{ route('logout') }}" 
               class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg mb-4 hover:bg-gray-600 w-full text-center block" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>

    <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg flex flex-col w-full md:w-[75%] mb-4">


    <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-4">
    <!-- Columna Grande (izquierda) -->
    <div class=" p-6 col-span-1 mb-4 md:mb-0 flex flex-col items-center justify-center text-center lg:py-28">
         <!-- Imagen de Empresa -->
         <div class="mb-4">
         <img src="{{ $empresa->imagen_url ? asset('empresa_images/' . $empresa->imagen_url) : 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y' }}" 
             alt="Imagen de empresa" 
             class="w-60 h-60 rounded-full border-2 border-gray-200">
        </div>
        <!-- Nombre de la Empresa -->
        <h3 class="text-2xl font-bold mb-2">{{$empresa->nombre}}</h3>
        <!-- ID de la Empresa -->
        <p class="text-xl text-gray-600 font-Coda mb-2">{{$empresa->id}}</p>

    </div>

    <!-- Contenedor para las filas (derecha) -->
    <div class="col-span-1 md:col-span-3 items-center justify-center lg:py-24">
        <!-- Fila 1 con 3 columnas -->
        <div class="mb-4">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:mb-16">
                <!-- Columna 1 -->
                <div class="p-4 items-center justify-center text-center">
                <h3 class="font-bold text-xl">Correo Electronico</h3>
                <p>{{$empresa->correo}}</p>
                </div>

                <!-- Columna 2 -->
                <div class="p-4 items-center justify-center text-center">
                <h3 class="font-bold text-xl">Telefono</h3>
                <p>{{$empresa->telefono}}</p>
                </div>

                <!-- Columna 3 -->
                <div class="p-4 items-center justify-center text-center">
                <h3 class="font-bold text-xl">Direccion</h3>
                <p>{{$empresa->direccion}}</p>
                </div>
            </div>
        </div>

        <!-- Fila 2 con solo un contenedor -->
        <div class="p-4 items-center justify-center text-center">
            <h3 class="font-bold text-lg">Detalles de la Empresa</h3>
            <p>{{$empresa->detalles}}</p>
        </div>
    </div>
   
</div>

 <a href="" 
   class="bg-main-green hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg inline-block text-center lg:ml-auto">
   Editar Empresa
</a>
    </div>   


</div>
</body>
@endsection