@extends('layouts.plantilla') 

@section('title')
    Addincoming
@endsection

@section('content')


    
    
<div class=" bg-secondary-green h-screen">

    <a class="ml-20  flex" href="{{ route('incoming') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" class="mt-10 w-6 fill-white"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg>
        <p class="mt-10 font-Coda text-white text-2xl">Regresar</p>
    </a>

    <div class="font-Coda mt-6 max-w-6xl mx-auto bg-white bg-opacity-25 rounded-lg shadow-lg p-10 mb-28">
        <div class="grid grid-cols-2 gap-4  ">
           
            <div class =" text-center justify-center ">
                
                <h1 class="text-4xl font-bold mb-4">{{ $incoming->product->nombre }}</h1>
<header class="bg-secondary-green py-2">
    <div class="columns-2">
        <div>
          <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
          </a>
        </div>
  
        <div class="relative float-right mr-20 mt-3">
          <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-main-green" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
              </a>
          </div>
  
    </div> 
  </header>

    
<body class="bg-main-green"> 
    <div class="mt-8 mb-4">
        <a href="{{ route('incoming') }}" class="ml-20 text-white font-Coda hover:underline text-4xl">  
            ← Volver
        </a>
    </div>
    <div class="mt-6 max-w-6xl mx-auto bg-white bg-opacity-25 rounded-lg shadow-lg p-10 mb-28">
        <div class="grid grid-cols-2 gap-8 ">
            <!-- Left Side (Product Details) -->
            <div>
                <!-- Product Name -->
                <h1 class="text-4xl font-bold mb-4">Nombre del Producto</h1>

               
                <p class="text-xl mb-2">Codigo : {{ $incoming->product->id }}</p>

                
                <p class="text-lg  mb-2">Marca : {{ $incoming->product->marca }}</p>

              
                <p class="text-base  mb-6">{{ $incoming->product->descripcion }}</p>

                <div class ="flex justify-center">
                <div class="bg-white rounded-lg flex  items-center justify-center w-32 h-[2rem] ">
                    <span class="font-bold">{{ $incoming->cantidad_entrada }} unidades</span>
                </div>
                </div>
            </div>

            <div class="text-center">
               
                <p class="text-lg font-bold mb-2">Proveedor: {{ $incoming->product->marca }}</p>

                <p class="text-lg  mb-2">Contacto: contacto@proveedor.com</p>

                <p class="text-lg  mb-6">Fecha de Entrada: 2024-09-23</p>

                
                <div class=" mt-20 flex justify-center gap-4">
                   
                <a href="{{ route('incoming.edit') }}" class="bg-green-950 text-white py-2 px-4 rounded-lg hover:bg-green-800">Modificar Entrega</a>

                  
                <button onclick="toggleModal()" class="bg-green-950 text-white py-2 px-4 rounded-lg hover:bg-green-800">Eliminar Entrega</button>
                </div>
            </div>
        </div>
    </div>
</body>



<div id="deleteModal" class="fixed inset-0 z-50 items-center justify-center bg-black bg-opacity-50 hidden">
    
    <div class="bg-white rounded-lg p-6 max-w-md w-full">
        <h2 class="text-lg font-semibold mb-4">Estas a punto de eliminar una entrega de forma definitiva
            ¿Estás seguro de eliminar la entrega?</h2>
        <div class="flex justify-center ">
        <form id="deleteForm" action="{{ route('incomings.delete', $incoming->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mr-10">Eliminar entrega</button>
            </form><button id="cancelDelete" class="bg-white border-solid border-2 text-black px-4 py-2 rounded">Cancelar</button>
        </div>
    </div>
</div>

<script>
function toggleModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.toggle('hidden');
}

document.getElementById('cancelDelete').onclick = toggleModal;

//
document.getElementById('confirmDelete').onclick = function() {
    document.getElementById('deleteForm').submit();
};

</script>



@endsection