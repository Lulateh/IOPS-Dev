@extends('layouts.plantilla')

@section('title')
    LogiStock - Iniciar Sesion
@endsection

@section('content')
    
<section class="bg-main-green py-2  h-screen ">
    <div class="block ">
        <img class="mx-auto w-32" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
    </div>

    <div class="grid justify-center">
        <form action="" class="bg-white/[.17] px-16 py-8 mt-4 font-Coda rounded-xl">
            <h2 class="text-center text-3xl">Iniciar sesión</h2>

            <label for="corpMail">Correo electrónico</label><br>
            <input class="rounded-lg my-2" type="email" id="corpMail" name="corpMail" size="50"><br>

            <label for="password">Contraseña</label><br>
            <input class="rounded-lg my-2" type="password" id="password" name="password" size="50"><br>

            <div class=" columns-2 mt-4 flex">
                <a href="./registro">
                    <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="button" value="Registrar">
                </a>
                
                <input class="text-white bg-main-green px-8 py-1 ml-auto rounded-lg" type="submit" value="Iniciar sesion">
                
            </div>

            <input class="flex mt-4 mx-auto underline" type="button" value="Recuperar contraseña">
        </form>
    </div>

    <div class="flex">
        <a class="mx-auto mt-4" href="./">
            <button class="font-Coda text-white bg-secondary-green px-8 py-1  rounded-lg ">
                Volver
            </button>
        </a>
    </div>
</section>

@endsection