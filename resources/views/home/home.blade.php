@extends('layouts.plantilla')

@section('title')
    LogiStock - Home
@endsection

@section('content')
<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>

        
        <div class="relative float-right mr-20 ">
            <button type="button" class="inline-flex justify-center w-full px-4 py-2" id="profile-dropdown-button" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </button>

            <div class="fixed right-0 mt-2 mr-16 w-46 rounded-md shadow-lg bg-cream ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="profile-dropdown-button" id="profile-dropdown-menu">
                <div class="py-1" role="none">
                    <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Profile</a>
                    <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">
                        @csrf
                        <a href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                    </form>
                </div>
            </div>
        </div>
        


    </div> 
</header>

    
<section class="flex columns-2 justify-between mt-10 mx-20">
    <div>
        <h1 class="font-Coda text-main-green text-3xl">
            Bienvenido, {{Auth::user()->nombre}}
        </h1>
    </div>

    <div class="columns-2">
        <div>
            <a href="{{ route('product.add') }}"  class="cursor-pointer active:bg-secondary-green text-white bg-main-green px-8 py-1 rounded-lg font-Coda">
                Agregar producto
            </a>
        </div>           
    </div>
</section>

<section class="flex columns-2 mt-16">

    <div class="basis-1/6 bg-card-bg h-screen pt-6">
        <div class="flex flex-col font-Coda justify-center text-center">
            <ul>
            <h2 class="text-3xl font-bold ">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl bg-main-green text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reportes</a></li>
            </ul>

            <ul>
                <h2 class="text-3xl font-bold ">Personas</h2>
                <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Proveedores</a></li>
                <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
                <li><a href="{{route('users.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
            </ul>
        </div>
    </div>

    <div class="basis-5/6 flex">
        @foreach ($posts as $post)
        <a href="{{route('product.show', $post->id)}}">
            <div class="w-48 h-60 bg-card-bg mr-4 rounded-lg">
                <figure>
                    <img class="h-32 mx-auto my-2" src="img/{{$post->imagen_url}}" alt="{{$post->imagen_url}}">
                </figure>
                <div class="ml-4 font-Coda">
                    <h2 class="text-xl"> {{$post->nombre}} </h2>
                    <p>Código: &nbsp; {{$post->id}}</p>
                    <div class=" flex justify-end  mr-4 mb-4 ">
                        <p class="bg-white px-2 rounded-lg">{{$post->cantidad_stock}} unidades</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

    <script>
        const dropdownButton = document.getElementById('profile-dropdown-button');
        const dropdownMenu = document.getElementById('profile-dropdown-menu');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });
    </script>
@endsection