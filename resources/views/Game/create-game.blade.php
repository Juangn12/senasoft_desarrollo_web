<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva partida') }}
        </h2>
    </x-slot>
        <div class="">
            <form method="POST" action="{{ route('games.store') }}">
                @csrf
                <button>Generar  codigo</button>
            </form>
        </div>
</x-app-layout>
