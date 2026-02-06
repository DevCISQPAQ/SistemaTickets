@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Dashboard</h1>

<div class="bg-white p-6 rounded shadow h-auto">
    Bienvenido al panel de administración 🚀

    <section class="flex-1 flex md:flex-row flex-col  gap-12 md:gap-2 py-4 md:h-220">

        <div x-data="{ open: false, isDesktop: window.innerWidth >= 768 }"
            x-init="window.addEventListener('resize', () => { isDesktop = window.innerWidth >= 768 })"
            class="bg-white shadow-lg rounded-xl flex flex-1 flex-col md:items-center justify-center p-4 md:m-2 shadow-cyan-500/50 overflow-y-auto">
            <h2 @click="if (!isDesktop) open = !open"
                class="text-2xl font-bold text-center mb-7 font-serif cursor-pointer md:cursor-default">Tickets</h2>
            <!-- CONTENEDOR DE TICKETS -->
            <div x-show="open || isDesktop" class=" flex-1 space-y-5 overflow-y-auto">
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

        <div x-data="{ open: false, isDesktop: window.innerWidth >= 768 } "
            x-init="window.addEventListener('resize', () => {isDesktop = window.innerWidth >= 768 })"
            class="bg-white shadow-lg rounded-xl flex flex-1 flex-col md:items-center justify-center p-4 md:m-2 shadow-cyan-500/50">
            <h2 @click="if (!isDesktop) open = !open"
                class="text-2xl font-bold text-center mb-7 font-serif cursor-pointer md:cursor-default">Tickets en proceso</h2>
            <div x-show="open || isDesktop" class=" flex-1 space-y-5 overflow-y-auto">
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

        <div x-data="{ open: false, isDesktop: window.innerWidth >= 768 }"
            x-init="window.addEventListener('resize', () => { isDesktop = window.innerWidth >= 768 })"
            class="bg-white shadow-lg rounded-xl flex flex-1 flex-col md:items-center justify-center p-4 md:m-2 shadow-cyan-500/50">
            <h2 @click="if (!isDesktop) open = !open" class="text-2xl font-bold text-center mb-7 font-serif cursor-pointer md:cursor-default">Tickets terminados</h2>
            <div x-show="open || isDesktop" class=" flex-1 space-y-5 overflow-y-auto">
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

</div>

@endsection