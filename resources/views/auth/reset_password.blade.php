<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <style>
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Restablecer Contraseña</h1>

    <!-- Mostrar mensaje de error general -->
    @if (session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
    @endif

    <!-- Mostrar mensaje de éxito -->
    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Mostrar los errores de validación -->
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <div>
            <label for="email">Correo Electrónico</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="password">Nueva Contraseña</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmar Nueva Contraseña</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Restablecer Contraseña</button>
    </form>
</body>
</html>
