@extends('layouts.plantilla')

@section('title')
    Iops
@endsection

@section('content')
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
        <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </a>
        </div>

  
    </div> 
</header>
<body class="bg-cream">

   <div class="mt-5 mb-5">
      <a href="{{ route('profile') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
      ← Volver
     </a>
   </div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-20 px-5 sm:px-10 lg:px-20">

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

    <div class="border-t-8 border-dotted border-main-green w-full mt-4 mb-36"></div>

    <div class="flex flex-col items-center justify-center space-y-4 mb-10">

  <label class="flex items-center space-x-2 cursor-pointer mb-24">
    <input type="radio" name="option" value="1" checked class="form-radio text-green-600 border-gray-300 rounded-full focus:ring-green-500">
    <span class="text-black font-Coda text-4xl">Español</span>
  </label>
  

  <label class="flex items-center space-x-2 cursor-pointer  ">
    <input type="radio" name="option" value="2" class="form-radio text-green-600 border-gray-300 rounded-full focus:ring-green-500">
    <span class="text-text-black font-Coda text-4xl ">English</span>
  </label>
</div>


    </div>





<div class="bg-main-green bg-opacity-25 p-6 rounded-lg">

<h1 class=" text-4xl font-Coda text-center mb-6 mt-4">Tema</h1>

<div class="border-t-8 border-dotted border-main-green w-full mt-4 mb-10"></div>

<div class="flex flex-col items-center">
 
    <div class="bg-gray-200 shadow-md rounded-lg p-4 mb-10 inline-flex items-center">
        <label class="flex items-center space-x-10 cursor-pointer">
            <input type="radio" name="Tema" value="1" checked class="form-radio text-green-600 border-gray-300 rounded-full focus:ring-green-500">
            <div class="flex flex-wrap gap-4">

                <div class="w-12 h-12 bg-blue-500 rounded-full"></div>
                <div class="w-12 h-12 bg-green-500 rounded-full"></div>
                <div class="w-12 h-12 bg-red-500 rounded-full"></div>
                <div class="w-12 h-12 bg-yellow-500 rounded-full"></div>
                <div class="w-12 h-12 bg-purple-500 rounded-full"></div>
            </div>
        </label>
    </div>


    <div class="bg-gray-200 shadow-md rounded-lg p-4 mb-10 inline-flex items-center">
        <label class="flex items-center space-x-10 cursor-pointer">
            <input type="radio" name="Tema" value="1" class="form-radio text-green-600 border-gray-300 rounded-full focus:ring-green-500">
            <div class="flex flex-wrap gap-4">

                <div class="w-12 h-12 bg-blue-500 rounded-full"></div>
                <div class="w-12 h-12 bg-green-500 rounded-full"></div>
                <div class="w-12 h-12 bg-red-500 rounded-full"></div>
                <div class="w-12 h-12 bg-yellow-500 rounded-full"></div>
                <div class="w-12 h-12 bg-purple-500 rounded-full"></div>
            </div>
        </label>
    </div>


    <div class="bg-gray-200 shadow-md rounded-lg p-4 mb-10 inline-flex items-center">
        <label class="flex items-center space-x-10 cursor-pointer">
            <input type="radio" name="Tema" value="1" class="form-radio text-green-600 border-gray-300 rounded-full focus:ring-green-500">
            <div class="flex flex-wrap gap-4">

                <div class="w-12 h-12 bg-blue-500 rounded-full"></div>
                <div class="w-12 h-12 bg-green-500 rounded-full"></div>
                <div class="w-12 h-12 bg-red-500 rounded-full"></div>
                <div class="w-12 h-12 bg-yellow-500 rounded-full"></div>
                <div class="w-12 h-12 bg-purple-500 rounded-full"></div>
            </div>
        </label>
    </div>


    <div class="bg-gray-200 shadow-md rounded-lg p-4 mb-10 inline-flex items-center">
        <label class="flex items-center space-x-10 cursor-pointer">
            <input type="radio" name="Tema" value="1" class="form-radio text-green-600 border-gray-300 rounded-full focus:ring-green-500">
            <div class="flex flex-wrap gap-4">

                <div class="w-12 h-12 bg-blue-500 rounded-full"></div>
                <div class="w-12 h-12 bg-green-500 rounded-full"></div>
                <div class="w-12 h-12 bg-red-500 rounded-full"></div>
                <div class="w-12 h-12 bg-yellow-500 rounded-full"></div>
                <div class="w-12 h-12 bg-purple-500 rounded-full"></div>
            </div>
        </label>
    </div>
</div>


</div>









</div>   
</body>


@endsection