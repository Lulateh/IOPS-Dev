@extends('layouts.plantilla')

@section('title')
View reservations
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
@include('components.header')

<body>

    <div class="mt-8">
        <a href="{{ route('reservations') }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
            ← Volver
        </a>
    </div>

    <div class="flex-container flex items-end justify-center mt-5">
        <div class="inline-block align-bottom text-left mb-8 overflow-hidden shadow-lg bg-lightB bg-opacity-20 rounded-2xl max-sm:w-[23rem]"> 
            <div class="text-center mt-6 lg:w-[60rem] md:w-[45rem]"> 
                <div class="border-b-2 border-dotted border-black columns-2 lg:m-2 lg:ml-[4.5rem] lg:w-[50rem] lg:mb-4 md:ml-[4.5rem] w-full md:w-[36rem] max-sm:gap-[3rem] max-sm:w-[22.5rem] max-sm:px-4">          
                    <div class="text-black text-left flex flex-col font-Poppins font-regular ml-6 mb-4">
                        <p class="m-0">Cliente: {{$client['nombre_cliente']}}</p>
                        <p class="m-0">Telefono: {{$client['telefono']}}</p>
                        <p class="m-0">Email: {{$client['email']}}</p>
                        <p class="m-0">Fecha de entrega: {{$reserva['fecha_salida']}}<p>
                    </div>

                    <div class="text-black flex text-3xl lg:ml-64 md:ml-40 font-Poppins font-medium"> 
                        <h2 class="my-4">N° {{$reserva['id']}}</h2>
                    </div>
                    
                </div>
                
                <div class="lg:columns-2 md:columns-2 lg:mr-16 lg:mb-2 md:mr-8 md:ml-[-6rem] max-sm:grid"> 
                    <div class="md:ml-[6rem]"> 
                        <h3 class="font-Poppins font-medium">Estado de la reserva:<h3>
                    </div>

                    @if($reserva['estado'] == "entregado")
                        <div> 
                            <button onclick="openModal('entregado')" class="bg-main-blue border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-white font-Poppins font-bold text-sm">ENTREGADO</button>
                            <button onclick="openModal('reservado')" class="bg-white border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-main-blue font-Poppins font-bold text-sm">RESERVADO</button>
                            <button onclick="openModal('cancelado')" class="bg-white border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-main-blue font-Poppins font-bold text-sm">CANCELADO</button>
                        </div>
                    @elseif($reserva['estado'] == "reservado")
                        <div> 
                            <button onclick="openModal('entregado')" class="bg-white border-2 hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-main-blue font-Poppins font-bold text-sm">ENTREGADO</button>
                            <button onclick="openModal('reservado')" class="bg-main-blue border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-white font-Poppins font-bold text-sm">RESERVADO</button>
                            <button onclick="openModal('cancelado')" class="bg-white border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-main-blue font-Poppins font-bold text-sm">CANCELADO</button>
                        </div>
                    @elseif($reserva['estado'] == "cancelado")
                        <div> 
                            <button onclick="openModal('entregado')" class="bg-white border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-main-blue font-Poppins font-bold text-sm">ENTREGADO</button>
                            <button onclick="openModal('reservado')" class="bg-white border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-main-blue font-Poppins font-bold text-sm">RESERVADO</button>
                            <button onclick="openModal('cancelado')" class="bg-main-blue border-2  hover:bg-blue-900 hover:text-white border-main-blue rounded-lg px-3 text-white font-Poppins font-bold text-sm">CANCELADO</button>
                        </div>
                    @endif
                </div>

                <div class="flex flex-row ml-16">
                    <div class="overflow-auto rounded-lg h-80 m-2 max-sm:mt-6  lg:w-[50rem] md:w-[50rem]  ">
                        <div>
                            @foreach ($productosReservados as $productoReservado)
                                <div class="lg:grid md:grid lg:grid-cols-2 md:grid-cols-2 max-sm:w-[15rem] gap-[0.01rem] mb-6 mr-0">
                                    <div class="flex border border-main-blue h-14 mt-1 ml-2 m-2">
                                        <div class="flex flex-col ml-6 mt-2 text-left">
                                            @foreach ($productos as $producto)
                                                @if ($productoReservado -> producto_id == $producto['id'])
                                                    <p class="text-main-blue font-Coda text-sm m-0">{{$producto['nombre']}}</p>
                                                    <p class="text-main-blue font-Coda text-sm m-0">Código: {{$producto['id']}}</p>
                                                @endif
                                            @endforeach
                                        </div>

                                        <div class="flex mx-auto mt-[0.76rem]">
                                            <p class="text-main-blue font-Poppins font-extrabold text-2xl">{{$productoReservado -> cantidad}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                @if($reserva['estado'] == "reservado")
                    <div class="my-6">
                        <a href="{{ route('reservation.redirect.edit', $reserva['id']) }}">
                            <button  class="text-white bg-main-blue px-8 py-1 rounded-lg font-Poppins mr-2">Editar</button>
                        <a>
                    </div>
                @endif


            </div>
        </div>
    </div>

<!--Modal para verificar la opcion-->
<div id="statusModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-75 flex justify-center items-center">
    <div class="bg-white p-6 rounded-lg">
        <h2 class="text-xl font-bold mb-4">Cambiar estado de la reserva a <span class="text-red-600" id="newStatus"></span></h2>
        <form id="statusForm" action="{{ route('reservations.updateStatus', $reserva['id']) }}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="estado" id="estadoInput">

            <p class="text-center">¿Estás seguro que deseas cambiar el estado?</p>
            <div class="mt-4 ml-[6.3rem]">
                <button type="button" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded mr-2" onclick="closeModal()">Cancelar</button>
                <button type="submit" class="bg-main-blue hover:bg-green text-white px-4 py-2 rounded">Confirmar</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openModal(estado) {
        // Establece el valor del input escondido y el texto del modal
        document.getElementById('estadoInput').value = estado;
        document.getElementById('newStatus').innerText = estado.toUpperCase(); // Cambia el texto a mayúsculas
        document.getElementById('statusModal').classList.remove('hidden');  // Muestra el modal
    }

    function closeModal() {
        document.getElementById('statusModal').classList.add('hidden');  // Oculta el modal
    }
</script>


</body>


@endsection