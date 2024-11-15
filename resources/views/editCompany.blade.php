@extends('layouts.plantilla')

@section('title')
    Editar empresa
@endsection


@section('content')
@if(Auth::user()->rol == 'administrador')

    <!-- --------------HEADER-------------- -->
    @include('components.header')
    <!-- --------------HEADER-------------- -->

    <!-- --------------BODY-------------- -->
    <body>

<div class="mt-5 mb-5">
    <a href="{{ route('profile') }}" class="ml-20 text-main-green font-Coda hover:underline text-2xl">  
      ← Volver
    </a>
</div>
<div class="px-4">

<form method="POST" action="{{ route('company.update', $existingCompany->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="max-w-2xl mx-auto p-6 bg-lightB bg-opacity-20 rounded-lg shadow-md">
        <h2 class="text-center font-Poppins font-bold text-3xl mb-4">EDITAR EMPRESA</h2>
        
            <div class="flex flex-col mb-4 items-center">
                <img id="previewImage" class="bg-white w-40 h-40 rounded-full object-cover" 
                    src="{{ asset('company_images/' . $existingCompany->logo) }}" alt="Foto de perfil">

                <label class="font-bold mt-2">Cambiar Foto de Perfil</label>
                <input type="file" id="fileInput" name="imagen" class="mt-1 text-sm text-black file:mr-4 file:py-2 file:px-4 file:rounded file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100"> 
            </div>

            <div class="mb-4">
                <label class="font-bold" for="companyName">Nombre de la empresa</label><br>
                <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" type="text" id="companyName" name="companyName" value="{{ $existingCompany->nombre }}" required><br>
            </div>

            <div class="mb-4">
                <label class="font-bold" for="companyEmail">Correo de la empresa</label><br>
                <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" type="email" id="companyEmail" name="companyEmail" value="{{ $existingCompany->correo }}" required><br>
            </div>
                
            <div class="mb-4">
                <label class="font-bold" for="companyPhone">Teléfono de la empresa</label><br>
                <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" type="text" id="companyPhone" name="companyPhone" value="{{ $existingCompany->telefono }}" required><br>
            </div>
                
            <div class="mb-4">
                <label class="font-bold" for="companyAddress">Dirección de la empresa</label><br>
                <input class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" type="text" id="companyAddress" name="companyAddress" value="{{ $existingCompany->direccion }}" required><br>
            </div>

            <div class="mt-4 text-center md:text-right">
                <input type="submit" class="text-white bg-main-blue px-6 py-2 rounded-lg" value="ACTUALIZAR INFORMACIÓN">
            </div>


    </div>
</form>


</div>

@else
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center p-5 bg-white rounded shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold text-red-600">Acceso Denegado</h1>
        <p class="mt-4 text-gray-700">No tienes permiso para acceder a esta sección.</p>
        <a href="{{ route('home') }}" class="mt-6 inline-block px-4 py-2 bg-main-green text-white rounded hover:bg-green-600">Regresar al Inicio</a>
    </div>
</body>
@endif
</body>
<!-- --------------BODY-------------- -->

<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            document.getElementById('previewImage').src = e.target.result;
        }
        
        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection