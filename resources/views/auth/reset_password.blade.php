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

    <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data" id="reset-password-form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        
        <div class="max-w-2xl mx-auto p-6 bg-white bg-opacity-35 rounded-lg shadow-md">

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu correo electrónico" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-black">Nueva Contraseña</label>
                <ul id="password-requirements" class="text-sm text-gray-700 mb-2">
                    <li id="length" class="text-red-500">Al menos 8 caracteres</li>
                    <li id="uppercase" class="text-red-500">Al menos una letra mayúscula</li>
                    <li id="lowercase" class="text-red-500">Al menos una letra minúscula</li>
                    <li id="number" class="text-red-500">Al menos un número</li>
                    <li id="special" class="text-red-500">Al menos un carácter especial</li>
                </ul>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu nueva contraseña" required>
            </div>

            <div class="mb-8">
                <label for="password_confirmation" class="block text-sm font-medium text-black">Confirmar Nueva Contraseña</label>
                <div id="password-match" class="text-sm text-red-500 mb-2">Las contraseñas deben coincidir</div>
                <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Confirma tu nueva contraseña" required>
            </div>

            <div class="flex justify-end space-x-3">
                <button type="submit" id="submit-button" class="px-4 py-2 bg-main-blue text-white rounded-md hover:bg-green-700" disabled>Restablecer Contraseña</button>
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

    <script>
        const newPassword = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');
        const submitButton = document.getElementById('submit-button');

        const requirements = {
            length: document.getElementById('length'),
            uppercase: document.getElementById('uppercase'),
            lowercase: document.getElementById('lowercase'),
            number: document.getElementById('number'),
            special: document.getElementById('special')
        };

        newPassword.addEventListener('input', () => {
            const password = newPassword.value;

            requirements.length.classList.toggle('text-green-500', password.length >= 8);
            requirements.uppercase.classList.toggle('text-green-500', /[A-Z]/.test(password));
            requirements.lowercase.classList.toggle('text-green-500', /[a-z]/.test(password));
            requirements.number.classList.toggle('text-green-500', /\d/.test(password));
            requirements.special.classList.toggle('text-green-500', /[!@#$%^&*(),.?":{}|<>]/.test(password));

            requirements.length.classList.toggle('text-red-500', password.length < 8);
            requirements.uppercase.classList.toggle('text-red-500', !/[A-Z]/.test(password));
            requirements.lowercase.classList.toggle('text-red-500', !/[a-z]/.test(password));
            requirements.number.classList.toggle('text-red-500', !/\d/.test(password));
            requirements.special.classList.toggle('text-red-500', !/[!@#$%^&*(),.?":{}|<>]/.test(password));

            checkFormValidity();
        });

        confirmPassword.addEventListener('input', checkFormValidity);

        function checkFormValidity() {
            const passwordMatch = document.getElementById('password-match');
            const passwordsMatch = newPassword.value === confirmPassword.value;
            passwordMatch.style.display = passwordsMatch ? 'none' : 'block';

            const allRequirementsMet = Object.values(requirements).every(req => req.classList.contains('text-green-500'));
            submitButton.disabled = !(allRequirementsMet && passwordsMatch);
        }
    </script>

</body>
@endsection
