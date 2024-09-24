@extends('layouts.plantilla')

@section('title')
View sales
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
<div class="mt-8 mb-6">
    <a href="{{ route('sales') }}" class="ml-20 text-secondary-green font-Coda hover:underline text-4xl">  
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