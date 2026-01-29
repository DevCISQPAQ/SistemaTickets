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

<body x-data="{
        sidebarOpen: false,
        isDesktop: window.matchMedia('(min-width: 768px)').matches,
        topBarHeight: 0
    }"
    x-init="
        const mq = window.matchMedia('(min-width: 768px)');
        mq.addEventListener('change', e => isDesktop = e.matches);

        const bar = document.getElementById('top-bar');
        if (bar) topBarHeight = bar.offsetHeight;
    "
    class="min-h-screen flex flex-col bg-gray-300">

    {{-- Contenedor principal --}}

    <!-- HEADER -->
    {{-- Header superior --}}
    <header class="h-18 bg-gray-800 flex items-center justify-center px-4">
        <img src="{{ asset('img/escuworblan.png') }}" alt="Logo" class="h-full">
    </header>

    <div id="top-bar" class="bg-gray-200 py-2 relative">
        <!-- BOTÓN HAMBURGUESA -->
        <button
            @click="sidebarOpen = true"
            class="md:hidden absolute left-4 top-1/2 -translate-y-1/2
       text-blue-950 text-2xl
       hover:bg-gray-300 rounded p-1 transition">
            ☰
        </button>

        <!-- TÍTULO -->
        <p class="text-center md:text-2xl text-blue-950 font-extrabold italic">
            Sistema De Tickets
        </p>

    </div>

    {{-- Contenido dinámico --}}
    <!-- MAIN -->
    <main class="flex-1 flex relative items-stretch">

        <!-- OVERLAY -->
        <div
            x-show="sidebarOpen && !isDesktop"
            x-transition.opacity
            @click="sidebarOpen = false"
            class="absolute inset-0 bg-black/40 z-40 md:hidden">
        </div>

        <!-- SIDEBAR -->
        <aside
            x-show="sidebarOpen || isDesktop"
            x-transition:enter="transition transform duration-300"
            x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition transform duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full"
            @click.outside="!isDesktop && (sidebarOpen = false)"
            class="absolute md:static top-0 left-0
           w-64 h-full md:h-auto
           bg-gray-900 text-white z-50">

            <div class="p-4 text-lg font-bold border-b border-gray-700">
                Administrador
            </div>

            <nav class="flex-1 p-4 space-y-2">
                <a href=""
                    @click="sidebarOpen = false"
                    class="block px-4 py-2 rounded hover:bg-gray-700 transition">
                    📊 Dashboard
                </a>

                <a href=""
                    @click="sidebarOpen = false"
                    class="block px-4 py-2 rounded hover:bg-gray-700 transition">
                    🎫 Mis Tickets
                </a>

                <a href=""
                    @click="sidebarOpen = false"
                    class="block px-4 py-2 rounded hover:bg-gray-700 transition">
                    🧑‍💼 Empleados
                </a>

                <a href=""
                    @click="sidebarOpen = false"
                    class="block px-4 py-2 rounded hover:bg-gray-700 transition">
                    👥 Usuarios
                </a>

                <a href=""
                    @click="sidebarOpen = false"
                    class="block px-4 py-2 rounded hover:bg-red-600 transition">
                    🚪 Cerrar sesión
                </a>
            </nav>
        </aside>

        <!-- CONTENIDO -->
        <section class="flex-1 bg-gray-100 p-6 overflow-y-auto">
            @yield('content')
        </section>

    </main>


    <!-- FOOTER -->
    <footer class="h-14 bg-gray-800 flex items-center p-3 justify-center text-white text-sm italic">
        &copy; {{ date('Y') }} Desarrollado e implementado por el Depto. de Tecnologías de la Información.
    </footer>

</body>


</html>