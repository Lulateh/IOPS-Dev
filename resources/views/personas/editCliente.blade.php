@extends('layouts.plantilla') 

@section('title')
    Edit client
@endsection

@section('content')
<header class="bg-main-blue py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>

        
        <div class="relative float-right mr-20 ">
            <button type="button" class="inline-flex justify-center w-full px-4 py-2" id="profile-dropdown-button" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-white" viewBox="0 0 16 16">
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
    
    
<div class="mt-8">
    <a href="{{ route('clientes.index', ['id' => $cliente->id]) }}" class="ml-20 text-main-green font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>
   
   <div class= "flex justify-center">
    <div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg mt-10 ">
        <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Editar Cliente</h1>
        <form action="{{ route('clientes.update', ['id' => $cliente->id]) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="grid grid-cols-2 gap-2 font-Poppins">
                
        <div class="ml-28">
        <label class="block font-semibold">Nombre</label>
        <input type="text" name="nombre_cliente" value="{{ $cliente->nombre_cliente }}" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
        </div>

        <div>
        <label class="block  font-semibold">Email</label>
    <input type="email" name="email" value="{{ $cliente->email }}" class="w-[20rem] p-1 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
   
         </div>


    <div class="ml-28">
    <label class="block font-semibold">Teléfono</label>
        <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="w-[20rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
       
    </div>

    <div>
    <label class="block font-semibold">Dirección</label>
    <input type="text" name="direccion" value="{{ $cliente->direccion }}" class="w-[20rem] p-1 rounded-lg text-black" style="background-color: rgb(255, 255, 255);" required>
    </div>
    </div>


    <div class="flex justify-center mt-5">
    <div>
    <label class="block mb-2 font-semibold">Estado</label>
    <select name="estado" class="w-[22rem] p-1 rounded-lg" style="background-color: rgb(255, 255, 255);">
        <option value="activo" {{ $cliente->estado == 'activo' ? 'selected' : '' }}>Activo</option>
        <option value="inactivo" {{ $cliente->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>
</div>



            <div class="flex justify-center mt-16">
                <input type="submit" class="text-white text-2xl bg-main-blue  px-8 py-1 rounded-xl font-Poppins" value="Modificar">
            </div>
        </form>
    </div>
</div>
@endsection
