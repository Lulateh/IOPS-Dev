@extends('layouts.plantilla')

@section('title')
    LogiStock - Iniciar Sesion
@endsection

@section('content')
    
<section class="bg-green py-4 min-h-screen">

    <div class="mt-10">
        <a href="./" class="ml-20 text-white font-Coda hover:underline text-4xl sm:text-2xl md:text-3xl">  
            ← Volver
        </a>
    </div>

        <div class="block ">
            <img class="mx-auto w-24 sm:w-32 md:w-40" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
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

    <div class="grid justify-center mt-10">
        <form method="POST" action="{{route("login.post")}}" class="bg-white/[.17] px-8 sm:px-12 md:px-16 py-6 sm:py-8 mt-4 font-Coda rounded-xl text-black w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
            @csrf
            <h2 class="text-center text-3xl mb-10">Iniciar sesión</h2>
            
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

            <div class="mt-6 ml-[7.7rem]">
                <input class="text-white bg-main-blue px-8 py-1 ml-auto rounded-lg" type="submit" value="Iniciar sesion">
            </div>
            <a href="{{ route('forgot.password.view') }}"class="flex mt-4 mx-auto justify-center underline text-black hover:text-green-500">Recuperar contraseña</a>
        </form>
    </div>
    
</section>

@endsection