@extends('layouts.plantilla')

@section('title')
    Lista de Clientes
@endsection

@section('content')
<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}">
                <img class="w-[6rem] ml-20" src="{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>
        <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        </div>
    </div> 
</header>

<section class="flex columns-2 mt-12">
<div class="">
    <h2 class="ml-16 mr-20 text-main-green font-Coda hover:underline text-4xl">  
         Clientes
</h2>
</div>


<div class="flex flex-col">
<div class="flex flex-row mb-10 ml-2">
    <form action="{{ route('cliente.add') }}" method="POST" class="w-full">
        @csrf
        <div class="grid grid-cols-2 gap-4 font-Poppins">
            
            <div class="mr-10">
                <label class="block mb-2 font-semibold">Nombre</label>
                <input type="text" name="nombre" class="w-[23rem] p-1 rounded-xl" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            <div>
                <label class="block mb-2 font-semibold">Dirección</label>
                <input type="text" name="direccion" class="w-[23rem] p-1 rounded-xl text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            
            <div>
                <label class="block mb-2 font-semibold">Teléfono</label>
                <input type="text" name="telefono" class="w-[23rem] p-1  rounded-xl" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
            
            <div>
                <label class="block mb-2 font-semibold">Email</label>
                <input type="email" name="email" class="w-[23rem] p-1  rounded-xl text-black" style="background-color: rgba(38, 65, 60, 0.25);" required>
            </div>
        </div>
       
    
</div> 

</div>
<div class="flex items-center justify-center col-span-1 ">
                <input type="submit" class="text-white bg-main-green cursor-pointer px-4 py-1 rounded-xl font-Poppins" value="Agregar">
            </div>
</section>
</form>

<div class="basis-5/6 flex items-center justify-center mr-5 ">
    <table class="w-[75rem] ">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tl-lg ">Nombre</th>
                <th class="py-2 px-4 border-b bg-[#64746B] text-white">Correo</th>
                <th class="py-2 px-4 border-b bg-[#26413C] text-white">Teléfono</th>
                <th class="py-2 px-4 border-b bg-[#64746B] text-white">Dirección</th>
                <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tr-lg">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($clientes as $cliente) <!-- Cambiado a $clientes -->
            <tr>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->nombre_cliente }}</td>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->email }}</td>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->telefono }}</td>
                <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $cliente->direccion ?? 'N/A' }}</td>
                <td class="py-2 px-4 bg-card-bg border t-black text-center">
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="text-white hover:bg-blue-700 bg-blue-500 rounded-lg px-3 py-2">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
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
