@extends('layouts.plantilla')

@section('title')
    Restablecer Contraseña
@endsection

@section('content')
<body class="bg-green">

    <div class="mt-20 mb-5">
        <a href="{{ route('profile') }}" class="ml-20 text-black font-Coda hover:underline text-4xl">
            ← Volver
        </a>
    </div>

    <h2 class="text-5xl font-Coda my-16 text-center">Restablecer Contraseña</h2>

    <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        
        <div class="max-w-2xl mx-auto p-6 bg-white bg-opacity-35 rounded-lg shadow-md">

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu correo electrónico" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-black">Nueva Contraseña</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" required>
            </div>

            <div class="mb-8">
                <label for="password_confirmation" class="block text-sm font-medium text-black">Confirmar Nueva Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" required>
            </div>

            <div class="flex justify-end space-x-3">
                <button type="submit" class="px-4 py-2 bg-main-blue text-white rounded-md hover:bg-green-700">Restablecer Contraseña</button>
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
                    window.location.href = "{{ route('login') }}";
                }
            });
        </script>
    @endif

    @if(session('error'))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script>
            swal({
                title: "Error",
                text: "{{ session('error') }}",
                icon: "error",
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

</body>
@endsection
