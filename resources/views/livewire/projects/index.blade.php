<div>
    @forelse ($projects as $project)
        <div wire:key='project-{{ $project->id }}' class="bg-white shadow-sm rounded mt-2 p-4 flex flex-col items-center justify-center md:flex-row gap-5 md:justify-between">
            
            <div class="flex items-center justify-center gap-3 w-full">

                <div x-data="{ open: false }" class="relative">
                    <img 
                        src="{{ asset('storage/projects/' . $project->image) }}" 
                        alt="{{ $project->name }}" 
                        class="w-10 h-10 cursor-pointer"
                        @click="open = true"
                    >
                    <div 
                        x-show="open"
                        x-cloak
                        x-transition 
                        class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50"
                        @click.self="open = false"
                    >
                        <img 
                            src="{{ asset('storage/projects/' . $project->image) }}" 
                            alt="{{ $project->name }}" 
                            class="max-h-[90vh] max-w-[90vw] rounded shadow-lg"
                        >
                    </div>
                </div>

                <div class="flex flex-col w-32 min-w-0">
                    <p class="text-md font-medium text-gray-800 truncate">
                        {{ $project->name }}
                    </p>

                    <p class="text-sm text-gray-500 truncate">
                        {{ $project->slug }}
                    </p>

                    <span class="text-xs font-semibold {{ $project->active ? 'text-green-500' : 'text-red-500' }}">
                        {{ $project->active ? 'Activo' : 'Inactivo' }}
                    </span>
                </div>

                <div class="w-full" x-data="{ open: false, showButton: false }" x-init="
                    $nextTick(() => {
                        const check = () => {
                            let p = $refs.text;
                            if (p) showButton = p.scrollHeight > p.clientHeight;
                        }
                        check();
                        window.addEventListener('resize', check);
                    })
                ">
                    <!-- TEXTO -->
                    <p 
                        x-ref="text"
                        class="text-gray-500 text-sm [overflow-wrap:anywhere]"
                        :class="open ? '' : 'line-clamp-5'"
                    >
                        {{ $project->description }}
                    </p>

                    <!-- BOTÓN solo si showButton es true -->
                    <button 
                        x-show="showButton"
                        @click="open = !open" 
                        class="text-xs text-blue-500 hover:text-blue-600 font-bold cursor-pointer focus:outline-none"
                    >
                        <span x-text="open ? 'Ver menos' : 'Ver más'"></span>
                    </button>
                </div>

            </div>

            <!-- DERECHA (ACCIONES) -->
            <div class="flex justify-between items-center gap-2">

                <!-- TOGGLE ACTIVE -->
                <button type="button" wire:click="toggleActive({{$project->id}})" class="p-2 text-xs focus:outline-none focus:ring-2 focus:ring-offset-2 rounded {{ $project->active ? 'bg-red-100 text-red-500 focus:ring-red-500 hover:text-red-600' : 'bg-green-100 text-green-600 focus:ring-green-500 hover:text-green-600' }} transition-colors duration-300 ease-linear">
                    {{ $project->active ? 'Desactivar' : 'Activar' }}
                </button>

                @isset($github)
                    @if ($project->github_url)
                        <a href="{{$project->github_url}}"
                            target="_blank" rel="noopener noreferrer"
                            class="w-8 h-8bg-gray-100 text-black hover:bg-gray-200 p-1 flex items-center justify-center transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 rounded">
                            <img src="{{asset('storage/icons/' . $github->icon)}}" alt="{{$github->name}}">
                        </a>
                    @endif
                @endisset

                <a href="{{$project->demo_url}}"
                    target="_blank" rel="noopener noreferrer"
                    class="w-8 h-8 bg-gray-100 text-gray-500 hover:text-gray-600 p-1 flex items-center justify-center transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg>
                </a>

                <x-text-input onchange="updateValue(event)" title="Orden del proyecto" wire:change.debounce.500ms="updateOrder({{ $project->id }}, $event.target.value)" type="number" min="1" class="!w-16 !mt-0 !h-8" value="{{$project->order}}"/>

                <a href="{{ route('projects.edit', $project) }}"
                    class="w-8 h-8 bg-amber-100 text-amber-500 hover:text-amber-600 p-1 flex items-center justify-center transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </a>

                <button type="button" wire:click="$dispatch('delete', {{$project->id}})" class="w-8 h-8 bg-red-100 text-red-500 hover:text-red-600 p-1 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
    @empty
        <p class="text-sm text-center text-gray-500">Aún no hay proyectos registrados.</p>
    @endforelse

    <div class="mt-4">
        {{$projects->links()}}
    </div>

</div>

@push('scripts')
    <script>
        const updateValue = (e) => {
            e.target.value = Math.max(1, e.target.value);
        }
        document.addEventListener('livewire:init', () => {

            Livewire.on('delete', id => {
                Swal.fire({
                    title: "¿Eliminar proyecto?",
                    text: "Esta acción no se puede deshacer",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#ef4444",
                    cancelButtonColor: "#6b7280",
                    confirmButtonText: "Sí, eliminar",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('destroy', { project: id });
                        Swal.fire({
                            title: "Eliminado",
                            text: "El proyecto fue eliminado correctamente",
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