@extends('layouts.plantilla') 

@section('title')
    Addincoming
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
    
    
<div>
    <a class="ml-20 mt-4 flex" href="{{ route('incoming') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" class="mt-1 w-6 fill-main-green"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg>
        <p class="font-Coda text-main-green text-2xl">Regresar</p>
    </a>
</div>
   
   <div class= "mt-6 flex justify-center">
    <div class="bg-card-bg w-3/4 p-10 rounded-lg shadow-lg">
        <form action="{{route('incoming.post')}}" method="POST">
            @csrf
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <label class="block mb-2 font-semibold">Código del producto</label>
                    <input type="text" name="producto_id" class="w-full p-2 mb-4 rounded-lg opacity-25 bg-[#26413C]" required>

                    <label class="block mb-2 font-semibold">Cantidad del producto</label>
                    <input type="number" name="cantidad" class="w-full p-2 mb-4 rounded-lg opacity-100 bg-[#26413C]" required>
                </div>

                <div>
                    <label class="block mb-2 font-semibold">Proveedor</label>
                    <input type="text" name="proveedor" class="w-full p-2 mb-4 rounded-lg opacity-25 bg-[#26413C]" required>

                    <label class="block mb-2 font-semibold">Contacto del proveedor</label>
                    <input type="text" name="contacto" class="w-full p-2 mb-4 rounded-lg opacity-25 bg-[#26413C]" required>
                </div>
            </div>

        
            <div class="flex justify-center mt-8">
                <input type="submit" class="text-white bg-main-green px-6 py-2 rounded-lg font-Poppins" value="Agregar entrada">
                
            </div>
        </form>
    </div>
</div>
@endsection
