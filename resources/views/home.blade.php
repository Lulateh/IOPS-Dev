@extends('layouts.plantilla')

@section('title')
    LogiStock - Home
@endsection

@section('content')
    <header class="bg-main-green py-4">
        <div class="columns-2">
            <div>
                <img class="w-16 ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
            </div>

            <div class="relative float-right mr-20 ">
                <img class="w-12" src="{{ asset ('icons/profileIcon.svg')}}" alt="">
            </div>
        </div> 
    </header>

    <h1 class="font-Coda text-main-green text-3xl mt-10 ml-20">
        WELCOME, {{Auth::user()->nombre}}
    </h1>
@endsection