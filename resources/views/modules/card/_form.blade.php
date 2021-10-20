@csrf
<div>
    <x-label for="name" :value="__('Nombre')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
        <div>
            <x-label for="photo" :value="__('Foto')" />
                <x-input id="photo" class="block" type="file" name="photo" />
        </div>
    <x-label for="rol" :value="__('Rol')" />
        <select name="rol" id="rol" required>
            <option value="">Seleccione</option>
            <option value="Programadores">Programadores</option>
            <option value="Modulo">Modulo</option>
            <option value="TipoError">Tipo de Error</option>
        </select>
    <x-label for="state" :value="__('Estado')" />
        <select name="state" id="state" required>
            <option value="">Seleccione</option>
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select>
</div>
<div class="flex items-center justify-end mt-4">
    <a href="{{ route('cards.index') }}">Cancelar</a>
    <hr>
    <x-button type="submit" class="ml-4">
        {{ __('Crear')}}
    </x-button>
</div>
