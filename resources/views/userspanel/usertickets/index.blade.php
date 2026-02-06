@extends('layouts.base') <!-- Esto indica que usará tu layout -->

@section('content')

<div class="">
    <h1 class=" font-bold font-serif pl-5  md:pl-35 pt-4 text-xl"> Name User</h1>
</div>

<section class="flex-1 flex md:flex-row flex-col gap-6 px-4 md:px-30 py-4">

    <div class="bg-white shadow-lg rounded-xl flex flex-1 items-center justify-center md:m-5 
                md:h-140 shadow-cyan-500/50">

        <form class=" m-4 p-4 w-full md:max-w-lg bg-gray-50 rounded-xl shadow-lg shadow-blue-300">

            <h2 class="text-2xl font-bold text-center mb-3">Crear Ticket</h2>

            <div>
                <label for="email" class=" text-sm font-medium text-gray-700 mb-1">Titulo</label>
                <input type="text" name="titulo_ticket" id="titulo_ticket"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400"
                    placeholder="*Problema con Pc" maxlength="70" required>
            </div>

            <div x-data="{ count: 0, max: 200 }" class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea type="text" name="descripcion" id="descripcion"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-400 focus:border-cyan-400" rows="5" x-on:input="count = $event.target.value.length"
                    :maxlength="max" required> </textarea>
                <p class="text-sm text-gray-500">
                    <span x-text="count"></span>/<span x-text="max"></span> caracteres
                </p>
            </div>

            <div class="mt-3 mb-3">
                <select name="departamento" id="departamento" class="mb-6 p-1 bg-amber-500 rounded-xl hover:bg-cyan-600" required>Departamento
                    <option value="" disabled selected>Selecciona tu departamento</option>
                    <option value="1">Preescolar</option>
                    <option value="1">Primaria</option>
                    <option value="2">Secundaria</option>
                    <option value="3">Administración</option>
                    <option value="3">Dirección</option>
                    <option value="3">Comunicación</option>
                    <option value="3">Docente Preparatoria</option>
                    <option value="3">Academias</option>
                </select>
            </div>

            <div class=" items-center justify-center flex">
                <button type="submit"
                    class="w-1/2 bg-cyan-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-cyan-600 transition-colors">
                    Crear
                </button>
            </div>
        </form>

    </div>

    <div class="bg-white shadow-lg rounded-xl flex flex-1 flex-col md:items-center justify-center p-4 md:m-5 shadow-cyan-500/50 md:h-140">
        <h2 class="text-2xl font-bold text-center mb-7 font-serif">Tus Tickets</h2>
        <div class=" flex-1 space-y-5">
            <!-- Ticket model  -->
            <div class=" shadow-lg rounded-2xl shadow-blue-300 items-center justify-center p-5 w-full md:w-150 bg-gray-200">
                <div class=" flex justify-between mb-2">
                    <h1 class=" font-serif text-sm font-bold text-cyan-700">Ticket # <span class=" text-orange-500">222</span></h1>
                    <a class=" rounded-2xl text-xs font-bold text-red-700" href="">Cancelar Ticket</a>
                </div>
                <div class=" bg-white rounded-2xl pb-3">
                    <p class="rounded-lg bg-cyan-500 font-serif items-center justify-center flex font-bold text-white mb-1">PC no enciende</p>
                    <p class=" pl-3 font-serif font-bold text-cyan-500 text-sm">Estatus: <span class=" text-yellow-300 font-sans font-bold">En espera</span></p>
                    <p class=" pl-3 font-serif font-bold text-cyan-500 text-sm">Asignado a: <span class=" font-normal font-sans text-black">Fulanito</span></p>
                </div>
            </div>

            <!-- Ticket model  -->
            <div class=" shadow-lg rounded-2xl shadow-blue-300 items-center justify-center p-5 w-full md:w-150 bg-gray-200">
                <div class=" flex justify-between mb-2">
                    <h1 class=" font-serif text-sm font-bold text-cyan-700">Ticket # <span class=" text-orange-500">222</span></h1>
                    <a class=" rounded-2xl text-xs font-bold text-red-700" href="">Cancelar Ticket</a>
                </div>
                <div class=" bg-white rounded-2xl pb-3">
                    <p class="rounded-lg bg-cyan-500 font-serif items-center justify-center flex font-bold text-white mb-1">PC no enciende</p>
                    <p class=" pl-3 font-serif font-bold text-cyan-500 text-sm">Estatus: <span class=" text-yellow-300 font-sans font-bold">En espera</span></p>
                    <p class=" pl-3 font-serif font-bold text-cyan-500 text-sm">Asignado a: <span class=" font-normal font-sans text-black">Fulanito</span></p>
                </div>
            </div>

        </div>
    </div>


</section>

@endsection