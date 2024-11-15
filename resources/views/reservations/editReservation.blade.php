@extends('layouts.plantilla')

@section('title')
Edit Reservation
@endsection

@section('content')

<!-- --------------HEADER-------------- -->
@include('components.header')


<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<body>

    <div class="mt-8">
        <a href="{{ route('reservation.show', $existingReservation->id) }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
        ← Volver
       </a>
     </div>

<div class="flex-container flex items-end justify-center mt-8">

    <div class="inline-block align-bottom text-left overflow-hidden mt-30"> 

         <!-- Alerta de stock insuficiente -->
        @if (session('error'))
            <div id="stockAlert" class="bg-red-500 text-white font-semibold rounded-lg p-4 mb-4 flex justify-between items-center">
                <span>{{ session('error') }}</span>
                <button onclick="document.getElementById('stockAlert').style.display='none'" class="ml-4 text-white hover:text-gray-300">
                    &times; <!-- Icono de cerrar (X) -->
                </button>
            </div>
        @endif

        <div class="text-center "> 

            <h2 class="font-Poppins font-medium text-3xl mb-5">Modificar reserva</h2>

            <div class="flex flex-row gap-8"> 

                
                
                <div class="flex-col ">

                    <div> 
                      <div class="bg-lilac bg-opacity-20 rounded-lg p-2 mb-6 font-Coda font-semibold columns-2 w-[38rem] h-[12rem]">
    
                      <div class="flex-col text-base text-left mt-10 ml-10">
 
  <div class="flex items-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" mr-2" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
    <p>Cliente: {{ $existingClient['nombre_cliente']}}</p>
  </div>

  <!-- Contacto -->
  <div class="flex items-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg> 
    <p>Contacto: {{ $existingClient['telefono']}}</p>
  </div>

  <!-- Email -->
  <div class="flex items-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                </svg>
    <p>Email: {{ $existingClient['email']}}</p>
  </div>

  <!-- Fecha de entrega -->
  <div class="flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4 mb-1" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1z"/>
                    <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                </svg>
    <p>Fecha de entrega: {{ $existingReservation['fecha_salida']}}</p>
  </div>
</div>

    
                        <button onclick="showModalEditar({ 
                            id: {{ $existingClient->id }}, 
                            name: '{{ $existingClient->nombre_cliente }}', 
                            contact: '{{ $existingClient->telefono }}', 
                            email: '{{ $existingClient->email }}', 
                            deliveryDate: '{{ $existingReservation->fecha_salida }}'
                            })" class="align-end bg-main-blue p-2 ml-32 m-4 mt-14 rounded-lg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <path d="M56.4363 5.56418C56.7973 5.92622 57 6.41659 57 6.9278C57 7.43901 56.7973 7.92938 56.4363 8.29142L52.4068 12.3244L44.6799 4.59844L48.7094 0.565511C49.0717 0.203415 49.5629 0 50.0752 0C50.5874 0 51.0786 0.203415 51.4409 0.565511L56.4363 5.56031V5.56418ZM49.6753 15.0516L41.9484 7.32568L15.6267 33.6479C15.414 33.8604 15.254 34.1197 15.1592 34.405L12.0491 43.7302C11.9927 43.9002 11.9847 44.0825 12.026 44.2568C12.0673 44.4311 12.1562 44.5905 12.2829 44.7171C12.4096 44.8438 12.569 44.9327 12.7433 44.974C12.9176 45.0153 13.1 45.0073 13.27 44.9509L22.5964 41.8412C22.8813 41.7476 23.1406 41.5889 23.3536 41.3776L49.6753 15.0516Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 50.2143C0 51.7488 0.609565 53.2204 1.6946 54.3054C2.77963 55.3904 4.25125 56 5.78571 56H48.2143C49.7488 56 51.2204 55.3904 52.3054 54.3054C53.3904 53.2204 54 51.7488 54 50.2143V27.0714C54 26.5599 53.7968 26.0694 53.4351 25.7077C53.0735 25.346 52.5829 25.1429 52.0714 25.1429C51.5599 25.1429 51.0694 25.346 50.7077 25.7077C50.346 26.0694 50.1429 26.5599 50.1429 27.0714V50.2143C50.1429 50.7258 49.9397 51.2163 49.578 51.578C49.2163 51.9397 48.7258 52.1429 48.2143 52.1429H5.78571C5.27423 52.1429 4.78369 51.9397 4.42201 51.578C4.06033 51.2163 3.85714 50.7258 3.85714 50.2143V7.78571C3.85714 7.27423 4.06033 6.78369 4.42201 6.42201C4.78369 6.06033 5.27423 5.85714 5.78571 5.85714H30.8571C31.3686 5.85714 31.8592 5.65395 32.2209 5.29228C32.5825 4.9306 32.7857 4.44006 32.7857 3.92857C32.7857 3.41708 32.5825 2.92654 32.2209 2.56487C31.8592 2.20319 31.3686 2 30.8571 2H5.78571C4.25125 2 2.77963 2.60956 1.6946 3.6946C0.609565 4.77963 0 6.25125 0 7.78571V50.2143Z" fill="white"/>
                          </svg>
                        </button>
    
                      </div>
                        @php
                        // Extraemos los IDs de los productos reservados en un array
                            $productosReservadosIds = $productosReservados->pluck('producto_id')->toArray();
                        @endphp
                        <div class="bg-lilac bg-opacity-20 rounded-lg p-10 text-left"> 
                            <form action="{{ route('update.productReservation', ['id' => $existingReservation->id ]) }}" method="POST" >
                                @csrf
                                
                                <!-- Campo oculto para el ID del producto a editar -->
                                <input type="hidden" id="editingProductId" name="editingProductId" value="">
                                
                                <!-- Select para elegir el producto -->
                                <div class="ml-2 mb-4">
                                    <label for="productSelect" class="flex items-center font-Coda font-semibold mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                                        <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z"/>
                                       </svg>
                                        Código del producto
                                    </label> 
                                   
                                    <select id="productSelect" name="productSelect" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgb(255, 255, 255);">
                                        <option value="">Seleccione un producto</option>
                                        @foreach($productos as $producto)
                                                <option value="{{ $producto->id }}" 
                                                {{ old('productSelect', $selectedProduct->id ?? '') == $producto->id ? 'selected' : '' }}>
                                                {{ $producto->nombre }} ({{ $producto->cantidad_stock }} Unidades en stock)
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                
                                <div class="ml-2 mt-2">
                                    <label for="productCant" class=" flex items-center font-Coda font-semibold mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-4" viewBox="0 0 16 16">
                                        <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"/>
                                        </svg>
                                Cantidad del producto</label>
                                    <input class="rounded-lg py-2 mt-1 mb-2 bg-white w-[31.5rem]" type="number" id="productCant" name="productCant" value="{{ old('productCant') }}" required><br>
                                @if ($errors->any())
                                    <div class="bg-red-500 text-white font-semibold rounded-lg p-4 mb-4">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                </div>
                                
                                <div class="mt-10 flex items-center rounded-lg bg-main-blue justify-center">
                                <button class="group text-white bg-main-green  px-6 py-2 rounded-lg font-Poppins flex items-center relative">
    
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" absolute w-6 h-6  text-white group-hover:opacity-0 transition-opacity duration-300" viewBox="0 0 16 16">
    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute w-6 h-6  text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
    <path d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05"/>
    </svg>
    <span class="ml-8 font-Poppins  text-white">Agregar Producto</span>
</button>
                                </div>
                                
                              
                            </form>
                        </div>
                         
                    
    
                    </div>
    
                </div>

                <div class="bg-lilac bg-opacity-20 rounded-lg w-[36rem] mr-16">

                    <div class="m-8 overflow-y-scroll h-[25.4rem]"> 

                      <div class="flex">
                        <div>
                            @foreach ($productosReservados as $productoReservado)
                                <div class="flex">
                                    <div class="mt-2"> 
                                        <form action="{{ route('deleteProductReservation', ['reservaId' => $existingReservation->id, 'productoId' => $productoReservado->producto_id]) }}" 
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent border-0 p-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                        
                                    <div class="mt-3 ml-2"> 
                                        <button onclick="fillEditForm({ 
                                            id: {{ $productoReservado->producto_id }}, 
                                            name: '{{ $productoReservado->producto->nombre }}',
                                            quantity: {{ $productoReservado->cantidad }} 
                                        })">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                        </button>
                                    </div>

                       
                                    <div class="grid grid-cols-2 gap-[0.01rem] mb-6 mr-0">
                                        <div class="flex border border-black w-[24rem] h-14 mt-1 ml-2 m-2">
                                            <div class="flex flex-col ml-6 mt-2 text-left">
                                                @foreach ($productos as $producto)
                                                    @if ($productoReservado -> producto_id == $producto['id'])
                                                        <p class="text-secondary-green font-Coda text-sm m-0">Producto: {{$producto['nombre']}}</p>
                                                        <p class="text-secondary-green font-Coda text-sm m-0">Código: {{$producto['id']}}</p>
                                                    @endif
                                                @endforeach
                                            </div>

                                            <div class="flex mx-auto mt-[0.76rem] ml-[10rem]">
                                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">{{$productoReservado -> cantidad}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div> 

                      </div>

                    </div>

                </div>

            </div>

            <div class="mt-6 mb-10 mr-6 rounded-lg">
                <button onclick="window.location.href='{{route('reservation.show', $reserva->id)}}'" class="text-white bg-main-blue text-lg  p-1 rounded-lg  font-Poppins">
                    Modificar reserva
                </button>
            </div>

        </div>

    </div>

