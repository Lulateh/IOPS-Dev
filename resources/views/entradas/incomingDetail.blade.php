@extends('layouts.plantilla') 

@section('title')
    Incoming Detail
@endsection

@section('content')
@include('components.header')
    
<div>

    <div class="mt-8">
        <a href="{{ route('incoming')}}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
             ← Volver
        </a>
    </div>

    <div class="font-Coda mt-10 lg:max-w-6xl mx-auto bg-lightB bg-opacity-20 rounded-lg shadow-lg lg:w-[100%] p-10 mb-28 md:w-[42rem] max-sm:w-[25rem]">
        <div class="grid lg:grid-cols-2 md:grid-cols-2 gap-4  ">
        
            <div class =" text-center justify-center mt-5">
                
                <h1 class="text-4xl font-bold mb-4">{{ $incoming->product->nombre }}</h1>

            
                <p class="text-xl mb-2">Codigo : {{ $incoming->product->id }}</p>

                
                <p class="text-lg  mb-2">Marca : {{ $incoming->product->marca }}</p>

            
                <p class="text-base  mb-10">{{ $incoming->product->descripcion }}</p>

                <div class ="flex justify-center">
                <div class="bg-white rounded-lg flex  items-center justify-center w-32 h-[2rem] max-sm:mb-10 ">
                    <span class="font-bold">{{ $incoming->cantidad_entrada }} unidades</span>
                </div>
                </div>
            </div>

            <div class="text-center">
            
                <p class="text-lg font-bold mb-2">Proveedor: {{ $incoming->proveedor->nombre_proveedor }}</p>

                <p class="text-lg  ">email : {{ $incoming->proveedor->email }}</p>
                <p class="text-lg  mb-6">Telefono: {{ $incoming->proveedor->telefono }}</p>

                <p class="text-lg">Encargado de mercadería: {{ $incoming->usuario->nombre }}</p>

                <p class="text-s lg:mt-10 md:mt-10 ">Fecha de Entrada: {{ $incoming->created_at->format('d-m-y') }}</p>

                
                <div class=" mt-5 lg:flex md:flex max-sm:grid justify-center gap-4">
                
                    <a href="{{ route('incoming.edit', ['id' => $incoming->id]) }}" class="bg-main-blue text-white py-2 px-4 rounded-lg hover:bg-blue-900">Modificar Entrada</a>

                <button onclick="toggleModal()" class="bg-main-blue text-white py-2 px-4 rounded-lg hover:bg-blue-900">Eliminar Entrada</button>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="deleteModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    
    <div class="bg-white rounded-lg p-6 max-w-md w-full">
        <h2 class="text-lg font-semibold mb-4">Estas a punto de eliminar una entrada de forma definitiva
            ¿Estás seguro de eliminar la entrada?</h2>
        <div class="flex justify-center ">
        <form id="deleteForm" action="{{ route('incomings.delete', $incoming->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded mr-10">Eliminar entrada</button>
            </form><button id="cancelDelete" class="bg-white border-solid border-2 hover:bg-gray-200 text-black px-4 py-2 rounded">Cancelar</button>
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
