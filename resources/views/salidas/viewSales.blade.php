@extends('layouts.plantilla')

@section('title')
View sales
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
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

<div class="mt-8 mb-6">
    <a href="{{ route('sales') }}" class="ml-20 text-white font-Coda hover:underline text-4xl">  
      ← Volver
    </a>
</div>
<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<body class="bg-main-green">
  <div class="flex-container flex items-end justify-center ">
    <div class="inline-block align-bottom text-left overflow-hidden bg-white bg-opacity-20 rounded-2xl"> 
      <div class="text-center mt-6 w-[60rem]"> 
        <div class="border-b-2 border-dotted border-secondary-green columns-2 m-2 ml-[4.5rem] w-[50rem] mb-4">
          <div class="text-secondary-green text-left flex flex-col font-Poppins font-regular ml-6 mb-4">
            <p class="m-0">Cliente: {{$client['nombre_cliente']}}</p>
            <p class="m-0">Telefono: {{$client['telefono']}}</p>
            <p class="m-0">Email: {{$client['email']}}</p>
            <p class="m-0">Fecha de entrega: {{$existingSale['fecha_salida']}}<p>
          </div>

          <div class="text-secondary-green flex text-3xl ml-64 font-Poppins font-medium"> 
            <h2 class="my-4">N° {{$existingSale['id']}}</h2>
          </div>
        </div>

        <div class="flex flex-row ml-16">
          <div class="overflow-auto rounded-lg h-80 m-2  w-[50rem]">
            <div>
              <div class="grid grid-cols-2 gap-[0.01rem] mb-6 mr-0">

                @foreach ($productosEntregados as $productoEntregado)
                  <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                    <div class="flex flex-col ml-6 mt-2">
                      @foreach ($products as $producto)
                        @if ($productoEntregado -> producto_id == $producto['id'])
                          <p class="text-secondary-green font-Coda text-sm m-0">{{$producto['nombre']}}</p>
                          <p class="text-secondary-green font-Coda text-sm m-0">Código: {{$producto['id']}}</p>
                        @endif
                      @endforeach
                    </div>

                    <div class="flex ml-[10rem] mt-[0.76rem]">
                      <p class="text-secondary-green font-Poppins font-extrabold text-2xl">{{$productoEntregado -> cantidad}}</p>   
                    </div>
                  </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
<!-- --------------BODY-------------- -->

@endsection