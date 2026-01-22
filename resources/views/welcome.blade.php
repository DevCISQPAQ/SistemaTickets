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

    <!-- HEADER -->
    <header class="h-18 bg-gray-800 flex items-center justify-center px-4">
        <img src="{{ asset('img/escuworblan.png') }}" alt="Logo" class="h-full">
    </header>

    <div class="bg-gray-200 text-center py-2">
        <p class=" md:text-2xl text-blue-950 font-extrabold italic">Sistema De Tickets</p>
    </div>
    
    <!-- MAIN -->
    <main class="flex-1 flex">
        <!-- SECTION full height -->
        <section class="flex-1 flex flex-col md:flex-row gap-6 px-4 md:px-10 py-4">
            <!-- DIV IZQUIERDO: menor altura en móvil -->
            <div class="bg-white shadow-lg rounded-xl flex items-center justify-center p-4
                h-48 md:h-auto md:flex-1 shadow-cyan-500/50 ">
                <img src="{{ asset('img/sello-cumbres.svg') }}"
                    alt="Imagen izquierda"
                    class="object-contain w-1/2 h-1/2 rounded-xl">
            </div>

            <!-- DIV DERECHO: altura completa siempre -->
            <div class="bg-white shadow-lg rounded-xl flex items-center justify-center p-4 flex-1 h-full shadow-cyan-500/50">

                <!-- Formulario -->
                <form class="w-full max-w-sm space-y-4 bg-gray-50 p-6 rounded-xl shadow-lg">

                    <h2 class="text-2xl font-bold text-center mb-4">Login</h2>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Correo electrónico/Numero de empleado</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400"
                            placeholder="correo@ejemplo.com/52178920" required>
                    </div>

                    <!-- Contraseña -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400"
                            placeholder="********" required>
                    </div>

                    <!-- Botón login -->
                    <div>
                        <button type="submit"
                            class="w-full bg-cyan-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-cyan-600 transition-colors">
                            Iniciar sesión
                        </button>
                    </div>

                    <!-- Registro -->
                    <div class="text-center text-sm text-gray-500">
                        <a href="{{ route('registro') }}" class="hover:underline">¿No tienes cuenta? Regístrate aquí.</a>
                    </div>

                     <!-- test -->
                    <div class="text-center text-sm text-gray-500">
                        <a href="{{ route('usertickets') }}" class="hover:underline">Ingresar a test.</a>
                    </div>

                </form>

            </div>
        </section>


    </main>

    <!-- FOOTER -->
    <footer class="h-14 bg-gray-800 flex items-center p-3 justify-center text-white text-sm italic">
        &copy; {{ date('Y') }} Desarrollado e implementado por el Depto. de Tecnologías de la Información.
    </footer>

</body>


</html>