@extends('layout.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Formulario Registro Personas</h1>

<div class="flex justify-center items-center">
    
    <div class="md:w-1/3 bg-zinc-400 p-5 rounded-lg shadow-2xl">
       
<form action="{{route('registrar')}}" method="POST">
    @csrf
    <div class="mb-5">
        <label for="nombre" class="mb-2 block uppercase text-gray-700 font-bold">Nombre</label>
        <input id="nombre" name="nombre" placeholder="Ingrese su Nombre" type="text" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('nombre')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="cedula" class="mb-2 block uppercase text-gray-700 font-bold">Cedula</label>
        <input id="cedula" name="cedula" placeholder="Ingrese su numero de Cedula" type="number" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('cedula')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="numTelefono" class="mb-2 block uppercase text-gray-700 font-bold">Telefono</label>
        <input id="numTelefono" name="numTelefono" placeholder="Ingrese su numero telefonico" type="number" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('numTelefono')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="Direccion" class="mb-2 block uppercase text-gray-700 font-bold">Dirección</label>
        <input id="Direccion" name="Direccion" placeholder="Ingrese su Dirección de vivienda" type="text" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('Direccion')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    

    <input type="submit" value="Registrar" class="bg-blue-700  hover:bg-blue-900 w-full p-3 text-white rounded-lg uppercase font-bold" >

    <div class="flex justify-center">
        <a href="{{ route('usuarios') }}" class="bg-green-700  hover:bg-green-900 text-white font-bold py-2 px-4 rounded mt-4 inline-block ">
            Tabla Usuarios
        </a>
    </div>
    
    
</form>
</div>
</div>

@endsection