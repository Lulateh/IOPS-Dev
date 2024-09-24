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

    
    
<div class=" bg-main-green p-8">
<div>
    <a class="ml-20  flex" href="{{ route('incoming') }}">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" class="mt-1 w-6 fill-white"><path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"/></svg>
        <p class="font-Coda text-white text-2xl">Regresar</p>
    </a>
</div>
    <div class="mt-6 max-w-6xl mx-auto bg-white bg-opacity-25 rounded-lg shadow-lg p-10 mb-28">
        <div class="grid grid-cols-2 gap-8 ">
            <!-- Left Side (Product Details) -->
            <div>
                <!-- Product Name -->
                <h1 class="text-4xl font-bold mb-4">Nombre del Producto</h1>

                <!-- Product Code -->
                <p class="text-xl mb-2">Código del Producto</p>

                <!-- Product Brand -->
                <p class="text-lg  mb-2">Marca del Producto</p>

                <!-- Product Description -->
                <p class="text-base  mb-6">Descripción del producto: Aquí va una descripción detallada del producto.</p>

                <!-- Number of Units -->
                <div class="w-32 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-8 ml-32">
                    <span class="text-sm">10 unidades</span>
                </div>
            </div>

            <div class="text-right">
               
                <p class="text-lg font-bold mb-2">Proveedor: Nombre del Proveedor</p>

                <p class="text-lg  mb-2">Contacto: contacto@proveedor.com</p>

                <p class="text-lg  mb-6">Fecha de Entrada: 2024-09-23</p>

                
                <div class=" mt-20 flex justify-end gap-4">
                   
                <a href="{{ route('incoming.edit') }}" class="bg-green-950 text-white py-2 px-4 rounded-lg hover:bg-green-800">Modificar Entrega</a>

                  
                <button onclick="toggleModal()" class="bg-green-950 text-white py-2 px-4 rounded-lg hover:bg-green-800">Eliminar Entrega</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Background -->
<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <!-- Modal Content -->
    <div class="bg-white rounded-lg p-6 max-w-md w-full">
        <h2 class="text-lg font-semibold mb-4">Estas a punto de eliminar una entrega de forma definitiva
            ¿Estás seguro de eliminar la entrega?</h2>
        <div class="flex justify-between">
            <button id="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded">Eliminar entrega</button>
            <button id="cancelDelete" class="bg-white border-r-2 text-black px-4 py-2 rounded">Cancelar</button>
        </div>
    </div>
</div>

<script>
function toggleModal() {
    const modal = document.getElementById('deleteModal');
    modal.classList.toggle('hidden');
}

// Opcional: agregar evento para el botón de cancelar
document.getElementById('cancelDelete').onclick = toggleModal;

// Opcional: agregar evento para el botón de eliminar
document.getElementById('confirmDelete').onclick = function() {
    // Lógica para eliminar la entrega
    // ...
    toggleModal(); // Cerrar el modal después de eliminar
};

</script>



@endsection
