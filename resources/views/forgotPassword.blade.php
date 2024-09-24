@extends('layouts.plantilla')

@section('title')
    Confirmar Email
@endsection

@section('content')
<body class="bg-main-green bg-opacity-30">

<div class="mt-5 mb-5">
    <a href="{{ route('login') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
        ← Volver
    </a>
</div>
<h2 class="text-5xl font-Coda my-16 text-center">Confirmar Email</h2>

<form action="" method="POST">
    @csrf

    <div class="max-w-2xl mx-auto p-6 bg-main-green bg-opacity-35 rounded-lg shadow-md">

        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-black">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-main-green focus:border-main-green sm:text-sm" placeholder="Ingresa tu correo electrónico" required>
        </div>

        <div class="flex justify-center space-x-3">
            <button type="submit" class="px-4 py-2 bg-main-green text-white rounded-md hover:bg-green-700">Enviar Código</button>
        </div>
    </div>
</form>
</body>
@endsection
