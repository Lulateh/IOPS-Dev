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
<body class="bg-cream">

   <div class="mt-5 mb-5">
      <a href="#" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
      ← Volver
     </a>
   </div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 px-20">

    <div class="bg-main-green bg-opacity-25 p-6 rounded-lg">

        <h1 class=" text-4xl font-Coda text-center mb-6 mt-4">Tamaño de fuente</h1>

        <div class="border-t-8 border-dotted border-main-green w-full mt-4 mb-24"></div>

    <div class="flex items-center justify-center space-x-4 p-4 mb-32">
 
      <span class="text-xl font-Coda">A</span>

      <input type="range" class=" accent-white w-64 h-2 bg-main-green rounded-lg appearance-none cursor-pointer" />
    
      <span class="text-4xl font-Coda">A</span>
    </div>

    <div class="grid justify-center">
    <a href="#" class=" text-black text-4xl py-2 text-center inline-block mb-10 transform hover:scale-110 transition duration-300 ease-in-out">
      Regular
    </a>

    <a href="#" class=" text-black text-4xl font-bold py-2 text-center inline-block mb-10 transform hover:scale-110 transition duration-300 ease-in-out">
      Bold
    </a>
    </div>

    </div>

    <div class="bg-main-green bg-opacity-25 p-6 rounded-lg">

        <h1 class=" text-4xl font-Coda text-center mb-6 mt-4">Lenguaje</h1>

    <div class="border-t-8 border-dotted border-main-green w-full mt-4 mb-24"></div>

    <div class="grid justify-center">
    <a href="#" class=" text-black text-4xl font-bold py-2 text-center inline-block mb-20">
      Regular
    </a>

    <a href="#" class=" text-black text-4xl font-bold py-2 text-center inline-block mb-16">
      Bold
    </a>
    </div>

    </div>



</div>
   


    
</body>


@endsection