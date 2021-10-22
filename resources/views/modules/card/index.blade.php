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

                        <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                            <thead>
                            <tr class="text-center font-bold">
                                <x-table-column>Nombre</x-table-column>
                                <x-table-column>Imagen</x-table-column>
                                <x-table-column>Rol</x-table-column>
                                <x-table-column>Estado</x-table-column>
                                <x-table-column>Acciones</x-table-column>
                            </tr>
                            </thead>
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
                                            <a class="btn btn-primary" href="{{ route('cards.show',$card) }}">Ver</a>
                                            <a class="btn btn-primary" href="{{ route('cards.edit',$card) }}">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Eliminar</button>
                                        </form>
                                    </x-table-column>
                                </tr>
                            @endforeach
                        </table>

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
