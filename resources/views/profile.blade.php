@extends('layouts.plantilla')

@section('title')
    Iops
@endsection

@section('content')
<header class="bg-main-green py-2">
    <div class="columns-2">
        <div>
        <a href="{{ route('home') }}"><img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </a>
        </div>

  
    </div> 
</header>


<body class="bg-teal-100">

   <div class="mt-5 mb-5">
      <a href="{{ route('home') }}" class="ml-20 text-main-green font-Coda hover:underline text-4xl">  
      ← Volver
     </a>
   </div>

   <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-16 px-5 sm:px-10 lg:px-10">

 <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg shadow-lg flex flex-col h-[97%]">
    <div class="flex justify-center mb-4">
        <img src="https://via.placeholder.com/150" alt="Imagen de usuario" class="w-60 h-50 rounded-full border-2 border-gray-200">
    </div>


    <div class="text-center mb-4">
        <h2 class="text-2xl font-bold mb-1">{{ Auth::user()->nombre }}</h2>
        <p class="text-xl text-gray-600 font-Coda mb-6 ">{{ Auth::user()->id }}</p>
        <h2 class="text-2xl font-bold mb-1">Empresa: {{ Auth::user()->nombre_empresa }}</h2>
        <p class="text-xl font-Coda mb-6"> {{ Auth::user()->email }}</p>
    </div>
    

    <div class="flex flex-col items-center mx-9">
        @auth
        <a href="{{ route('editUser') }}" class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg mb-4 hover:bg-gray-600 w-full text-center block">Editar Perfil</a>
        @endauth
        <a href="{{ route('config') }}" class="bg-main-green font-Coda text-white px-4 py-2 rounded-lg mb-4 hover:bg-gray-600 w-full text-center block">Configuración</a>
        <a href="#" class="mb-6 bg-main-green font-Coda text-white px-4 py-2 rounded-lg hover:bg-gray-600 w-full text-center block">Cerrar sesión</a>
    </div>

 </div>

    <div>

    <div class="flex justify-center mb-8">
    <a href="{{ route('home') }}" class="bg-main-green text-white w-24 h-24 rounded-full hover:bg-gray-600 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.3332 58.6643C35.3332 58.2223 35.5087 57.7985 35.8212 57.4859C36.1337 57.1734 36.5576 56.9979 36.9996 56.9979H66.9944C67.4364 56.9979 67.8602 57.1734 68.1728 57.4859C68.4853 57.7985 68.6608 58.2223 68.6608 58.6643C68.6608 59.1062 68.4853 59.5301 68.1728 59.8426C67.8602 60.1551 67.4364 60.3306 66.9944 60.3306H36.9996C36.5576 60.3306 36.1337 60.1551 35.8212 59.8426C35.5087 59.5301 35.3332 59.1062 35.3332 58.6643ZM35.3332 45.3332C35.3332 44.8912 35.5087 44.4674 35.8212 44.1549C36.1337 43.8424 36.5576 43.6668 36.9996 43.6668H66.9944C67.4364 43.6668 67.8602 43.8424 68.1728 44.1549C68.4853 44.4674 68.6608 44.8912 68.6608 45.3332C68.6608 45.7751 68.4853 46.199 68.1728 46.5115C67.8602 46.824 67.4364 46.9996 66.9944 46.9996H36.9996C36.5576 46.9996 36.1337 46.824 35.8212 46.5115C35.5087 46.199 35.3332 45.7751 35.3332 45.3332ZM35.3332 32.0021C35.3332 31.5602 35.5087 31.1363 35.8212 30.8238C36.1337 30.5113 36.5576 30.3357 36.9996 30.3357H66.9944C67.4364 30.3357 67.8602 30.5113 68.1728 30.8238C68.4853 31.1363 68.6608 31.5602 68.6608 32.0021C68.6608 32.4441 68.4853 32.8679 68.1728 33.1804C67.8602 33.4929 67.4364 33.6685 66.9944 33.6685H36.9996C36.5576 33.6685 36.1337 33.4929 35.8212 33.1804C35.5087 32.8679 35.3332 32.4441 35.3332 32.0021ZM31.5138 27.4896C31.669 27.6444 31.7921 27.8282 31.8761 28.0307C31.9601 28.2331 32.0034 28.4502 32.0034 28.6694C32.0034 28.8885 31.9601 29.1056 31.8761 29.308C31.7921 29.5105 31.669 29.6944 31.5138 29.8492L26.5147 34.8483C26.3599 35.0035 26.176 35.1266 25.9735 35.2106C25.7711 35.2946 25.5541 35.3379 25.3349 35.3379C25.1157 35.3379 24.8987 35.2946 24.6962 35.2106C24.4938 35.1266 24.3099 35.0035 24.1551 34.8483L22.4887 33.1819C22.3338 33.027 22.2109 32.8431 22.127 32.6406C22.0432 32.4382 22 32.2212 22 32.0021C22 31.783 22.0432 31.5661 22.127 31.3636C22.2109 31.1612 22.3338 30.9773 22.4887 30.8223C22.6436 30.6674 22.8276 30.5445 23.03 30.4606C23.2324 30.3768 23.4494 30.3336 23.6685 30.3336C23.8876 30.3336 24.1046 30.3768 24.307 30.4606C24.5094 30.5445 24.6934 30.6674 24.8483 30.8223L25.3349 31.3122L29.1542 27.4896C29.309 27.3344 29.4929 27.2113 29.6953 27.1272C29.8978 27.0432 30.1148 27 30.334 27C30.5532 27 30.7702 27.0432 30.9727 27.1272C31.1751 27.2113 31.359 27.3344 31.5138 27.4896ZM31.5138 40.8206C31.669 40.9754 31.7921 41.1593 31.8761 41.3618C31.9601 41.5642 32.0034 41.7812 32.0034 42.0004C32.0034 42.2196 31.9601 42.4366 31.8761 42.6391C31.7921 42.8415 31.669 43.0254 31.5138 43.1802L26.5147 48.1794C26.3599 48.3346 26.176 48.4577 25.9735 48.5417C25.7711 48.6257 25.5541 48.6689 25.3349 48.6689C25.1157 48.6689 24.8987 48.6257 24.6962 48.5417C24.4938 48.4577 24.3099 48.3346 24.1551 48.1794L22.4887 46.513C22.1758 46.2001 22 45.7757 22 45.3332C22 44.8907 22.1758 44.4663 22.4887 44.1534C22.8016 43.8405 23.226 43.6647 23.6685 43.6647C24.111 43.6647 24.5354 43.8405 24.8483 44.1534L25.3349 44.6433L29.1542 40.8206C29.309 40.6654 29.4929 40.5423 29.6953 40.4583C29.8978 40.3743 30.1148 40.3311 30.334 40.3311C30.5532 40.3311 30.7702 40.3743 30.9727 40.4583C31.1751 40.5423 31.359 40.6654 31.5138 40.8206ZM31.5138 54.1517C31.669 54.3065 31.7921 54.4904 31.8761 54.6928C31.9601 54.8953 32.0034 55.1123 32.0034 55.3315C32.0034 55.5507 31.9601 55.7677 31.8761 55.9702C31.7921 56.1726 31.669 56.3565 31.5138 56.5113L26.5147 61.5104C26.3599 61.6656 26.176 61.7887 25.9735 61.8727C25.7711 61.9568 25.5541 62 25.3349 62C25.1157 62 24.8987 61.9568 24.6962 61.8727C24.4938 61.7887 24.3099 61.6656 24.1551 61.5104L22.4887 59.8441C22.1758 59.5312 22 59.1068 22 58.6643C22 58.2217 22.1758 57.7974 22.4887 57.4845C22.8016 57.1716 23.226 56.9958 23.6685 56.9958C24.111 56.9958 24.5354 57.1716 24.8483 57.4845L25.3349 57.9744L29.1542 54.1517C29.309 53.9965 29.4929 53.8734 29.6953 53.7894C29.8978 53.7054 30.1148 53.6621 30.334 53.6621C30.5532 53.6621 30.7702 53.7054 30.9727 53.7894C31.1751 53.8734 31.359 53.9965 31.5138 54.1517Z" fill="white"/>
        </svg>
    </a>
    </div>

     <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg mb-4">

        <div class="flex flex-col space-y-4">
    
     <div class="bg-white rounded-lg shadow-md w-full h-24 flex items-center px-4">
     <div class="ml-2 mr-2 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black mb-2">Nombre Producto</p>
        <p class="text-black">Codigo Producto</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black text-center">12 Unid</p>
    </div>
    </div>

     <div class="bg-white rounded-lg shadow-md w-full h-24 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black mb-2">Nombre Producto</p>
        <p class="text-black">Codigo Producto</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black text-center">12 Unid</p>
    </div>
     </div>

     <div class="bg-white rounded-lg shadow-md w-full h-24 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black mb-2">Nombre Producto</p>
        <p class="text-black">Codigo Producto</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black text-center">12 Unid</p>
    </div>
     </div>

     <div class="bg-white rounded-lg shadow-md w-full h-24 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black mb-2">Nombre Producto</p>
        <p class="text-black">Codigo Producto</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black text-center">12 Unid</p>
    </div>
     </div>


        

        
    </div>

     </div>

    </div>


    <div>

    <div class="flex justify-center mb-8">
    <a href="{{ route('incoming') }}" class="bg-main-green text-white w-24 h-24 rounded-full hover:bg-gray-600 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
        <path d="M45.1343 24.9285C44.7969 24.7933 44.4204 24.7933 44.083 24.9285L27.2169 31.6744L34.0108 34.3902L51.4025 27.4353L45.1343 24.9285ZM55.2064 28.9585L37.8147 35.9135L44.6086 38.6293L62.0003 31.6744L55.2064 28.9585ZM64.3912 33.7628L46.0217 41.1106V63.4988L64.3912 56.151V33.7628ZM43.1956 63.5016V41.1078L24.8261 33.7628V56.1538L43.1956 63.5016ZM43.0345 22.3031C44.045 21.899 45.1722 21.899 46.1827 22.3031L66.3298 30.3631C66.5918 30.468 66.8163 30.649 66.9744 30.8828C67.1326 31.1165 67.2172 31.3922 67.2172 31.6744V56.1538C67.2169 56.7186 67.0473 57.2702 66.7305 57.7377C66.4137 58.2051 65.964 58.5669 65.4396 58.7764L45.1343 66.8986C44.7969 67.0338 44.4204 67.0338 44.083 66.8986L23.7804 58.7764C23.2555 58.5674 22.8053 58.2058 22.4879 57.7383C22.1705 57.2708 22.0006 56.7189 22 56.1538V31.6744C22.0001 31.3922 22.0846 31.1165 22.2428 30.8828C22.4009 30.649 22.6254 30.468 22.8874 30.3631L43.0345 22.3031Z" fill="white"></path>        </svg>
    </a>
    </div>

     <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg mb-4">

     <div class="flex flex-col space-y-4">
    
     <div class="bg-white rounded-lg shadow-md w-full h-32 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black ">Nombre Producto</p>
        <p class="text-black ">Proveedor</p>
        <p class="text-black">Fecha de llegada</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black">12 Unid</p>
    </div>
     </div>

     <div class="bg-white rounded-lg shadow-md w-full h-32 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black ">Nombre Producto</p>
        <p class="text-black ">Proveedor</p>
        <p class="text-black">Fecha de llegada</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2 "></div>
     
    <div class="flex flex-col justify-center h-full text-lg font-Coda">
        <p class="text-black">12 Unid</p>
    </div>
     </div>

     <div class="bg-white rounded-lg shadow-md w-full h-32 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black ">Nombre Producto</p>
        <p class="text-black ">Proveedor</p>
        <p class="text-black">Fecha de llegada</p>
    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black">12 Unid</p>
    </div>
     </div>

     


     
        
    </div>

     </div>

    </div>

    <div>

    <div class="flex justify-center mb-8">
    <a href="{{ route('sales') }}" class="bg-main-green text-white w-24 h-24 rounded-full hover:bg-gray-600 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
        <path d="M21 24.6071C21 24.1809 21.1693 23.7721 21.4707 23.4707C21.7721 23.1693 22.1809 23 22.6071 23H27.4286C27.7871 23.0001 28.1352 23.1201 28.4177 23.3408C28.7002 23.5615 28.9007 23.8704 28.9875 24.2182L30.2893 29.4286H67.6071C67.8513 29.4286 68.0922 29.4843 68.3116 29.5914C68.5309 29.6985 68.7231 29.8541 68.8733 30.0465C69.0236 30.2389 69.128 30.463 69.1788 30.7018C69.2295 30.9406 69.2251 31.1878 69.1661 31.4246L64.3446 50.7104C64.2579 51.0582 64.0573 51.367 63.7748 51.5878C63.4924 51.8085 63.1442 51.9285 62.7857 51.9286H33.8571C33.4986 51.9285 33.1505 51.8085 32.868 51.5878C32.5855 51.367 32.385 51.0582 32.2982 50.7104L26.175 26.2143H22.6071C22.1809 26.2143 21.7721 26.045 21.4707 25.7436C21.1693 25.4422 21 25.0334 21 24.6071ZM31.0929 32.6429L32.7 39.0714H37.0714V32.6429H31.0929ZM40.2857 32.6429V39.0714H46.7143V32.6429H40.2857ZM49.9286 32.6429V39.0714H56.3571V32.6429H49.9286ZM59.5714 32.6429V39.0714H63.9429L65.55 32.6429H59.5714ZM63.1393 42.2857H59.5714V48.7143H61.5321L63.1393 42.2857ZM56.3571 42.2857H49.9286V48.7143H56.3571V42.2857ZM46.7143 42.2857H40.2857V48.7143H46.7143V42.2857ZM37.0714 42.2857H33.5036L35.1107 48.7143H37.0714V42.2857ZM37.0714 58.3571C36.2189 58.3571 35.4014 58.6958 34.7986 59.2986C34.1958 59.9014 33.8571 60.7189 33.8571 61.5714C33.8571 62.4239 34.1958 63.2415 34.7986 63.8443C35.4014 64.4471 36.2189 64.7857 37.0714 64.7857C37.9239 64.7857 38.7415 64.4471 39.3443 63.8443C39.9471 63.2415 40.2857 62.4239 40.2857 61.5714C40.2857 60.7189 39.9471 59.9014 39.3443 59.2986C38.7415 58.6958 37.9239 58.3571 37.0714 58.3571ZM30.6429 61.5714C30.6429 59.8665 31.3202 58.2313 32.5257 57.0257C33.7313 55.8202 35.3665 55.1429 37.0714 55.1429C38.7764 55.1429 40.4115 55.8202 41.6171 57.0257C42.8227 58.2313 43.5 59.8665 43.5 61.5714C43.5 63.2764 42.8227 64.9115 41.6171 66.1171C40.4115 67.3227 38.7764 68 37.0714 68C35.3665 68 33.7313 67.3227 32.5257 66.1171C31.3202 64.9115 30.6429 63.2764 30.6429 61.5714ZM59.5714 58.3571C58.7189 58.3571 57.9014 58.6958 57.2986 59.2986C56.6958 59.9014 56.3571 60.7189 56.3571 61.5714C56.3571 62.4239 56.6958 63.2415 57.2986 63.8443C57.9014 64.4471 58.7189 64.7857 59.5714 64.7857C60.4239 64.7857 61.2415 64.4471 61.8443 63.8443C62.4471 63.2415 62.7857 62.4239 62.7857 61.5714C62.7857 60.7189 62.4471 59.9014 61.8443 59.2986C61.2415 58.6958 60.4239 58.3571 59.5714 58.3571ZM53.1429 61.5714C53.1429 59.8665 53.8202 58.2313 55.0257 57.0257C56.2313 55.8202 57.8665 55.1429 59.5714 55.1429C61.2764 55.1429 62.9115 55.8202 64.1171 57.0257C65.3227 58.2313 66 59.8665 66 61.5714C66 63.2764 65.3227 64.9115 64.1171 66.1171C62.9115 67.3227 61.2764 68 59.5714 68C57.8665 68 56.2313 67.3227 55.0257 66.1171C53.8202 64.9115 53.1429 63.2764 53.1429 61.5714Z" fill="white"></path>     </svg>
    </a>
    </div>

     <div class="bg-teal-950 bg-opacity-25 p-6 rounded-lg mb-4">

     <div class="flex flex-col space-y-4">
    
     <div class="bg-white rounded-lg shadow-md w-full h-60 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black mb-1 ">Nombre Producto</p>
        <p class="text-black mb-2 ">Codigo Producto</p>

        <p class="text-black mb-1 ">Nombre Producto</p>
        <p class="text-black mb-2 ">Codigo Producto</p>

        <p class="text-black mb-1 ">Nombre Producto</p>
        <p class="text-black mb-2 ">Codigo Producto</p>

    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda ">
        <p class="text-black mb-6 pb-3">12 Unid</p>
        <p class="text-black mb-8">12 Unid</p>
        <p class="text-black">12 Unid</p>
    </div>
     </div>

     <div class="bg-white rounded-lg shadow-md w-full h-60 flex items-center px-4">
     <div class="ml-4 flex flex-col justify-center h-full text-md font-coda">
        <p class="text-black mb-1">Nombre Producto</p>
        <p class="text-black mb-2 ">Codigo Producto</p>

        <p class="text-black mb-1 ">Nombre Producto</p>
        <p class="text-black mb-2 ">Codigo Producto</p>

        <p class="text-black mb-1 ">Nombre Producto</p>
        <p class="text-black mb-2 ">Codigo Producto</p>

    </div>

    <div class="border-l-4 border-dotted border-main-green h-5/6 w-1 mx-2"></div>
     
    <div class="flex flex-col justify-center h-full text-xl font-Coda">
        <p class="text-black mb-6 pb-3">12 Unid</p>
        <p class="text-black mb-8">12 Unid</p>
        <p class="text-black">12 Unid</p>
    </div>
     </div>



        
    </div>

     </div>

    </div>
    
</div>
</body>
@endsection