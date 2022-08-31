<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @php
                    $tipo = 'danger';
                @endphp
                <x-alert_slot_merge :type="$tipo" id="alerta" class="mb-4">
                    <x-slot name="titulo">
                        Titulo de slot
                    </x-slot>
                    <p>Todo lo que se encuentra aqui es una variable slot en laravel</p>
                </x-alert_slot_merge>
                <p>Espaciado</p>
            </div>
        </div>
    </div>
</x-app-layout>
