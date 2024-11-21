@extends('layouts.plantilla')

@section('title')
    LogiStock - Home
@endsection

@section('content')
@include('components.headerTables')

    
<section class="md:ml-[18rem] md:mr-[1rem]">

    <div>

        <div class="lg:flex lg:flex-row md:grid lg:items-start md:items-start justify-between mt-10 lg:ml-6 md:ml-6 ">
            <div class="ml-2">
                <h1 class="font-Coda text-main-blue text-3xl md:text-4xl">
                    Bienvenido, {{Auth::user()->nombre}}
                </h1>
            </div>

            <div class="lg:mt-2 md:mt-10 md:mb-[2rem] md:items-end  text-sm md:text-lg">
                <div class="mt-4 px-4">
                    <a href="{{ route('product.add') }}"  class="inline-block w-full sm:w-auto text-center px-6 py-2 cursor-pointer hover:bg-blue-900 text-white bg-main-blue rounded-lg font-Poppins">
                        Agregar producto
                    </a>
                </div>           
            </div>
        </div>

        <div class="ml-20 mt-5 "> 

            <div class="md:overflow-y-scroll lg:overflow-y-hidden lg:basis-5/6 lg:flex md:grid lg:w-[100%] md:w-[28rem] md:h-[45rem] lg:h-[100%] ">
                @foreach ($posts as $post)
                <a href="{{route('product.show', $post->id)}}">
                    <div class="lg:w-48 lg:h-60 md:h-[20rem] border-2 hover:border-main-blue shadow-lg bg-lightB bg-opacity-30 mr-4 rounded-lg">
                        <figure>
                            <img class="lg:h-32 md:h-[13rem] mx-auto my-2" src="img/{{$post->imagen_url}}" alt="{{$post->imagen_url}}">
                        </figure>
                        <div class="ml-4 font-Coda">
                            <h2 class="text-lg md:text-xl"> {{$post->nombre}} </h2>
                            <p>Código: &nbsp; {{$post->id}}</p>
                            <div class=" flex justify-end  mr-4 mb-4">
                                <p class="bg-white px-2 rounded-lg">{{$post->cantidad_stock}} unidades</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        </div>

    </div>

</section>

<script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuToggle = document.getElementById("menu-toggle");
            const sidebar = document.getElementById("sidebar");

            menuToggle.addEventListener("click", () => {
                sidebar.classList.toggle("hidden");
            });
        });
</script>
    
@endsection