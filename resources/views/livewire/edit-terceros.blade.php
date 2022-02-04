<div>
    <x-jet-secondary-button wire:click="$set('open',true)">
        Editar
    </x-jet-secondary-button>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title" class="text-center">
            Editar tercero
        </x-slot>
        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Tipo de identificacion"></x-jet-label>
                <select wire:model="tipo_identificacion" class="w-full">
                    @foreach ($tipo_identificaciones as $tipo_ident)
                        <option value="{{ $tipo_ident->id_tipoidentificacion }}" {{}}>
                            {{ $tipo_ident->nombre_tipoidentificacion }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="tipo_identificacion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Numero de identificacion"></x-jet-label>
                <x-jet-input type="number" class="w-full" wire:model="num_identificacion"></x-jet-input>
                <x-jet-input-error for="num_identificacion" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Tipo de tercero"></x-jet-label>
                <select wire:model="tipo_tercero" class="w-full">
                    <option value="">--Seleccione un tipo de tercero</option>
                    @foreach ($tipo_terceros as $tercero)
                        <option value="{{ $tercero->id_tercero }}">
                            {{ $tercero->nombre_tipo_tercero }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="tipo_tercero" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Primer nombre"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="nombre1"></x-jet-input>
                <x-jet-input-error for="nombre1" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Segundo nombre"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="nombre2"></x-jet-input>
                <x-jet-input-error for="nombre2" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Primer apellido"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="apellido1"></x-jet-input>
                <x-jet-input-error for="apellido1" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Segundo apellido"></x-jet-label>
                <x-jet-input type="text" class="w-full" wire:model="apellido2"></x-jet-input>
                <x-jet-input-error for="apellido2" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Departamento"></x-jet-label>
                <select wire:model="departamento" class="w-full">
                    <option value="">--Seleccione un departamento</option>
                    @foreach ($departamentos as $dep)
                        <option value="{{ $dep->id_departamento }}">
                            {{ $dep->nombre_departamento }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="departamento" />
            </div>
            <div class="mb-4">
                <x-jet-label value="Municipio"></x-jet-label>
                <select wire:model="municipio" class="w-full">
                    <option value="">--Seleccione un municipio</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->id_municipio }}">
                            {{ $municipio->nombre_municipio }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="municipio" />
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-secondary-button wire:click="save">
                Guardar
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
