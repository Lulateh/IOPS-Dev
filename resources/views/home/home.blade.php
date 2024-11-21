@extends('layouts.plantilla')

@section('title')
    LogiStock - Home
@endsection

@section('content')
@include('components.headerTables')

    
<section class="md:ml-[18rem] md:mr-[1rem]">

    <div>

        <div class="lg:flex lg:flex-row md:grid lg:items-start md:items-start justify-between mt-10 lg:ml-6 md:ml-6 max-sm:ml-8 ">
            <div>
                <h1 class="font-Coda text-main-blue text-3xl md:text-4xl">
                    Bienvenido, {{Auth::user()->nombre}}
                </h1>
            </div>

            <div class="lg:mt-2  md:mt-10 md:mb-[2rem] md:items-end lg:ml-[26rem] max-sm:mt-5  text-sm md:text-lg">
                <div>
                    <a href="{{ route('product.add') }}"  class="cursor-pointer hover:bg-blue-900 text-white bg-main-blue px-8 py-1 rounded-lg font-Coda">
                        Agregar producto
                    </a>
                </div>           
            </div>
        </div>

        <div class="lg:ml-20 md:ml-6 mt-5 max-sm:ml-[7rem] "> 

            <div class="md:overflow-y-scroll lg:overflow-y-hidden lg:basis-5/6 lg:flex md:grid lg:w-[100%] md:w-[28rem] max-sm:w-[14rem]  md:h-[45rem] lg:h-[100%] ">
                @foreach ($posts as $post)
                <a href="{{route('product.show', $post->id)}}">
                    <div class="lg:w-48 lg:h-60 md:h-[20rem] max-sm:h-[16rem] max-sm:mb-8 md:mb-8 border-2 hover:border-main-blue shadow-lg bg-lightB bg-opacity-30 mr-4 rounded-lg">
                        <figure>
                            <img class="lg:h-32 md:h-[13rem] max-sm:h-[9rem] mx-auto my-2" src="img/{{$post->imagen_url}}" alt="{{$post->imagen_url}}">
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