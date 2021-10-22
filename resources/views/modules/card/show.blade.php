<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Información de la carta') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">
        <div class="relative flex items-top justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <img
                 src="{{ '/storage/'.$card->photo }} "
                 alt="{{ $card->name }}">
        </div>
        <div class="relative flex items-top justify-center max-w-7xl mx-auto sm:px-6 lg:px-8">
            <br>
            <hr>
            <strong><i class="fas fa-sort-numeric-up-alt"></i>&nbsp;Nombre</strong>
            <p class="fond-semibold">{{ $card->name }}</p>
            <hr>
            <br>
            <strong><i class="far fa-file-alt mr-1"></i>&nbsp;Rol</strong>
            <p class="text-muted">{{ $card->rol }}</p>
            <hr>
            <br>
            <strong><i class="far fa-file-alt mr-1"></i>&nbsp;Estado</strong>
            <p class="text-muted">{{ $card->state }}</p>
            <hr>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('cards.index') }}">Volver</a>
        </div>
    </div>
</x-app-layout>
