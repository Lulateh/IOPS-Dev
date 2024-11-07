@extends('layouts.plantilla')

@section('title')
    Safety Page
@endsection

@section('content')
    <header class="bg-main-blue py-2">
        <div class="columns-2">
            <div >
                <a class="ml-20 mt-4 flex" href="./">
                    <img src="{{ asset('icons/backArrow.svg') }}" alt="">
                    <p class="font-Coda text-white text-xl">Volver</p>
                </a>
            </div>

        <div class="relative float-right mr-20">
            <img class="w-24" src="{{ asset('img/IopsIconWhite.png') }}" alt="">
        </div>
    </div>
</header>

    <section class="bg-white h-screen">
        <div class="columns-2 pt-36">
            <div class="ml-20">
                <img class=" size-11/12" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="">
            </div>

        <div class="inline-flex flex-col justify-center  mr-20">
            <p class="mr-20 font-medium font-Poppins text-2xl">
                Si deseas probar nuestra aplicación, por favor brinda tu información de contacto y nos pondremos en contacto contigo.
            </p>

            <!-- Formulario de contacto -->
            <form action="" method="" class="mt-4  space-y-4">
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

                <button type="submit" class="text-white bg-secondary-green px-8 py-2 rounded-lg font-Poppins">
                    Enviar
                </button>  
            </form>
        </div>
    </div>
</section>

@endsection