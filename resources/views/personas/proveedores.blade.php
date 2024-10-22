@extends('layouts.plantilla')

@section('title')
    Lista de Proveedores
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

<section class="flex justify-between items-center mt-12 mb-10 mx-20 ">
<div class="ml-1">
    <h2 class="text-main-green font-Coda text-4xl">  
        Proovedores
    </h2>
</div>
                    <div class="content-end">
                    <a href="{{ route('proveedores.create') }}" class="text-white bg-main-green cursor-pointer px-4 py-1 rounded-xl font-Poppins">Agregar Proveedor</a> 
                    </div>
</section>

<div class="basis-5/6 flex items-center justify-center mr-5">
    <table class="w-[75rem]">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tl-lg">Nombre</th>
                <th class="py-2 px-4 border-b bg-[#64746B] text-white">Correo</th>
                <th class="py-2 px-4 border-b bg-[#26413C] text-white">Teléfono</th>
                <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tr-lg">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $proveedor->nombre_proveedor }}</td>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $proveedor->email }}</td>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $proveedor->telefono }}</td>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">
                    <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="text-white hover:bg-blue-700 bg-blue-500 rounded-lg px-3 py-2">Editar</a>
                    <form action="{{ route('proveedores.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white hover:bg-red-700 bg-red-500 rounded-lg px-3 py-2">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    const dropdownButton = document.getElementById('profile-dropdown-button');
    const dropdownMenu = document.getElementById('profile-dropdown-menu');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('hidden');
    });
</script>
@endsection
