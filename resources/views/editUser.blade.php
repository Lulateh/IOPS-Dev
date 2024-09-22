
@extends('layouts.plantilla')

@section('title')
    Iops
@endsection

@section('content')
<body class="bg-main-green bg-opacity-30">

<div class="mt-5 mb-5">
      <a href="{{ route('profile') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
      ← Volver
     </a>
   </div>
<h2 class="text-5xl font-Coda my-16 text-center">Editar Perfil</h2>


<div class="max-w-2xl mx-auto p-6 bg-main-green bg-opacity-35 rounded-lg shadow-md">
  
  <!-- Foto de perfil -->
<div class="flex items-center space-x-4 mb-6">
  <img class="w-24 h-24 rounded-full object-cover" src="URL_DE_LA_FOTO_ACTUAL" alt="Foto de perfil">
  <div>
    <label class="block text-sm font-medium text-black">Cambiar Foto de Perfil</label>
    <input type="file" class="mt-1 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
  </div>
</div>

<!-- Nombre de usuario -->
<div class="mb-6">
  <label for="username" class="block text-sm font-medium text-black">Nombre de Usuario</label>
  <input type="text" id="username" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu nombre de usuario" value="NOMBRE_ACTUAL_DE_USUARIO">
</div>

<!-- Correo electrónico -->
<div class="mb-6">
  <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
  <input type="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu correo electrónico" value="EMAIL_ACTUAL">
</div>

<!-- Nombre de la empresa -->
<div class="mb-8">
  <label for="company" class="block text-sm font-medium text-black">Nombre de la Empresa</label>
  <input type="text" id="company" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa el nombre de tu empresa" value="NOMBRE_ACTUAL_DE_LA_EMPRESA">
</div>

<div class="mb-6">
<a href="{{ route('profile') }}" class="px-4 py-2 bg-main-green text-white rounded-md hover:bg-green-700">  
      Cambiar Contraseña
     </a>
</div>

  <!-- Botones -->
  <div class="flex justify-end space-x-3">
    <button class="px-4 py-2 bg-main-green text-white rounded-md hover:bg-green-700">Guardar Cambios</button>
  </div>
</div>
</body>
@endsection