</div>

<!-- Modal editar cliente y fecha -->
<div id="editClientModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50 ">
    <div class="bg-white rounded-lg p-6 w-1/3">
        <h2 class="text-xl font-semibold mb-4">Editar Cliente y Fecha de Entrega</h2>
        <form id="editClientForm" method="POST" action="{{ route('updateClientReservation') }}">
            @csrf
            <!-- Campo oculto para ID del cliente -->
            <input type="hidden" id="clientId" name="clientId" value="{{ $existingClient->id }}">
            <!-- Campo oculto para ID de la reserva -->
            <input type="hidden" id="reservationId" name="reservationId" value="{{ $existingReservation->id }}">

            <!-- Dropdown de clientes -->
            <label for="clientSelect" class="block mb-2">Selecciona el Cliente</label>
            <select id="clientSelect" name="clientSelect" class="border rounded w-full p-2 mb-4" onchange="updateClientInfo()">
                @foreach($clientes as $client)
                    <option value="{{ $client->id }}" 
                        data-contact="{{ $client->telefono }}" 
                        data-email="{{ $client->email }}"
                        {{ $existingClient->id == $client->id ? 'selected' : '' }}>
                        {{ $client->nombre_cliente }}
                    </option>
                @endforeach
            </select>

            <!-- Información del cliente seleccionado -->
            <div class="flex-col text-lg text-left mb-5">
                <div>
                    <label>Contacto:</label>
                    <p id="clientContact">{{ $existingClient->telefono }}</p>
                </div>
                <div>
                    <label>Email:</label>
                    <p id="clientEmail">{{ $existingClient->email }}</p>
                </div>
            </div>

            <!-- Campo de fecha de entrega -->
            <label for="deliveryDate" class="block mb-2">Fecha de Entrega</label>
            <input type="date" id="deliveryDate" name="deliveryDate" class="border rounded w-full p-2 mb-4" required value="{{ $existingReservation->fecha_salida }}">

            <!-- Botones de acción -->
            <div class="flex justify-end">
                <button type="button" class="bg-green text-white px-4 py-2 rounded mr-2" onclick="closeModal()">Cancelar</button>
                <button type="submit" class="bg-main-blue text-white px-4 py-2 rounded">Guardar</button>
            </div>
        </form>
    </div>
</div>


<script>
    // Función para actualizar la información del cliente cuando cambia el select
    function updateClientInfo() {
        const select = document.getElementById('clientSelect');
        const selectedOption = select.options[select.selectedIndex];

        // Actualizar los campos de contacto y email con los datos del cliente seleccionado
        if (selectedOption.value) {
            document.getElementById('clientId').value = selectedOption.value;
            document.getElementById('clientContact').textContent = selectedOption.getAttribute('data-contact');
            document.getElementById('clientEmail').textContent = selectedOption.getAttribute('data-email');
        } else {
            // Limpiar los campos si no se selecciona un cliente
            document.getElementById('clientContact').textContent = '';
            document.getElementById('clientEmail').textContent = '';
        }
    }

    // Función para mostrar el modal y llenar los datos actuales del cliente
    function showModalEditar(clientData) {
        // Mostrar el modal
        document.getElementById('editClientModal').classList.remove('hidden');

        // Establecer el cliente actual en el select y actualizar la información
        const select = document.getElementById('clientSelect');
        select.value = clientData.id; // Seleccionar el cliente actual
        updateClientInfo(); // Actualizar la información del cliente

        // Inicializar la fecha de entrega en el campo de fecha
        document.getElementById('deliveryDate').value = clientData.deliveryDate;
    }

    // Función para cerrar el modal
    function closeModal() {
        // Ocultar el modal
        document.getElementById('editClientModal').classList.add('hidden');
    }

    function fillEditForm(product) {
        // Asignar el ID del producto al campo oculto
         document.getElementById('editingProductId').value = product.id;
        // Asignar el nombre del producto al select
        document.getElementById('productSelect').value = product.id; 
        // Asignar la cantidad al campo de cantidad
        document.getElementById('productCant').value = product.quantity;

        document.getElementById('submitButton').value = "Editar producto";
    }

</script>

</body>
<!-- --------------BODY-------------- -->

@endsection

