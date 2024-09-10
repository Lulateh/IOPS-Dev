@extends('layouts.plantilla')

@section('title')
    Iops
@endsection

@section('content')
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
            <img class="w-24 ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </div>

  
    </div> 
</header>


<body class="bg-teal-100">

   <div class="mt-5 mb-5">
      <a href="#" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
      ← Volver
     </a>
   </div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-20 px-20">


 <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg shadow-lg flex flex-col h-full">
    <div class="flex justify-center mb-4">
        <img src="https://via.placeholder.com/150" alt="Imagen de usuario" class="w-60 h-50 rounded-full border-2 border-gray-200">
    </div>


    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold mb-1">Nombre de Usuario</h2>
        <p class="text-xl text-gray-600 font-Coda mb-20 ">ID: 12345</p>
        <p class="text-xl font-Coda mb-6">correo@ejemplo.com</p>
    </div>


    <div class="flex flex-col items-center mx-9">
        <a href="#" class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg mb-4 hover:bg-gray-600 w-full text-center block">Editar Perfil</a>
        <a href="#" class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg mb-4 hover:bg-gray-600 w-full text-center block">Configuración</a>
        <a href="#" class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg hover:bg-gray-600 w-full text-center block">Cerrar sesión</a>
    </div>

 </div>

    <div>

     <div class="flex justify-center mb-14">
       <a href="#" class="bg-main-green text-white w-24 h-24 rounded-full hover:bg-gray-600 flex items-center justify-center">
        ICON
       </a>
     </div>

     <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg ">

     <div class="flex flex-col space-y-4">
    
        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>

        
    </div>

     </div>

    </div>


    <div>

     <div class="flex justify-center mb-14">
       <a href="#" class="bg-main-green text-white w-24 h-24 rounded-full hover:bg-gray-600 flex items-center justify-center">
        ICON
       </a>
     </div>

     <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg ">

     <div class="flex flex-col space-y-4">
    
        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-24">
        
        </div>

        
    </div>

     </div>

    </div>

    <div>

     <div class="flex justify-center mb-14">
       <a href="#" class="bg-main-green text-white w-24 h-24 rounded-full hover:bg-gray-600 flex items-center justify-center">
        ICON
       </a>
     </div>

     <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg ">

     <div class="flex flex-col space-y-4">
    
        <div class="bg-white rounded-lg shadow-md w-full h-52">
         
        </div>


        <div class="bg-white rounded-lg shadow-md w-full h-52">
        
        </div>


        
    </div>

     </div>

    </div>
    
</div>
</body>


<!-- <footer class="bg-secondary-green py-2 ">
    <div class="columns-2">
        <div>
            <img class="w-24 ml-20" src= "{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>

        <div class="relative float-right mr-20 mt-4">
            <p class="font-Coda text-white">
                Información de contacto <br>
                invntryoperations@gmail.com
            </p>
        </div>
    </div> 
</footer>-->
@endsection