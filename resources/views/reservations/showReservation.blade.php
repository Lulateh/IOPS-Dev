@extends('layouts.plantilla')

@section('title')
View reservations
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
<header class="bg-secondary-green py-2">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt=""></a>
        </div>

        <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-main-green" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        </div>

    </div> 
</header>

<div class="mt-8 mb-6">
    <a href="{{ route('reservations') }}" class="ml-20 text-white font-Coda hover:underline text-4xl">  
        ← Volver
    </a>
</div>

<body class="bg-main-green">
    <div class="flex-container flex items-end justify-center ">
        <div class="inline-block align-bottom text-left overflow-hidden bg-white rounded-2xl"> 
            <div class="text-center mt-6 w-[60rem]"> 
                <div class="border-b-2 border-dotted border-secondary-green columns-2 m-2 ml-[4.5rem] w-[50rem] mb-4">          
                    <div class="text-secondary-green text-left flex flex-col font-Poppins font-regular ml-6 mb-4">
                        <p class="m-0">Cliente: {{$client['nombre_cliente']}}</p>
                        <p class="m-0">Telefono: {{$client['telefono']}}</p>
                        <p class="m-0">Email: {{$client['email']}}</p>
                        <p class="m-0">Fecha de entrega: {{$reserva['fecha_salida']}}<p>
                    </div>

                    <div class="text-secondary-green flex text-3xl ml-64 font-Poppins font-medium"> 
                        <h2 class="my-4">N° {{$reserva['id']}}</h2>
                    </div>
                    
                </div>
                
                <div class="columns-2 mr-16 mb-2"> 
                    <div> 
                        <h3 class="font-Poppins font-medium">Estado de la reserva:<h3>
                    </div>

                    @if($reserva['estado'] == "entregado")
                        <div> 
                            <button onclick="openModal('entregado')" class="bg-secondary-green border-2 border-secondary-green rounded-lg px-3 text-white font-Poppins font-bold text-sm">ENTREGADO</button>
                            <button onclick="openModal('reservado')" class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">RESERVADO</button>
                            <button onclick="openModal('cancelado')" class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">CANCELADO</button>
                        </div>
                    @elseif($reserva['estado'] == "reservado")
                        <div> 
                            <button onclick="openModal('entregado')" class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">ENTREGADO</button>
                            <button onclick="openModal('reservado')" class="bg-secondary-green border-2 border-secondary-green rounded-lg px-3 text-white font-Poppins font-bold text-sm">RESERVADO</button>
                            <button onclick="openModal('cancelado')" class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">CANCELADO</button>
                        </div>
                    @elseif($reserva['estado'] == "cancelado")
                        <div> 
                            <button onclick="openModal('entregado')" class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">ENTREGADO</button>
                            <button onclick="openModal('reservado')" class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">RESERVADO</button>
                            <button onclick="openModal('cancelado')" class="bg-secondary-green border-2 border-secondary-green rounded-lg px-3 text-white font-Poppins font-bold text-sm">CANCELADO</button>
                        </div>
                    @endif
                </div>

                <div class="flex flex-row ml-16">
                    <div class="overflow-auto rounded-lg h-80 m-2  w-[50rem]">
                        <div>
                            @foreach ($productosReservados as $productoReservado)
                                <div class="grid grid-cols-2 gap-[0.01rem] mb-6 mr-0">
                                    <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                                        <div class="flex flex-col ml-6 mt-2 text-left">
                                            @foreach ($productos as $producto)
                                                @if ($productoReservado -> producto_id == $producto['id'])
                                                    <p class="text-secondary-green font-Coda text-sm m-0">{{$producto['nombre']}}</p>
                                                    <p class="text-secondary-green font-Coda text-sm m-0">Código: {{$producto['id']}}</p>
                                                @endif
                                            @endforeach
                                        </div>

                                        <div class="flex mx-auto mt-[0.76rem]">
                                            <p class="text-secondary-green font-Poppins font-extrabold text-2xl">{{$productoReservado -> cantidad}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <div class="my-6">
                    <a href="{{ route('reservation.redirect.edit', $reserva['id']) }}">
                        <button  class="text-white bg-secondary-green px-8 py-1 rounded-lg font-Poppins mr-2">Editar</button>
                    <a>
                </div>

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
                <button type="button" class="bg-gray-300 px-4 py-2 rounded mr-2" onclick="closeModal()">Cancelar</button>
                <button type="submit" class="bg-main-green text-white px-4 py-2 rounded">Confirmar</button>
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