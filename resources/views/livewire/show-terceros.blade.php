<div>
    <div class="flex justify-center mb-4">
        @livewire('create-terceros')
    </div>
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
        Listado de terceros
    </h2>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            @if ($terceros->count())
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-center 
                        text-gray-500 uppercase border-bdark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Departamento</th>
                            <th class="px-4 py-3">Municipio</th>
                            <th class="px-4 py-3">Tipo identificacion</th>
                            <th class="px-4 py-3">N° Identificacion</th>
                            <th class="px-4 py-3">Nombre</th>
                            <th class="px-4 py-3">Tipo Tercero</th>
                            <th class="px-4 py-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach ($terceros as $tercero)
                            <tr>
                                <td class="px-4 py-3 text-center text-sm">
                                    <p class="font-semibold">

                                        @php
                                            $TipoIdent = App\Models\TipoIdentificacion::where('id_tipoidentificacion', $tercero->tipoidentificacion_tercero);
                                        @endphp
                                        {{-- {{ $TipoIdent->nombre_tipoidentificacion }}</p> --}}
                                </td>
                                <td class="px-4 py-3 text-center text-sm">
                                    <p class="font-semibold">

                                        @php
                                            $TipoIdent = App\Models\TipoIdentificacion::where('id_tipoidentificacion', $tercero->tipoidentificacion_tercero);
                                        @endphp
                                        {{-- {{ $TipoIdent->nombre_tipoidentificacion }}</p> --}}
                                </td>
                                <td class="px-4 py-3 text-center text-sm">
                                    <p class="font-semibold">

                                        @php
                                            $TipoIdent = App\Models\TipoIdentificacion::where('id_tipoidentificacion', $tercero->tipoidentificacion_tercero);
                                        @endphp
                                        {{-- {{ $TipoIdent->nombre_tipoidentificacion }}</p> --}}
                                </td>
                                <td class="px-4 py-3 text-center text-xs">
                                    {{ $tercero->numeroidentificacion_tercero }}
                                </td>
                                <td class="px-4 py-3 text-center text-xs">
                                    {{ $tercero->primernombre_tercero }} {{ $tercero->segundonombre_tercero }}
                                    {{ $tercero->primerapellido_tercero }} {{ $tercero->segundoapellido_tercero }}
                                </td>
                                <td class="px-4 py-3 text-center text-sm">
                                    <p class="font-semibold">

                                        @php
                                            $TipoIdent = App\Models\TipoIdentificacion::where('id_tipoidentificacion', $tercero->tipoidentificacion_tercero);
                                        @endphp
                                        {{-- {{ $TipoIdent->nombre_tipoidentificacion }}</p> --}}
                                </td>
                                <td class="px-4 py-3 text-center">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                            aria-label="Edit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </button>
                                        <a class="ml-4 cursor-pointer"
                                            wire:click="$emit('deleteTercero',{{ $tercero->id_tercero }})">
                                            <i class="fas fa-trash">Eliminar</i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    @push('js')
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Livewire.on('deleteTercero', TerceroId => {
                                Swal.fire({
                                    title: '¿Estas seguro de eliminar el tercero?',
                                    text: "...",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Si, lo quiero eliminar',
                                    cancelButtonText: 'Cancelar'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Livewire.emitTo('show-terceros', 'delete', TerceroId)
                                        Swal.fire(
                                            'Eliminado!',
                                            'El tercero fue eliminado correctamente',
                                            'success'
                                        )
                                    }
                                })
                            });
                        </script>
                    @endpush
                </table>
            @else
                <div class="text-center px-4 py-4">
                    No existe ningun tercero
                </div>
            @endif
        </div>
    </div>

</div>
