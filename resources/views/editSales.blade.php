@extends('layouts.plantilla')

@section('title')
Edit Sales
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
    <a href="{{ route('viewSales') }}" class="ml-20 text-secondary-green font-Coda hover:underline text-4xl">  
    ← Volver
   </a>
 </div>
<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<body class="bg-card-bg">

<div class="flex-container flex items-end justify-center">

    <div class="inline-block align-bottom text-left overflow-hidden mt-30"> 

        <div class="text-center mt-2"> 

            <h2 class="font-Poppins font-medium text-3xl  mb-8">Modificar reserva</h2>

            <div class="flex flex-row mt-4"> 

                <div class="bg-main-green bg-opacity-30 rounded-lg w-[36rem] mr-16">

                    <div class="m-8 overflow-y-scroll h-[25.4rem]"> 

                      <div class="flex">

                        <div class="mt-2"> 
                          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg>
                        </div>


                        <div class="flex border border-black h-14 w-[24] mt-1 ml-4 m-2">

                            <div class="flex flex-col ml-10 mt-2">
        
                              <p class="font-Coda text-sm m-0">nombre producto</p>
                              <p class="font-Coda text-sm m-0">marca producto</p>
        
                            </div>
        
                            <div class="flex ml-[14rem] mr-6 mt-[0.76rem]">
        
                              <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   
        
                            </div>

                        </div> 

                      </div>

                    </div>

                </div>
                
                <div class="flex-col">

                    <div> 
                      <div class="bg-main-green bg-opacity-30 rounded-lg p-2 mb-6 font-Coda font-semibold columns-2 w-[36rem]">
    
                        <div class="flex-col text-lg text-left mt-3 ml-10">
                          <p>Cliente: Juanito</p>
                          <p>Contacto: 0000000</p>
                          <p>Fecha de entrega: 03/09/24</p>
                        </div>
    
                        <button onclick="showModalEditar()" class="align-end bg-main-green p-2 ml-32 m-4 rounded-lg">
                          <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                            <path d="M56.4363 5.56418C56.7973 5.92622 57 6.41659 57 6.9278C57 7.43901 56.7973 7.92938 56.4363 8.29142L52.4068 12.3244L44.6799 4.59844L48.7094 0.565511C49.0717 0.203415 49.5629 0 50.0752 0C50.5874 0 51.0786 0.203415 51.4409 0.565511L56.4363 5.56031V5.56418ZM49.6753 15.0516L41.9484 7.32568L15.6267 33.6479C15.414 33.8604 15.254 34.1197 15.1592 34.405L12.0491 43.7302C11.9927 43.9002 11.9847 44.0825 12.026 44.2568C12.0673 44.4311 12.1562 44.5905 12.2829 44.7171C12.4096 44.8438 12.569 44.9327 12.7433 44.974C12.9176 45.0153 13.1 45.0073 13.27 44.9509L22.5964 41.8412C22.8813 41.7476 23.1406 41.5889 23.3536 41.3776L49.6753 15.0516Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 50.2143C0 51.7488 0.609565 53.2204 1.6946 54.3054C2.77963 55.3904 4.25125 56 5.78571 56H48.2143C49.7488 56 51.2204 55.3904 52.3054 54.3054C53.3904 53.2204 54 51.7488 54 50.2143V27.0714C54 26.5599 53.7968 26.0694 53.4351 25.7077C53.0735 25.346 52.5829 25.1429 52.0714 25.1429C51.5599 25.1429 51.0694 25.346 50.7077 25.7077C50.346 26.0694 50.1429 26.5599 50.1429 27.0714V50.2143C50.1429 50.7258 49.9397 51.2163 49.578 51.578C49.2163 51.9397 48.7258 52.1429 48.2143 52.1429H5.78571C5.27423 52.1429 4.78369 51.9397 4.42201 51.578C4.06033 51.2163 3.85714 50.7258 3.85714 50.2143V7.78571C3.85714 7.27423 4.06033 6.78369 4.42201 6.42201C4.78369 6.06033 5.27423 5.85714 5.78571 5.85714H30.8571C31.3686 5.85714 31.8592 5.65395 32.2209 5.29228C32.5825 4.9306 32.7857 4.44006 32.7857 3.92857C32.7857 3.41708 32.5825 2.92654 32.2209 2.56487C31.8592 2.20319 31.3686 2 30.8571 2H5.78571C4.25125 2 2.77963 2.60956 1.6946 3.6946C0.609565 4.77963 0 6.25125 0 7.78571V50.2143Z" fill="white"/>
                          </svg>
                        </button>
    
                      </div>
    
                      <div class="bg-main-green bg-opacity-30 rounded-lg p-10 text-left"> 
    
                        <label for="productName" class="font-Coda font-semibold">Nombre del producto</label> <br>
                        <input class="rounded-lg mt-1 mb-2 bg-white w-[31rem]" type="text" id="productName" name="productName" required><br>

                        <label for="productMarca" class="font-Coda font-semibold">Marca del producto</label> <br>
                        <input class="rounded-lg mt-1 mb-2 bg-white w-[31rem]" type="text" id="productMarca" name="productMarca" required><br>
    
                        <label for="productCant" class="font-Coda font-semibold">Cantidad del producto</label> <br>
                        <input class="rounded-lg mt-1 mb-2 bg-white w-[31rem]" type="number" id="productCant" name="productCant" required><br>
    
                        <button class="text-white bg-main-green mt-4 ml-40 px-4 py-1 rounded-lg font-Poppins">
                          Agregar producto
                        </button>
    
                      </div>
    
                    </div>
    
                </div>

            </div>

            <button class="text-white bg-main-green text-lg mt-8 mr-6 px-4 py-1 rounded-lg font-Poppins">
                Agregar reserva
              </button>

        </div>

    </div>

</div>

</body>
<!-- --------------BODY-------------- -->

@endsection