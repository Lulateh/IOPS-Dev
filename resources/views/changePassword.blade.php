@extends('layouts.plantilla')

@section('title')
    Cambiar Contraseña
@endsection

@section('content')
<header class="bg-main-blue py-2">
    <div class="columns-2">
        <div>
            <a href="{{ route('home') }}">
                <img class="w-[6rem] ml-20" src="{{ asset('img/LogiStockIconWhite.png') }}" alt="Logotipo">
            </a>
        </div>
    </div> 
</header>
<body>

<div class="mt-5 mb-5">
    <a href="{{ route('editUser') }}" class="ml-20 text-main-green font-Coda hover:underline text-2xl">  
        ← Volver
    </a>
</div>
<h2 class="text-4xl font-Coda my-5 text-center">Cambiar Contraseña</h2>

<form action="{{ route('updatePassword') }}" method="POST" id="password-form">
    @csrf

    <div class="max-w-2xl mx-auto p-6 bg-lilac bg-opacity-20 rounded-lg shadow-md">
        
        <div class="mb-6">
            <label for="current_password" class="block text-sm font-medium text-black">Contraseña Actual</label>
            <input type="password" id="current_password" name="current_password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu contraseña actual" required>
        </div>

        <div class="mb-6">
            <label for="new_password" class="block text-sm font-medium text-black">Nueva Contraseña</label>
            <ul id="password-requirements" class="text-sm text-gray-700 mb-2">
                <li id="length" class="text-red-500">Al menos 8 caracteres</li>
                <li id="uppercase" class="text-red-500">Al menos una letra mayúscula</li>
                <li id="lowercase" class="text-red-500">Al menos una letra minúscula</li>
                <li id="number" class="text-red-500">Al menos un número</li>
                <li id="special" class="text-red-500">Al menos un carácter especial</li>
            </ul>
            <input type="password" id="new_password" name="new_password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu nueva contraseña" required>
        </div>

        <div class="mb-6">
            <label for="confirm_password" class="block text-sm font-medium text-black">Confirmar Nueva Contraseña</label>
            <div id="password-match" class="text-sm text-red-500 mb-2">Las contraseñas deben coincidir</div>
            <input type="password" id="confirm_password" name="new_password_confirmation" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Confirma tu nueva contraseña" required>
        </div>

        <div class="flex justify-end space-x-3">
            <button type="submit" id="submit-button" class="px-4 py-2 bg-main-blue text-white rounded-md hover:bg-green-700" disabled>Cambiar Contraseña</button>
        </div>
    </div>
</form>
</div>
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
            },
            closeOnClickOutside: true
        }).then((value) => {
            if (value) {
                document.getElementById('logout-form').submit(); 
            } else {
                document.getElementById('logout-form').submit(); 
            }
        });
    </script>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
@endif
@if($errors->any())
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Error!",
            text: "{{ $errors->first() }}", 
            icon: "error",
            buttons: {
                confirm: {
                    text: "OK",
                    value: true,
                    visible: true,
                    className: "my-button",
                    closeModal: true,
                }
            },
            closeOnClickOutside: true
        });
    </script>
@endif

<script>
    const newPassword = document.getElementById('new_password');
    const confirmPassword = document.getElementById('confirm_password');
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