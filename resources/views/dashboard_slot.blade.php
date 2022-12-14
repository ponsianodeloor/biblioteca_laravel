<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slot') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-alert_slot>
                    @slot('titulo')
                        Titulo de slot
                    @endslot
                    <p>Todo lo que se encuentra aqui es una variable slot en laravel</p>
                </x-alert_slot>
            </div>
        </div>
    </div>
</x-app-layout>
