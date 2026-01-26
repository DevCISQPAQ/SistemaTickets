<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tickets</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" type="image/svg" href="{{ asset('/img/sello-cumbres-en-blanco-01.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('/img/sello-cumbres-en-blanco-01.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="min-h-screen flex flex-col bg-gray-300">

    {{-- Contenedor principal --}}

    <!-- HEADER -->
    {{-- Header superior --}}
    <header class="h-18 bg-gray-800 flex items-center justify-center px-4">
        <img src="{{ asset('img/escuworblan.png') }}" alt="Logo" class="h-full">
    </header>

     <div class="bg-gray-200 text-center py-2">
        <p class=" md:text-2xl text-blue-950 font-extrabold italic">Sistema De Tickets</p>
    </div>

    <!-- MAIN -->
    {{-- Contenido dinámico --}}
    <main class="flex-1 flex flex-col">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="h-14 bg-gray-800 flex items-center p-3 justify-center text-white text-sm italic">
        &copy; {{ date('Y') }} Desarrollado e implementado por el Depto. de Tecnologías de la Información.
    </footer>

</body>


</html>