<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cartas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Hola mundo en index de cards</h1>
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('cards.create') }}">Crear carta</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Imagen</th>
                                <th>Rol</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cards as $card)
                            <tr>
                                <td>{{ $card->name }}</td>
                                <td>
                                    @if(!empty($card->photo))
                                        <span>Si hay imagen</span>
                                    @else
                                        <span>No hay imagen</span>
                                    @endif
                                </td>
                                <td>{{ $card->rol }}</td>
                                <td>{{ $card->state }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
