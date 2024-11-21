@extends('layouts.plantilla')

@section('title')
    Contact Page
@endsection

@section('content')
<header class="bg-main-blue py-2">
    <div class="flex justify-between items-center px-4 sm:px-8">
        <div>
            <a class="flex items-center space-x-2" href="./">
                <img src="{{ asset('icons/backArrow.svg') }}" alt="Back Arrow">
                <p class="font-Coda text-white text-lg sm:text-xl">Volver</p>
            </a>
        </div>
        <div>
            <img class="w-16 sm:w-24" src="{{ asset('img/IopsIconWhite.png') }}" alt="Logo">
        </div>
    </div>
</header>

<section class="lg:mt-24 mb-10 bg-white  flex flex-col lg:flex-row items-center lg:items-start justify-center lg:space-x-10 lg:space-y-0 space-y-8 px-4 sm:px-8 lg:px-16">
    <!-- Imagen -->
    <div class="mt-20 ml-0 flex justify-center lg:justify-end">
        <img class="w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-xl h-auto object-contain" src="{{ asset('img/LogiStockIconBlack.png') }}" alt="Stock Icon">
    </div>

    <!-- Formulario -->
    <div class="w-full lg:w-1/2 space-y-6">
        <p class="font-medium font-Poppins text-lg sm:text-xl lg:text-2xl text-center lg:text-left">
            Si deseas probar nuestra aplicación, por favor brinda tu información de contacto y nos pondremos en contacto contigo.
        </p>

        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="font-Poppins text-sm sm:text-lg" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="font-Poppins text-sm sm:text-lg" for="phone">Teléfono</label>
                <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="font-Poppins text-sm sm:text-lg" for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
            </div>

            <div>
                <label class="font-Poppins text-sm sm:text-lg" for="message">Mensaje</label>
                <textarea id="message" name="message" class="w-full px-4 py-2 border rounded-lg" rows="4"></textarea>
            </div>

            <button type="submit" 
                    class="w-full sm:w-auto px-8 py-3 text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 
                         hover:from-blue-500 hover:via-blue-600 hover:to-blue-700 
                           shadow-lg hover:shadow-xl transition-all duration-300 rounded-full font-Poppins font-medium text-lg">
                    Enviar
            </button>

        </form>

        <!-- SweetAlert -->
        @if(session('success'))
            <script>
                swal({
                    title: "¡Éxito!",
                    text: {!! json_encode(session('success')) !!},
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "OK",
                            value: true,
                            visible: true,
                            className: "my-button",
                            closeModal: true,
                        }
                    }
                });
            </script>
        @endif
    </div>
</section>
@endsection
