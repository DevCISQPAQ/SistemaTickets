@extends('layouts.base') <!-- Esto indica que usará tu layout -->

@section('content') <!-- Todo lo que pongas aquí reemplaza @yield('content') en el layout -->

<section class="flex justify-center items-center w-full px-4">
    <!-- Div centrado -->
    <div class="bg-white shadow-lg rounded-xl p-6 w-full max-w-md shadow-cyan-500/50">
        <form method="POST" action="{{ route('registro') }}" class="w-full space-y-4">
            @csrf
            <h2 class="text-2xl font-bold text-center mb-4">Registro</h2>

            <!-- Numero de empleado -->
            <input type="number" name="nempledo" placeholder="Numero de empleado"
                class="w-full px-3 py-2 border rounded-lg" required>
                
            <!-- Nombre -->
            <input type="text" name="name" placeholder="Nombre"
                class="w-full px-3 py-2 border rounded-lg" required>

            <!-- Email -->
            <input type="email" name="email" placeholder="Correo"
                class="w-full px-3 py-2 border rounded-lg" required>

            <!-- Contraseña -->
            <input type="password" name="password" placeholder="Contraseña"
                class="w-full px-3 py-2 border rounded-lg" required>

            <button type="submit" class="w-full bg-cyan-500 text-white py-2 rounded-lg hover:bg-cyan-600 transition-colors">
                Registrarse
            </button>
        </form>
    </div>
</section>


@endsection