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

        <div class="relative float-right mr-20 mt-3">
        <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
            </a>
        </div>
    </div> 
</header>
    
    
<div class="mt-8">
    <a href="{{ route('incoming') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
         ← Volver
    </a>
</div>
   
   <div class= "mt-28 flex justify-center">
    <div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg">
        <form action="{{ route('update.incoming') }}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <label class="block mb-2 font-semibold">Código del producto</label>
                    <div class="relative inline-block text-left mb-5">
                        <select name ="prod_id" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un producto</option>
                            @foreach($posts as $producto)
                              <option value="{{ $producto->id }}">{{ $producto->nombre}}</option>
                            @endforeach
                          </select>
                      </div>

                    <label class="block mt-9 mb-2 font-semibold">Cantidad del producto</label>
                    <input type="number" name="cantidad" class="w-full p-2 mb-4 rounded-lg opacity-25 bg-[#26413C]" required>
                </div>

                <div>
                    <label class="block mb-2 font-semibold">Proveedor</label>
                    <div class="relative inline-block text-left mb-5">
                        <select name ="prov_id" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                            <option value="">Seleccione un proveedor</option>
                            @foreach($proveedores as $proveedor)
                              <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_proveedor}}</option>
                            @endforeach
                          </select>
                      </div>

                </div>
            </div>

            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-green px-6 py-2 rounded-lg font-Poppins" value="Modificar entrada">
            </div>
        </form>
    </div>
</div>
@endsection
