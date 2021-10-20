<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Información de la carta') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">
        <div>
            Hola mundo
        </div>
        <div>
            <img src="{{ '/storage/'.$card->photo }} "
                 alt="{{ $card->name }}">
        </div>
    </div>
</x-app-layout>
