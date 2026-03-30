<div>
    @forelse ($technologies as $technology)
        <div wire:key='tech{{ $technology->id }}' class="bg-white shadow-sm rounded mt-2 p-4 flex flex-col items-center justify-center sm:flex-row gap-5 sm:justify-between sm:gap-0">
            <!-- IZQUIERDA -->
            <div class="flex items-center gap-3">

                <!-- ICONO -->
                <img src="{{ asset('storage/icons/' . $technology->icon) }}" class="w-10 h-10 p-1" alt="{{ $technology->name }}" >

                <!-- INFO -->
                <div class="flex flex-col justify-center items-start">
                    <p class="text-lg font-medium text-gray-800">{{ $technology->name }}</p>
                    <p class="text-sm text-gray-500">{{ $technology->slug }}</p>

                    <!-- STATUS -->
                    <span class="text-xs font-semibold {{ $technology->active ? 'text-green-500' : 'text-red-500' }}">
                        {{ $technology->active ? 'Activo' : 'Inactivo' }}
                    </span>
                </div>
            </div>

            <!-- DERECHA (ACCIONES) -->
            <div class="flex items-center gap-2">

                <!-- TOGGLE ACTIVE -->
                <button type="button" wire:click="toggleActive({{$technology->id}})" class="px-2 py-1 text-xs rounded {{ $technology->active ? 'bg-red-100 text-red-500 hover:text-red-600' : 'bg-green-100 text-green-600 hover:text-green-600' }} transition-colors duration-300 ease-linear">
                    {{ $technology->active ? 'Desactivar' : 'Activar' }}
                </button>

                <a href="{{ route('technologies.edit', $technology) }}"
                class="w-8 h-8 bg-amber-100 text-amber-500 hover:text-amber-600 p-1 rounded flex items-center justify-center transition-colors duration-300 ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </a>

                <button type="button" wire:click="$dispatch('delete', {{$technology->id}})" class="w-8 h-8 bg-red-100 text-red-500 hover:text-red-600 p-1 rounded transition-colors duration-300 ease-linear">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
    @empty
        <p class="text-sm text-center text-gray-500">Aún no hay tecnologías registradas.</p>
    @endforelse

    <div class="mt-4">
        {{ $technologies->links() }}
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:init', () => {
            Livewire.on('delete', id => {
                Swal.fire({
                    title: "¿Eliminar tecnología?",
                    text: "Esta acción no se puede deshacer",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#ef4444",
                    cancelButtonColor: "#6b7280",
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('destroy', { technology: id });
                        Swal.fire({
                            title: "Eliminado",
                            text: "La tecnología fue eliminada correctamente",
                            icon: "success",
                            timer: 3000,
                            showConfirmButton: false
                        });
                    }
                });
            });
        });
    </script>
@endpush