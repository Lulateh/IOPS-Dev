@extends('layouts.plantilla')

@section('title')
    Sales
@endsection

@section('content')
  <!-- --------------HEADER-------------- -->
  @include('components.headerTables')
  <!-- --------------HEADER-------------- -->

  <!-- --------------BODY-------------- -->
  <section class="md:ml-[15rem] md:mr-[1rem]">

    <div>
    <div class="flex columns-2 mt-10 ml-24 ">
            <h1 class="font-normal font-Coda text-main-blue text-3xl md:text-4xl">
                Salidas
            </h1>

            
            
        </div>
      
      <div class="ml-20 mt-5">
        <div class="overflow-y-scroll basis-5/6 gap-2 flex flex-wrap mt-2 lg:h-[32rem] lg:w-[100%] md:h-[50rem] md:w-[25rem]">
              

              @foreach ($sales as $sale)
                <div class="w-[30rem] h-60  bg-lightB bg-opacity-20 mr-4 rounded-lg shadow-lg border hover:border-main-blue">
                  <a href="{{route('viewSales', $sale->id)}}">

                    <div class="ml-4 mt-[20px] mr-3">
                      <div class="border-b-2 border-dotted border-black columns-2 m-1">
                        <div class="font-Poppins text-black mt-2">
                          <h3 class="uppercase">Entregado</h3>
                        </div>

                        <div class="font-Coda text-black text-right mr-2">
                          @foreach ($clientes as $cliente)
                            @if ($sale -> cliente_id == $cliente -> id)
                              <p class="m-0">Cliente: {{$cliente -> nombre_cliente}}</p>
                            @endif
                          @endforeach
                          <p class="m-0">Fecha: {{$sale -> fecha_salida}}</p>
                        </div>
                      </div>


                    <div class="flex">

                    @foreach ($productosEntregados as $productoEntregado)
                      @if ($productoEntregado -> salidas_id == $sale -> id)  
                        <div class="flex  m-1 box-border h-16 gap-2 mr-4 mt-3  text-secondary-green ">
                          <div class="flex border border-black h-12 px-2">
                            <div class="flex flex-col ml-2 mt-1">
                              @foreach ($posts as $producto)
                                @if ($productoEntregado -> producto_id == $producto -> id)
                                  <p class="font-Coda text-xs m-0">{{$producto -> nombre}}</p>
                                  <p class="font-Coda text-xs m-0">codigo producto: {{$producto -> id}}</p>
                                @endif
                              @endforeach
                            </div>
                            <div class="flex ml-6 mt-[0.45rem]">
                              <p class="font-Poppins font-extrabold text-black text-2xl">{{$productoEntregado -> cantidad}}</p>   
                            </div>
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
  <script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuToggle = document.getElementById("menu-toggle");
        const sidebar = document.getElementById("sidebar");

        menuToggle.addEventListener("click", () => {
            sidebar.classList.toggle("hidden");
        });
    });
</script>
  
  

@endsection