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
                      <p class="m-0">Cliente: Juanito Cruz</p>
                      <p class="m-0">Contacto: 0000 0000</p>
                      <p class="m-0">Fecha de entrega: 03/09/24<p>
                    </div>
      
                    <div class="text-secondary-green flex text-3xl ml-64 font-Poppins font-medium"> 
                      <h2 class="my-4">N° 1234</h2>
                    </div>
                    
                </div>
                
                <div class="columns-2 mr-16 mb-2"> 
                    <div> 
                        <h3 class="font-Poppins font-medium">Estado de la reserva:<h3>
                    </div>

                    <div> 
                        <button class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">ENTREGADO</button>
                        <button class="bg-secondary-green border-2 border-secondary-green rounded-lg px-3 text-white font-Poppins font-bold text-sm">RESERVADO</button>
                        <button class="bg-white border-2 border-secondary-green rounded-lg px-3 text-secondary-green font-Poppins font-bold text-sm">CANCELADO</button>
                    </div>
                </div>

                <div class="flex flex-row ml-16">
                    <div class="overflow-auto rounded-lg h-80 m-2  w-[50rem]">

                        <div>
        
                          <div class="grid grid-cols-2 gap-[0.01rem] mb-6 mr-0">
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
        
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
                            
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
                            
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
                            
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
                            
                            <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
                            
                              <div class="flex border border-secondary-green h-14 mt-1 ml-2 m-2">
                              <div class="flex flex-col ml-6 mt-2">
        
                                <p class="text-secondary-green font-Coda text-sm m-0">nombre producto</p>
                                <p class="text-secondary-green font-Coda text-sm m-0">codigo producto</p>
        
                              </div>
        
                              <div class="flex ml-[10rem] mt-[0.76rem]">
        
                                <p class="text-secondary-green font-Poppins font-extrabold text-2xl">23</p>   
        
                              </div>
                            </div>
                            
                          </div>
        
                          
                        </div>
                        
                      </div>
                
                
                </div>
                
                <div class="my-6">
                    <a href="{{ route('editSales') }}">
                        <button  class="text-white bg-secondary-green px-8 py-1 rounded-lg font-Poppins mr-2">Editar</button>
                    <a>
                  </div>

            </div>
        </div>
    </div>
</body>
<!-- --------------BODY-------------- -->

@endsection