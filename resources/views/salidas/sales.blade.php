@extends('layouts.plantilla')

@section('title')
    Sales
@endsection

@section('content')
  <!-- --------------HEADER-------------- -->
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
  <!-- --------------HEADER-------------- -->

  <!-- --------------BODY-------------- -->
  <section class="flex columns-2">

    <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
      <div class="flex flex-col font-Coda justify-center text-center mt-20">
          <ul>
          <h2 class="text-3xl font-bold mb-3">Menu</h2>
              <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
              <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
              <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
              <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl bg-main-green  text-gray-100">Ventas</a></li>
              <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reportes</a></li>
          </ul>

          <ul>
              <h2 class="text-3xl font-bold my-3">Personas</h2>
              <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Proveedores</a></li>
              <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
              <li><a href="#" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
          </ul>
      </div>
    </div>
  

    <div>
      <div class="mt-10 ml-20">
              <h1 class="font-normal font-Poppins text-main-green text-3xl">
                Ventas
              </h1>
      </div>
      
      <div class="ml-20 mt-5">
        <div class="overflow-y-scroll basis-5/6 gap-2 flex flex-wrap mt-2 h-[32rem]">
              
              <!-- card 1 -->
              @foreach ($sales as $sale)
                <div class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
                  <a href="{{route('viewSales', $sale->id)}}">

                    <div class="ml-4 mt-[20px] mr-3">
                      <!-- info cliente -->
                      <div class="border-b-2 border-dotted border-main-green columns-2 m-1">

                        <div class="font-Poppins text-secondary-green mt-2">
                          <h3 class="uppercase">Entregado</h3>
                        </div>

                        <div class="font-Coda text-main-green text-right mr-2">
                          @foreach ($clientes as $cliente)
                            @if ($sale -> cliente_id == $cliente -> id)
                              <p class="m-0">Cliente: {{$cliente -> nombre_cliente}}</p>
                            @endif
                          @endforeach
                          <p class="m-0">Fecha: {{$sale -> fecha_salida}}</p>
                        </div>

                      </div>
                      <!-- productos -->
                      <div class="flex-auto ml-1 box-border h-16 grid grid-cols-3 gap-2 mr-4 mt-3 text-secondary-green ">

                    @foreach ($productosEntregados as $productoEntregado)
                      @if ($productoEntregado -> salidas_id == $sale -> id)  
                        <div class="flex border border-black h-12">
                          <div class="flex flex-col ml-2 mt-1">
                            @foreach ($posts as $producto)
                              @if ($productoEntregado -> producto_id == $producto -> id)
                                <p class="font-Coda text-xs m-0">{{$producto -> nombre}}</p>
                                <p class="font-Coda text-xs m-0">codigo producto: {{$producto -> id}}</p>
                              @endif
                            @endforeach
                          </div>

                          <div class="flex ml-6 mt-[0.45rem]">
                            <p class="font-Poppins font-extrabold text-secondary-green text-2xl">{{$productoEntregado -> cantidad}}</p>   
                          </div>
                        </div>
                      @endif
                    @endforeach
                  </div>
                </div>

                    <div class="text-right mt-[48px] mr-7">
                      <p class="font-Coda font-black text-lg">N° {{$sale -> id}}</p>
                    </div>
                  </a>
                </div> 
              @endforeach
              
            
        </div>
      </div>
    </div>
  </section>
  <!-- --------------BODY-------------- -->

  
  

@endsection