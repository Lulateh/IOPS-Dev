@extends('layouts.plantilla')

@section('title')
LogiStock - Add client
@endsection

@section('content')
<header class="bg-main-blue py-3">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}">
                <img class="w-[6rem] ml-20" src="{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
        </div>
        <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-white" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
        </div>
    </div> 
</header>

<div class="mt-8">
    <a href="{{ route('clientes.index') }}" class="ml-20 text-black font-Coda hover:underline text-2xl">  
         ← Volver
    </a>
</div>

<div class="flex justify-center">
<div class="bg-lilac bg-opacity-20 w-3/4 p-10 rounded-lg shadow-lg mt-10">
<h1 class="font-Poppins font-bold text-center text-3xl mb-10">Agregar Cliente</h1>
       
    <form action="{{ route('cliente.add') }}" method="POST" class="w-full">
        @csrf
        <div class="grid grid-cols-2 gap-2 font-Poppins">
           <div class="mr-10">
                <label class="flex items-center mb-2 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" mr-2" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                Nombre
                </label>
                <input type="text" name="nombre" class="w-[23rem] p-1 rounded-xl" style="background-color: rgb(255, 255, 255);" required>
            </div>
            <div>
                <label class="flex items-center mb-2 font-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                <path d="M7 16h2V6h5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.8 2.4A1 1 0 0 0 14 2H9v-.586a1 1 0 0 0-2 0V7H2a1 1 0 0 0-.8.4L.225 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4h5z"/>
                </svg>
                Dirección
                </label>
                <input type="text" name="direccion" class="w-[23rem] p-1 rounded-xl text-black" style="background-color: rgb(255, 255, 255);" required>
            </div>
            
            <div>
                <label class="flex items-center mb-2 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                </svg>          
                Teléfono
                </label>
                <input type="number" name="telefono" class="w-[23rem] p-1  rounded-xl" style="background-color: rgb(255, 255, 255);" required
                maxlength="10" 
                oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10)">
            </div>
            
            <div>
                <label class="flex items-center mb-2 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                </svg>
                Email
            </label>
                <input type="email" name="email" class="w-[23rem] p-1  rounded-xl text-black" style="background-color: rgb(255, 255, 255);" required>
            </div>
        </div>

<div class="flex justify-center mt-16">
                <input type="submit" class="text-white bg-main-blue cursor-pointer text-2xl px-8 py-1 rounded-xl font-Poppins" value="Agregar">
            </div>
        </form>
    </div>
</div>
@endsection