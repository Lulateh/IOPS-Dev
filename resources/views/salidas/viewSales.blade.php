@extends('layouts.plantilla')

@section('title')
View sales
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
@include('components.header')

<div class="mt-8">
  <a href="{{ route('sales') }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
      ← Volver
  </a>
</div>
<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<body>
  <div class="flex-container flex items-end justify-center mt-10">
    <div class="inline-block align-bottom text-left overflow-hidden bg-lightB bg-opacity-20 rounded-2xl"> 
      <div class="text-center mt-6 w-[60rem]"> 
        <div class="border-b-2 border-dotted border-black columns-2 m-2 ml-[4.5rem] w-[50rem] mb-4">
          <div class="text-black text-left flex flex-col font-Poppins font-regular ml-6 mb-4">
            <p class="m-0">Cliente: {{$client['nombre_cliente']}}</p>
            <p class="m-0">Telefono: {{$client['telefono']}}</p>
            <p class="m-0">Email: {{$client['email']}}</p>
            <p class="m-0">Fecha de entrega: {{$existingSale['fecha_salida']}}<p>
          </div>

          <div class="text-black flex text-3xl ml-64 font-Poppins font-medium"> 
            <h2 class="my-4">N° {{$existingSale['id']}}</h2>
          </div>
        </div>

        <div class="flex flex-row ml-16">
          <div class="overflow-auto rounded-lg h-80 m-2  w-[50rem]">
            <div>
              <div class="grid grid-cols-2 gap-[0.01rem] mb-6 mr-0">

                @foreach ($productosEntregados as $productoEntregado)
                  <div class="flex border border-black h-14 mt-1 ml-2 m-2">
                    <div class="flex flex-col ml-6 mt-2">
                      @foreach ($products as $producto)
                        @if ($productoEntregado -> producto_id == $producto['id'])
                          <p class="text-black font-Coda text-sm m-0">{{$producto['nombre']}}</p>
                          <p class="text-black font-Coda text-sm m-0">Código: {{$producto['id']}}</p>
                        @endif
                      @endforeach
                    </div>

                    <div class="flex ml-[10rem] mt-[0.76rem]">
                      <p class="text-black font-Poppins font-extrabold text-2xl">{{$productoEntregado -> cantidad}}</p>   
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