<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
    <body class="bg-gray-200">

    <header class="p-5 border-b bg-cyan-300 shadow">    
        <h1 class="text-3xl font-black text-blue-700">
            Registro De Personas
        </h1>
    </header>
<main class="container mx-auto mt-10">
    <h2 class="font-black text-2xl text-center mb-10">
        @yield('titulo')
    </h2>
    @yield('contenido')
</main>
    
   <footer class="text-center p-5 text-black font-bold uppercase">
   Registro de Personas By: Julian coronado {{date ("Y")}}
   </footer>
       
    </body>
</html>