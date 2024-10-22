@extends('layouts.plantilla') 

@section('title')
    Edit incoming
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
    
    
<div class="mt-8">
    <a href="{{ route('proveedores.index', ['id' => $proveedor->id]) }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
         ← Volver
    </a>
</div>
   
   <div class= "mt-10 flex justify-center">
    <div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg">
    <h1 class="font-Poppins font-bold text-center text-3xl mb-10">Editar Proveedor</h1>
       
        <form action="{{ route('proveedores.update', ['id' => $proveedor->id]) }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="grid grid-cols-2 gap-8 font-Poppins ">
    <div class="ml-16">
        <label class="block mb-2 font-semibold">Nombre</label>
        <div class="relative inline-block mb-5">
            <input type="text" name="nombre" value="{{ $proveedor->nombre_proveedor }}" class="w-[22rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
        </div>
    </div>

    <div>
        <label class="block mb-2 font-semibold">Email</label>
       
            <input type="email" name="email" value="{{ $proveedor->email }}" class="w-[22rem] p-1 rounded-lg" style="background-color: rgba(38, 65, 60, 0.25);">
    </div>
</div>

<div class="ml-[16rem]">
    <label class="block  mb-2 font-semibold">Teléfono</label>
    <input type="text" name="telefono" value="{{ $proveedor->telefono }}" class="w-[22rem] p-1 rounded-lg text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
</div>


            <div class="flex justify-center mt-10">
                <input type="submit" class="text-white text-2xl bg-main-green px-6 py-1 rounded-lg font-Poppins" value="Modificar">
            </div>
        </form>
    </div>
</div>
@endsection
