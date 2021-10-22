<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Información de la carta') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4">

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="grid grid-cols-2 gap-6">
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
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="text-black" href="{{ route('cards.index') }}">
                                {{ __('Volver') }}
                            </x-button>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>
