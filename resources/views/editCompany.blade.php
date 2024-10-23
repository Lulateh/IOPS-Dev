@extends('layouts.plantilla')

@section('title')
    Editar empresa
@endsection


@section('content')

    <!-- --------------HEADER-------------- -->
    <header class="bg-secondary-green py-3">
        <div class="columns-2">
            <div>
            <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </a>
            </div>

            <div class="relative float-right mr-20 mt-3">
            <a href="{{ route('profile') }}"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
                </a>
            </div>
        </div> 
    </header>
    <!-- --------------HEADER-------------- -->

    <!-- --------------BODY-------------- -->
    <body class="bg-main-green">   
        <div class="mt-4 mb-4">
            <a href="" class="ml-20 text-white font-Coda hover:underline text-4xl">  
            ← Volver
           </a>
         </div>

        <div class="grid justify-center">
            <form method="POST" action="{{ route('company.update', $existingCompany->id) }}" enctype="multipart/form-data" class="bg-white/[.17] px-16 py-8 font-Coda rounded-xl">
                @csrf
                
            
                <h2 class="text-center font-Poppins font-bold text-3xl mb-4">EDITAR EMPRESA</h2>
            
                <div class="flex flex-col mb-2">
                    <img id="previewImage" class="bg-white w-24 h-24 rounded-full object-cover" 
                    src="{{ asset('storage/' . $existingCompany->logo) }}" alt="Foto de perfil">
                    <label class="font-bold">Cambiar Foto de Perfil</label>
                    <input type="file" id="fileInput" name="imagen" class="mt-1 text-sm text-black file:mr-4 file:py-2 file:px-4 file:rounded file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-gray-50 hover:file:bg-gray-100"> 
                </div>
            
                <div>
                    <label class="font-bold" for="companyName">Nombre de la empresa</label><br>
                    <input class="rounded-lg my-2 w-[24rem]" type="text" id="companyName" name="companyName" value="{{ $existingCompany->nombre }}" required><br>
                </div>
            
                <div>
                    <label class="font-bold" for="companyEmail">Correo de la empresa</label><br>
                    <input class="rounded-lg my-2 w-[24rem]" type="email" id="companyEmail" name="companyEmail" value="{{ $existingCompany->correo }}" required><br>
                </div>
                    
                <div>
                    <label class="font-bold" for="companyPhone">Teléfono de la empresa</label><br>
                    <input class="rounded-lg my-2 w-[24rem]" type="text" id="companyPhone" name="companyPhone" value="{{ $existingCompany->telefono }}" required><br>
                </div>
                    
                <div>
                    <label class="font-bold" for="companyAddress">Dirección de la empresa</label><br>
                    <input class="rounded-lg my-2 w-[24rem]" type="text" id="companyAddress" name="companyAddress" value="{{ $existingCompany->direccion }}" required><br>
                </div>
            
                <div class="mt-4 ml-20">
                    <input  type="submit" class="text-white bg-secondary-green px-4 py-1 rounded-lg" value="ACTUALIZAR INFORMACIÓN">
                </div>
            </form>
            
        </div>
    </body>
<!-- --------------BODY-------------- -->

<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        
        reader.onload = function(e) {
            document.getElementById('previewImage').src = e.target.result;
        }
        
        if (file) {
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection