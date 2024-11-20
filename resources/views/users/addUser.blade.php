@extends('layouts.plantilla')

@section('title')
    LogiStock - Agregar usuario
@endsection

@section('content')
@if(Auth::user()->rol == 'administrador')
<section class="bg-main-blue py-2 h-screen lg:h-full">
    <div class="mt-8">
        <a href="{{route('users.index')}}" class="ml-5 lg:ml-20 text-white font-Coda hover:underline text-2xl">  
             ← Volver
        </a>
    </div>

    <div class="block">
        <img class="mx-auto w-32 lg:w-40" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
    </div>

    <div class="grid justify-items-center mt-5">
        
        <form method="POST" action="{{ route('users.add') }}" class="bg-white/[.17] lg:px-16 py-8 mt-4 font-Coda rounded-xl">
            @csrf
            <h2 class="text-center text-3xl my-5">Registrar Usuario</h2>

            <div class=" ml-12">
            <div>
                <label for="name" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>Nombre Completo
                </label>
                <input class="rounded-lg my-2 lg:w-[25.9rem]" type="text" id="nombre" name="nombre"  required><br>
                @if ($errors->has('nombre'))
                    <span class="text-red-500">{{ $errors->first('nombre') }}</span>
                @endif
            </div>

            <div>
                <label for="email" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                        <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                    </svg>Correo Electrónico
                </label>
                <input class="rounded-lg my-2 lg:w-[25.9rem]" type="email" id="email" name="email" required><br>
                @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div>
                <label for="password" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>Contraseña
                </label>
                <input class="rounded-lg my-2 lg:w-[25.9rem]" type="password" id="password" name="password"required>
                <ul id="password-requirements" class="text-sm text-white">
                    <li id="length" class="text-red-500">Mínimo 8 caracteres</li>
                    <li id="uppercase" class="text-red-500">Al menos una letra mayúscula</li>
                    <li id="number" class="text-red-500">Al menos un número</li>
                    <li id="special" class="text-red-500">Al menos un carácter especial (!@#$%^&*)</li>
                </ul>
                @if ($errors->has('password'))
                    <span class="text-red-500">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div>
                <label for="password_confirmation" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>Confirmar Contraseña
                </label>
                <input class="rounded-lg my-2 lg:w-[25.9rem]" type="password" id="password_confirmation" name="password_confirmation" required>
                <span id="password-match" class="text-sm block mt-2"></span>
            </div>

            <div>
                <label for="role">Rol del Usuario</label><br>
                <select class="rounded-lg my-2 lg:w-[25.9rem]" style="text-align: center" id="rol" name="rol" required>
                    <option value="administrador">Administrador</option>
                    <option value="colaborador">Colaborador</option>
                    <option value="supervisor">Supervisor</option>
                </select>
            </div>

            <div class="mt-4 ml-10 lg:ml-[9rem]">
                <input id="submit-btn" class="text-white bg-main-blue px-8 py-1 rounded-lg cursor-not-allowed" type="submit" value="Registrar" disabled>
            </div>
        </form>
        </div>
    </div>
</section>

<script>
    const password = document.getElementById('password');
    const passwordConfirmation = document.getElementById('password_confirmation');
    const passwordMatch = document.getElementById('password-match');
    const requirements = {
        length: document.getElementById('length'),
        uppercase: document.getElementById('uppercase'),
        number: document.getElementById('number'),
        special: document.getElementById('special')
    };
    const submitButton = document.getElementById('submit-btn');

    function validatePasswordStrength() {
        const value = password.value;


        requirements.length.classList.toggle('text-green-500', value.length >= 8);
        requirements.length.classList.toggle('text-red-500', value.length < 8);


        requirements.uppercase.classList.toggle('text-green-500', /[A-Z]/.test(value));
        requirements.uppercase.classList.toggle('text-red-500', !/[A-Z]/.test(value));

        requirements.number.classList.toggle('text-green-500', /\d/.test(value));
        requirements.number.classList.toggle('text-red-500', !/\d/.test(value));

        requirements.special.classList.toggle('text-green-500', /[!@#$%^&*]/.test(value));
        requirements.special.classList.toggle('text-red-500', !/[!@#$%^&*]/.test(value));
    }

    function validatePasswordsMatch() {
        if (password.value === passwordConfirmation.value && password.value !== "") {
            passwordMatch.textContent = "✔ Las contraseñas coinciden";
            passwordMatch.style.color = "green";
        } else {
            passwordMatch.textContent = "✘ Las contraseñas no coinciden";
            passwordMatch.style.color = "red";
        }
    }

    function validateForm() {
        const isPasswordValid = password.value.length >= 8 && /[A-Z]/.test(password.value) && /\d/.test(password.value) && /[!@#$%^&*]/.test(password.value);
        const isPasswordMatch = password.value === passwordConfirmation.value;
        if (isPasswordValid && isPasswordMatch) {
            submitButton.disabled = false;
            submitButton.classList.remove('cursor-not-allowed');
            submitButton.classList.add('cursor-pointer');
        } else {
            submitButton.disabled = true;
            submitButton.classList.add('cursor-not-allowed');
            submitButton.classList.remove('cursor-pointer');
        }
    }

    password.addEventListener('input', () => {
        validatePasswordStrength();
        validatePasswordsMatch();
        validateForm();
    });

    passwordConfirmation.addEventListener('input', () => {
        validatePasswordsMatch();
        validateForm();
    });
</script>

    @else
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Denegado</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center p-5 bg-white rounded shadow-md">
        <h1 class="text-2xl font-bold text-red-600">Acceso Denegado</h1>
        <p class="mt-4 text-gray-700">No tienes permiso para acceder a esta sección.</p>
        <a href="{{ route('home') }}" class="mt-6 inline-block px-4 py-2 bg-main-green text-white rounded hover:bg-green-600">Regresar al Inicio</a>
    </div>
</body>
@endif
@endsection