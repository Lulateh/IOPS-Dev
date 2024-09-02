@extends('layouts.plantilla')

@section('title')
    LogiStock - Registro
@endsection

@section('content')
    <section class="bg-main-green py-2  h-screen">
        <div class="block ">
            <img class="mx-auto w-32" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>
        
        @if (session() -> has("success"))
            <div>
                {{sesion() -> get("success")}}
            </div>
        @endif

        @if (session() -> has("error"))
            <div>
                {{sesion() -> get("error")}}
            </div>  
        @endif

        <div class="grid justify-center">
            <form method="POST" action="{{ route('registro.post') }}" class="bg-white/[.17] px-16 py-8 mt-4 font-Coda rounded-xl">
                @csrf
                <h2 class="text-center text-3xl">Registrarse</h2>

                <div>
                    <label for="fullName">Nombre Completo</label><br>
                    <input class="rounded-lg my-2" type="text" id="fullName" name="fullName" size="50" required><br>
                    @if ($errors -> has('fullName'))
                    <span class="">
                        {{ $errors -> first('fullName') }}
                    </span>
                @endif
                </div>

                <div>
                    <label for="corporationName">Nombre de la empresa</label><br>
                    <input class="rounded-lg my-2" type="text" id="corporationName" name="corporationName" size="50" required><br>
                    @if ($errors -> has('corporationName'))
                    <span class="">
                        {{ $errors -> first('corporationName') }}
                    </span>
                @endif
                </div>
                    
                <div>
                    <label for="email">Correo de la empresa</label><br>
                    <input class="rounded-lg my-2" type="email" id="email" name="email" size="50" required><br>
                    @if ($errors -> has('email'))
                    <span class="">
                        {{ $errors -> first('email') }}
                    </span>
                @endif
                </div>
                    
                <div>
                    <label for="password">Contraseña</label><br>
                    <input class="rounded-lg my-2" type="password" id="password" name="password" size="50" required><br>
                    @if ($errors -> has('password'))
                    <span class="">
                        {{ $errors -> first('password') }}
                    </span>
                @endif
                </div>
                    
                <!--<div>
                    <label for="safepass">Vuelva a ingresar la contraseña</label><br>
                    <input class="rounded-lg mt-2" type="password" id="safepass" name="safepass" size="50" required>
                    @if ($errors -> has('safepass'))
                    <span class="">
                        {{ $errors -> first('safepass') }}
                    </span>
                @endif
                </div>-->
                    
                <div class=" columns-2 mt-4 flex">
                    <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="submit" value="Registrar">

                    <a href=" {{ url('/login') }} " class="ml-auto">
                        <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="button" value="Iniciar sesion">
                    </a>
                    
                </div>
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