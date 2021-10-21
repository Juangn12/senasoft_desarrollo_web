@csrf
<div>

        @method('PUT')
        @csrf
        <div class="grid grid-cols-2 gap-6">
            <div class="grid grid-row-2 gap-6">
                <div>
                    <x-label for="name" :value="__('Nombre')"></x-label>
                    <x-input class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $card->name) }}" autofocus></x-input>
                </div>
                <div>
                    <x-label for="rol" :value="__('Rol')"></x-label>
                    <?php $options = ['' => 'Seleccione', 'Programadores' => 'Programadores', 'Modulo' => 'Modulo', 'Tipo de Error' => 'Tipo de Error'];?>
                    <x-select name="rol" :options="$options" >  </x-select>
                </div>
            </div>
            <div class="grid grid-rows-2 gap-6">
                <div>
                    <x-label for="photo" :value="__('Photo')"></x-label>
                    <x-input class="block mt-1 w-full" type="file" name="photo" value="{{ old('photo', $card->photo) }}"></x-input>
                </div>
                <div>
                    <x-label for="state" :value="__('Estado')"></x-label>
                    <?php $options = ['' => 'Seleccione', 'Activo' => 'Activo', 'Inactivo' => 'Inactivo'];?>
                    <x-select name="rol" :options="$options" >  </x-select>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-button class="ml-3">
                Crear
            </x-button>
        </div>



    <label for="name">Nombre</label>
        <input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $card->name) }}" required autofocus />
        <div>
            <label for="photo">Foto</label>
                <input id="photo" class="block" type="file" name="photo" {{ $exigencia }}/>
        </div>
    <label for="rol">Rol</label>
        <select name="rol" id="rol" required>
            <option value="" >Seleccione</option>
            <option value="Programadores"{{ old('rol', $card->rol)== 'Programadores'? 'selected': ''}}>Programadores</option>
            <option value="Modulo" {{ old('rol', $card->rol)== 'Modulo'? 'selected': ''}}>Modulo</option>
            <option value="Tipo de Error" {{ old('rol', $card->rol)== 'Tipo de Error'? 'selected': ''}}>Tipo de Error</option>
        </select>
    <label for="state">Estado</label>
        <select name="state" id="state" required>
            <option value="">Seleccione</option>
            <option value="Activo" {{ old('rol', $card->state)== 'Activo'? 'selected': ''}}>Activo</option>
            <option value="Inactivo" {{ old('rol', $card->state)== 'Inactivo'? 'selected': ''}}>Inactivo</option>
        </select>
</div>
<div class="flex items-center justify-end mt-4">
    <a href="{{ route('cards.index') }}">Cancelar</a>
    <hr>
    <button type="submit" class="ml-4">
        {{ $btnText }}
    </button>
</div>
