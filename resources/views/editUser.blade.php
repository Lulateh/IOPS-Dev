
@extends('layouts.plantilla')

@section('title')
    Edit profile
@endsection

@section('content')
@include('components.header')

<body>

<div class="mt-5 mb-5">
    <a href="{{ route('profile') }}" class="ml-20 text-main-green font-Coda hover:underline text-2xl">  
      ← Volver
    </a>
</div>

<h2 class="text-3xl font-Coda mb-4 text-center">Editar Perfil</h2>
<div class="px-4">
<form action="{{ route('updateUser') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="max-w-2xl mx-auto p-6 bg-lightB bg-opacity-20 rounded-lg shadow-md">
      
        <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 mb-6">
            <div class="flex justify-center sm:justify-start">
                <img id="previewImage" class="w-40 h-40 sm:w-60 sm:h-60 rounded-full object-cover" 
                     src="{{ Auth::user()->imagen_url ? asset('profile_images/' . Auth::user()->imagen_url) : 'https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y' }}" 
                     alt="Foto de perfil">
            </div>
            <div class="flex flex-col justify-center">
                <label class="block text-sm font-medium text-black mb-1">Cambiar Foto de Perfil</label>
                <input type="file" id="fileInput" name="imagen" class="text-sm file:mr-4 file:py-2 file:px-4 file:rounded file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100">
            </div>
        </div>

        
        <div class="mb-6">
            <label for="nombre" class="block text-sm font-medium text-black">Nombre de Usuario</label>
            <input type="text" id="nombre" name="nombre" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu nombre de usuario" value="{{$usuario->nombre}}">
        </div>

       
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu correo electrónico" value="{{$usuario->email}}">
        </div>

      
        <div class="columns-2 ml-20">
            <div class="mt-2.5">
                <a href="{{ route('changePassword') }}" class="px-4 py-2 bg-main-blue text-white rounded-md hover:bg-green-700">  
                Cambiar Contraseña
                </a>
            </div>

        
            <div>
                <button type="submit" class="px-4 py-2 bg-main-blue text-white rounded-md hover:bg-green-700">Guardar Cambios</button>
            </div>
        </div>
    </div>
</form>
</div>
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

@if(session('success'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Éxito!",
            text: "{{ session('success') }}",
            icon: "success",
            buttons: {
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "my-button",
                    closeModal: true,
                }
            }
        });
    </script>
@endif
@if(session('error'))
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Error!",
            text: "{{ session('error') }}",
            icon: "error",
            button: {
                text: "OK",
                value: true,
                visible: true,
                className: "my-button",
                closeModal: true,
            }
        });
    </script>
@endif
</body>

@endsection