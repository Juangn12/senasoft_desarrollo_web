<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gestionar Cartas') }}
        </h2>
    </x-slot>
    @can('cards')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="card">
                    <div class="card-header">
                        {{--Aca se puede agregar el filtrador de datos--}}
                         <!-- input class="form-control" type="" -->
                    </div>
                    <div class="card-body">

                        <x-table>
                            <x-slot name="header">
                                <x-table-column>Nombre</x-table-column>
                                <x-table-column>Imagen</x-table-column>
                                <x-table-column>Rol</x-table-column>
                                <x-table-column>Estado</x-table-column>
                                <x-table-column>Acciones</x-table-column>
                            </x-slot>
                            @foreach($cards as $card)
                                <tr>
                                    <x-table-column>{{$card->name }}</x-table-column>
                                    <x-table-column>
                                        @if(!empty($card->photo))
                                            <span>Si hay imagen</span>
                                        @else
                                            <span>No hay imagen</span>
                                        @endif
                                    </x-table-column>
                                    <x-table-column>{{ $card->rol }}</x-table-column>
                                    <x-table-column>{{$card->state}}</x-table-column>
                                    <x-table-column>
                                        <form method="POST" action="{{ route('cards.destroy', $card) }}">
                                            <x-badge theme="indigo"><a href="{{ route('cards.show',$card) }}">Ver</a></x-badge>
                                            <x-badge theme="yellow"><a href="{{ route('cards.edit',$card) }}">Editar</a></x-badge>
                                            @csrf
                                            @method('DELETE')
                                            <x-badge theme="red"><button type="submit">Eliminar</button></x-badge>
                                        </form>
                                    </x-table-column>
                                </tr>
                            @endforeach
                        </x-table>
                    </div>
                    <div class="card-footer">
                        {{--Aca se pueden colocar los links de paginacion--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan

</x-app-layout>
