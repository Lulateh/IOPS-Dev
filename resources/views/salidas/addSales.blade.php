@extends('layouts.plantilla')

@section('title')
Add Sales
@endsection

@section('content')

<!-- --------------HEADER-------------- -->
<header class="bg-main-green py-2">
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
    <a href="{{ route('sales') }}" class="ml-20 text-secondary-green font-Coda hover:underline text-4xl">  
    ← Volver
    </a>
</div>
<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<body class="bg-cream">

<div class="flex-container flex items-end justify-center">

    <div class="inline-block align-bottom text-left overflow-hidden mt-30"> 

        <div class="text-center mt-2"> 

            <h2 class="font-Poppins font-medium text-3xl mb-8">Agregar reserva</h2>

            <div class="flex flex-row mt-4"> 

                <div class="bg-card-bg bg-opacity-70 rounded-lg w-[36rem] mr-16">

                <div class="m-8 overflow-y-scroll h-[25.4rem]">
    @foreach($ventas as $venta)
    <div class="flex">

        <div class="mt-2">
            <!-- Icono de eliminar -->
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
            </svg>
        </div>

        <div class="flex border border-black h-14 w-[24rem] mt-1 ml-4 m-2">
            <div class="flex flex-col ml-10 mt-2">
                <p class="font-Coda text-sm m-0">{{ $venta->producto->nombre }}</p>
                <p class="font-Coda text-sm m-0">Marca: {{ $venta->producto->marca }}</p>
            </div>
            <div class="flex ml-[14rem] mr-6 mt-[0.76rem]">
                <p class="font-Poppins font-extrabold text-secondary-green text-2xl">{{ $venta->cantidad }}</p>
            </div>
        </div>

    </div>
    @endforeach
</div>

                </div>
                
                <div class="flex-col">

                    <div> 
                      <div class="bg-card-bg bg-opacity-70  rounded-lg p-2 mb-6 font-Coda font-semibold columns-2 w-[36rem]">
    
                        <div class="flex-col text-lg text-left mt-3 ml-10">
                          <p>Cliente:</p>
                          <p>Contacto:</p>
                          <p>Fecha de entrega:</p>
                        </div>
    
                        <button onclick="showModalEditar()" class="align-end bg-main-green p-2 ml-32 m-4 rounded-lg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <path d="M56.4363 5.56418C56.7973 5.92622 57 6.41659 57 6.9278C57 7.43901 56.7973 7.92938 56.4363 8.29142L52.4068 12.3244L44.6799 4.59844L48.7094 0.565511C49.0717 0.203415 49.5629 0 50.0752 0C50.5874 0 51.0786 0.203415 51.4409 0.565511L56.4363 5.56031V5.56418ZM49.6753 15.0516L41.9484 7.32568L15.6267 33.6479C15.414 33.8604 15.254 34.1197 15.1592 34.405L12.0491 43.7302C11.9927 43.9002 11.9847 44.0825 12.026 44.2568C12.0673 44.4311 12.1562 44.5905 12.2829 44.7171C12.4096 44.8438 12.569 44.9327 12.7433 44.974C12.9176 45.0153 13.1 45.0073 13.27 44.9509L22.5964 41.8412C22.8813 41.7476 23.1406 41.5889 23.3536 41.3776L49.6753 15.0516Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 50.2143C0 51.7488 0.609565 53.2204 1.6946 54.3054C2.77963 55.3904 4.25125 56 5.78571 56H48.2143C49.7488 56 51.2204 55.3904 52.3054 54.3054C53.3904 53.2204 54 51.7488 54 50.2143V27.0714C54 26.5599 53.7968 26.0694 53.4351 25.7077C53.0735 25.346 52.5829 25.1429 52.0714 25.1429C51.5599 25.1429 51.0694 25.346 50.7077 25.7077C50.346 26.0694 50.1429 26.5599 50.1429 27.0714V50.2143C50.1429 50.7258 49.9397 51.2163 49.578 51.578C49.2163 51.9397 48.7258 52.1429 48.2143 52.1429H5.78571C5.27421 52.1429 4.78371 51.9397 4.42203 51.578C4.06035 51.2163 3.85714 50.7258 3.85714 50.2143V7.78571C3.85714 7.27421 4.06035 6.78371 4.42203 6.42203C4.78371 6.06035 5.27421 5.85714 5.78571 5.85714H28.9286C29.44 5.85714 29.9306 5.65393 30.2923 5.29226C30.654 4.93059 30.8571 4.44009 30.8571 3.92857C30.8571 3.41706 30.654 2.92656 30.2923 2.56488C29.9306 2.20321 29.44 2 28.9286 2H5.78571C4.25125 2 2.77963 2.60957 1.6946 3.6946C0.609565 4.77963 0 6.25125 0 7.78571V50.2143Z" fill="white"/>
                          </svg> 
                        </button>
    
                      </div>
                    </div>

                    <!-- --------------Form to add a new reservation-------------- -->
                    <div>
                        <form action="{{ route('add.sale') }}" method="POST">
                            @csrf
                            <select name ="prod_id" class="block appearance-none w-[31.6rem] text-center border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-lg leading-tight focus:outline-none focus:shadow-outline" style="background-color: rgba(38, 65, 60, 0.25);">
                            <option value="">Seleccione un producto</option>
                            @foreach($productos as $producto)
                            <option value="{{ $producto->id }}">{{ $producto->nombre}}</option>
                            @endforeach
                            </select>
                            
                            
                            <label for="quantity">Cantidad:</label>
                            <input type="number" name="quantity" id="quantity" min="1" required>
                            
                            <button type="submit" class="mt-4 bg-main-green p-2 rounded-lg">
                                Agregar reserva
                            </button>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
</body>
@endsection