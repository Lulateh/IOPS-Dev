@extends('layouts.plantilla')

@section('title')
    Safety Page
@endsection

@section('content')
    <header class="bg-main-green py-2">
        <div class="columns-2">
            <div class="ml-20 mt-4 flex">
                <img src="{{ asset('icons/backArrow.svg') }}" alt="">
                <p class="font-Coda text-white text-xl">Regresar</p>
            </div>

            <div class="relative float-right mr-20">
                <img class="w-24" src= "{{ asset('img/IopsIconWhite.png') }}" alt="">
            </div>
        </div>
    </header>

    <section class="bg-cream h-screen">
        <div class="columns-2 pt-36">
            <div class="ml-20">
                <img class=" size-11/12" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="">
            </div>

            <div class="inline-flex flex-col mt-36">
                <p class="mr-20 font-Coda text-xl">
                    Para garantizar tu seguridad y privacidad LogiStock requiere que inicies sesión o te crees una cuenta, de esta manera se te brindara un servicio más seguro y detallado.
                </p>

                <div class="mt-4 self-center">
                    <a href="./registro">
                        <button class="text-white bg-main-green px-8 mr-6 py-1 rounded-lg font-Coda">
                            Registrarse
                        </button>
                    </a>

                    <a href="./login">
                        <button class="text-white bg-secondary-green ml-6 px-8 py-1 rounded-lg font-Coda">
                            Iniciar sesion
                        </button>  
                    </a>                  
                </div>
            </div>
        </div>
    </section>
@endsection