@extends('layouts.plantilla')

@section('title')
    LogiStock - Recuperar Contraseña
@endsection

@section('content')
<body class="bg-main-green bg-opacity-30">

<div class="mt-5 mb-5">
    <a href="{{ route('login') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
        ← Volver
    </a>
</div>
<h2 class="text-5xl font-Coda my-16 text-center">Reestablecer Contraseña</h2>

<form action="{{ route('checkEmail') }}" method="POST">
    @csrf

    <div class="max-w-2xl mx-auto p-6 bg-main-green bg-opacity-35 rounded-lg shadow-md">
    <h3 class="text-2xl font-Coda mb-4 text-center">Ingresa tu correo electrónico</h3>
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu correo electrónico" required>
        </div>

        <div class="flex justify-center space-x-3">
            <button type="submit" class="px-4 py-2 bg-main-green text-white rounded-md hover:bg-green-700">Enviar Código</button>
        </div>
    </div>
</form>
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
@if(session('success'))
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
                    window.location.href = "{{ route('login') }}"; 
                }
            });
        </script>
    @endif

</body>
@endsection
