<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link rel="shortcut icon" href="{{ asset('icons/favicon.png') }}">
    @vite('resources/css/app.css')
</head>
<body>
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
    @yield('content')

</body>
</html>