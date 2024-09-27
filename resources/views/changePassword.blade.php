@extends('layouts.plantilla')

@section('title')
    Cambiar Contraseña
@endsection

@section('content')
<body class="bg-main-green bg-opacity-30">

<div class="mt-5 mb-5">
    <a href="{{ route('editUser') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
        ← Volver
    </a>
</div>
<h2 class="text-5xl font-Coda my-16 text-center">Cambiar Contraseña</h2>

<form action="{{ route('updatePassword') }}" method="POST">
    @csrf


    <div class="max-w-2xl mx-auto p-6 bg-main-green bg-opacity-35 rounded-lg shadow-md">
        

        <div class="mb-6">
            <label for="current_password" class="block text-sm font-medium text-black">Contraseña Actual</label>
            <input type="password" id="current_password" name="current_password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu contraseña actual" required>
        </div>


        <div class="mb-6">
            <label for="new_password" class="block text-sm font-medium text-black">Nueva Contraseña</label>
            <input type="password" id="new_password" name="new_password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu nueva contraseña" required>
        </div>


        <div class="mb-6">
            <label for="confirm_password" class="block text-sm font-medium text-black">Confirmar Nueva Contraseña</label>
            <input type="password" id="confirm_password" name="new_password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Confirma tu nueva contraseña" required>
        </div>

        <div class="flex justify-end space-x-3">
            <button type="submit" class="px-4 py-2 bg-main-green text-white rounded-md hover:bg-green-700">Cambiar Contraseña</button>
        </div>
    </div>
</form>
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
        }).then((value) => {
            if (value) {
                window.location.href = "{{ route('editUser') }}"; 
            }
        });
    </script>
@endif

</body>
@endsection