@extends('layouts.plantilla')

@section('title')
    LogiStock - Iniciar Sesion
@endsection

@section('content')
    
<section class="bg-main-green py-2  h-screen ">
    <div class="block ">
        <img class="mx-auto w-32" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
    </div>

    @if (session() -> has("success"))
            <div>
                {{session()->get("success")}}
            </div>
    @endif

    @if (session()->has("error"))
        <div>
            {{session()->get("error")}}
        </div>  
    @endif

    <div class="grid justify-center">
        <form method="POST" action="{{route("login.post")}}" class="bg-white/[.17] px-16 py-8 mt-4 font-Coda rounded-xl">
            @csrf
            <h2 class="text-center text-3xl">Iniciar sesión</h2>
            
            <div>
                <label for="corpMail">Correo electrónico</label><br>
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

            <div class=" columns-2 mt-4 flex">
                <a href=" {{ url('/registro') }} ">
                    <input class="text-white bg-main-green px-8 py-1 rounded-lg" type="button" value="Registrar">
                </a>
                
                <input class="text-white bg-main-green px-8 py-1 ml-auto rounded-lg" type="submit" value="Iniciar sesion">
            </div>
            <a href="{{ route('forgot.password.view') }}"class="flex mt-4 mx-auto justify-center underline text-main-green hover:text-green-500">Recuperar contraseña</a>
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