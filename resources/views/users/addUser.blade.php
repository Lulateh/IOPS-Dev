@extends('layouts.plantilla')

@section('title')
    LogiStock - Agregar usuario
@endsection

@section('content')
    <section class="bg-main-green py-2 h-screen">
        <div class="block">
            <img class="mx-auto w-32" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>

        <div class="grid justify-center">
            <form method="POST" action="{{ route('usuarios.add.post') }}" class="bg-white/[.17] px-16 py-8 mt-4 font-Coda rounded-xl">
                @csrf
                <h2 class="text-center text-3xl">Registrar Usuario</h2>

                <div>
                    <label for="name">Nombre Completo</label><br>
                    <input class="rounded-lg my-2" type="text" id="name" name="name" size="50" required><br>
                    @if ($errors->has('name'))
                        <span class="text-red-500">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div>
                    <label for="email">Correo Electrónico</label><br>
                    <input class="rounded-lg my-2" type="email" id="email" name="email" size="50" required><br>
                    @if ($errors->has('email'))
                        <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div>
                    <label for="password">Contraseña</label><br>
                    <input class="rounded-lg my-2" type="password" id="password" name="password" size="50" required><br>
                    @if ($errors->has('password'))
                        <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div>
                    <label for="role">Rol del Usuario</label><br>
                    <select class="rounded-lg my-2" id="role" name="role" required>
                        <option value="admin">Administrador</option>
                        <option value="colaborator">Colaborador</option>
                        <option value="supervisor">Supervisor</option>
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-red-500">{{ $errors->first('role') }}</span>
                    @endif
                </div>

                <div class=" mt-4 flex">
                    <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="submit" value="Registrar">

                   
                </div>
            </form>
        </div>

        <div class="flex">
            <a class="mx-auto mt-4" href="./">
                <button class="font-Coda text-white bg-secondary-green px-8 py-1 rounded-lg">
                    Volver
                </button>
            </a>
        </div>
    </section>
@endsection