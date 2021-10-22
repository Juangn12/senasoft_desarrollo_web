<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear carta') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('cards.store') }}">
                        @csrf
                        @method('PUT')
                        @include('modules.card._form',['btnText' => 'Crear', 'exigencia' => 'required'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
