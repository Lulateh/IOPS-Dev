@extends('layouts.plantilla')

@section('title')
    Lista de Proveedores
@endsection

@section('content')
@include('components.header')

<section class="flex columns-2">

    <div class="basis-1/6 bg-card-bg pb-[10.3rem]">
        <div class="flex flex-col font-Coda justify-center text-center mt-20">
            <ul>
            <h2 class="text-3xl font-bold mb-3">Menu</h2>
                <li><a href="{{route('home')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Inventario</a></li>
                <li><a href="{{route('incoming')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Entradas</a></li>
                <li><a href="{{route('reservations')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reservas</a></li>
                <li><a href="{{route('sales')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Ventas</a></li>
                <li><a href="{{route('reporte.diario')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Reportes</a></li>
            </ul>

            <ul>
                <h2 class="text-3xl font-bold my-3">Personas</h2>
                <li><a href="{{route('proveedores.index')}}" class = "block px-4 py-2 text-xl bg-main-green text-gray-100">Proveedores</a></li>
                <li><a href="{{route('clientes.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Clientes</a></li>
                @if(Auth::user()->rol == 'administrador')
                <li><a href="{{route('users.index')}}" class = "block px-4 py-2 text-xl text-gray-700 hover:bg-main-green hover:text-gray-100">Usuarios</a></li>
                @endif            </ul>
        </div>
    </div>

    <div>
        <div class="flex justify-between items-center mt-12 mb-10 mx-20">
            <div class="ml-1">
                <h2 class="text-main-green font-Coda text-4xl">  
                    Proveedores
                </h2>
            </div>

            <div class=" flex items-center">
                    <form action="{{ route('proveedores.index') }}" method="GET">
                        <select name="estado" class="px-4 py-1 border rounded-lg">
                            <option value="">Estado</option>
                            <option value="activo" {{ request('estado') === 'activo' ? 'selected' : '' }}>Activo</option>
                            <option value="inactivo" {{ request('estado') === 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                        </select>
                        <button type="submit" class=" ml-2 text-white bg-main-green cursor-pointer px-4 py-1 rounded-xl font-Poppins" >Filtrar</button>
                    </form>
                    


                <div class="mx-6">
                <a href="{{ route('proveedores.create') }}" class="text-white bg-main-green cursor-pointer px-4 py-1 rounded-xl font-Poppins">Agregar Proveedor</a> 
                </div>
            </div>
        </div>

        <div class="basis-5/6 flex items-center mr-5 ml-10">
            <table class="w-[75rem]">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tl-lg">Nombre</th>
                        <th class="py-2 px-4 border-b bg-[#64746B] text-white">Correo</th>
                        <th class="py-2 px-4 border-b bg-[#26413C] text-white">Teléfono</th>
                        <th class="py-2 px-4 border-b bg-[#64746B] text-white ">Estado</th>
                        <th class="py-2 px-4 border-b bg-[#26413C] text-white rounded-tr-lg">Acciones</th>
                    </tr>
                </thead>
        
                <tbody>
                    @foreach ($proveedores as $proveedor)
                    <tr>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $proveedor->nombre_proveedor }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $proveedor->email }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">{{ $proveedor->telefono }}</td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">
                        @if($proveedor->estado === 'activo')
                            <span class="text-green-600">Activo</span>
                        @else
                            <span class="text-red-600">Inactivo</span>
                        @endif
                    </td>
                        <td class="py-2 px-4 bg-card-bg border text-black text-center">
                            <a href="{{ route('proveedores.edit', $proveedor->id) }}" class="text-white hover:bg-blue-700 bg-blue-500 rounded-lg px-3 py-2">Editar</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    

</section>

@endsection
