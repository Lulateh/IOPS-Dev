@extends('layouts.plantilla')

@section('title')
    Safety Page
@endsection

@section('content')
    <header class="bg-main-blue py-2">
        <div class="flex items-center justify-between px-4 md:px-20">

            <a class="flex items-center" href="./">
                <img src="{{ asset('icons/backArrow.svg') }}" alt="">
                <p class="font-Coda text-white text-lg md:text-xl ml-2">Volver</p>
            </a>

            <img class="w-16 md:w-24" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>
    </header>

    <section class="bg-white min-h-screen px-4 md:px-20 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

            <div class="flex justify-center">
                <img class="w-3/4 md:w-full" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="">
            </div>

            <div class="space-y-6">
                <p class="font-medium font-Poppins text-xl md:text-2xl">
                    Si deseas probar nuestra aplicación, por favor brinda tu información de contacto y nos pondremos en contacto contigo.
                </p>

                <!-- Formulario de contacto -->
                <form action="" method="" class="space-y-4">
                    @csrf
                    <div>
                        <label class="font-Poppins text-lg" for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>

                    <div>
                        <label class="font-Poppins text-lg" for="name">Teléfono</label>
                        <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>

                    <div>
                        <label class="font-Poppins text-lg" for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
                    </div>

                    <div>
                        <label class="font-Poppins text-lg" for="message">Mensaje</label>
                        <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-lg" rows="4"></textarea>
                    </div>

                    <button type="submit" class="text-white bg-main-blue px-8 py-2 rounded-lg font-Poppins">
                        Enviar
                    </button> 
                </form>
            </div>
        </div>
    </section>

@endsection