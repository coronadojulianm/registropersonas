@extends('layout.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Lista de Personas Registradas</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-cyan-300">
            <th class="border p-2">ID User</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Cedula</th>
            <th class="border p-2">Telefono</th>
            <th class="border p-2">Direccion</th>
            <th class="border p-2">Opciones Adicionales</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td class="hover:bg-gray-300 cursor-pointer border border-white p-2 text-center">{{ $usuario->id }}</td>
                <td class="hover:bg-gray-300 cursor-pointer border border-white p-2 text-center">{{ $usuario->nombre}}</td>
                <td class="hover:bg-gray-300 cursor-pointer border border-white p-2 text-center">{{ $usuario->cedula}}</td>
                <td class="hover:bg-gray-300 cursor-pointer border border-white p-2 text-center">{{ $usuario->numTelefono }}</td>
                <td class="hover:bg-gray-300 cursor-pointer border border-white p-2 text-center">{{ $usuario->Direccion }}</td>
                <td class="cursor-pointer border border-white p-2 text-center">
                    <button onclick="eliminarUsuario({{ $usuario->id }})" class="bg-red-500 hover:bg-red-800 text-white py-2 px-1 ">
                        Delete
                    </button>
                    <button onclick="modificarUsuario({{ $usuario->id }})" class="bg-blue-600 hover:bg-blue-900 text-white py-2 px-1 ">
                        Update
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
<div><br></div>
<div class="flex justify-center">
<button onclick="window.location='{{ route('usuarios.pdf') }}'" class="bg-green-700 hover:bg-green-600 p-3 text-white rounded-lg uppercase font-bold">
    Descargar PDF
</button>
</div>
<div><br></div>
    <a href="{{ route('registrar') }}" class="bg-blue-700  hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
        Regresar
    </a>

</div>



@endsection
