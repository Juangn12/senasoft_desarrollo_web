<div class="grid grid-cols-2 gap-6">
    <div class="grid grid-row-2 gap-6">
        <div>
            <x-label for="name" :value="__('Nombre')"></x-label>
            <x-input class="block mt-1 w-full" type="text" name="name" id="name" value="{{ old('name', $card->name) }}" required autofocus></x-input>
        </div>
        <div>
            <x-label for="rol" :value="__('Rol')"></x-label>
            <?php $options = ['' => 'Seleccione', 'Programadores' => 'Programadores', 'Modulo' => 'Modulo', 'Tipo de Error' => 'Tipo de Error'];?>
            <x-select name="rol" id="rol" :options="$options" value="{{ old('rol', $card->rol) }}" required>  </x-select>
        </div>
    </div>
    <div class="grid grid-rows-2 gap-6">
        <div>
            <x-label for="photo" :value="__('Photo')"></x-label>
            <x-input class="block mt-1 w-full" type="file" name="photo" id="photo" value="{{ old('photo', $card->photo) }}" required="{{ $exigencia }}"></x-input>
        </div>
        <div>
            <x-label for="state" :value="__('Estado')"></x-label>
            <?php $options = ['' => 'Seleccione', 'Activo' => 'Activo', 'Inactivo' => 'Inactivo'];?>
            <x-select name="state" id="state" :options="$options" value="{{ old('state', $card->rol) }}" required>  </x-select>
        </div>
    </div>
</div>

<div class="flex items-center justify-end mt-4">
    <x-button class="text-black" href="{{ route('cards.index') }}">
        {{ __('Cancelar') }}
    </x-button>
    <x-button class="ml-3">
        {{ $btnText }}
    </x-button>
</div>
