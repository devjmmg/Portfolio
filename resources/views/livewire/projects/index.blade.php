<div>
    @forelse ($projects as $project)
        <div class="bg-white shadow-sm rounded mt-2 p-4 flex flex-col items-center justify-center sm:flex-row gap-5 sm:justify-between sm:gap-0">
            
        </div>
    @empty
        <p class="text-sm text-center text-gray-500">Aún no hay proyectos registrados.</p>
    @endforelse

    <div class="mt-4">
        {{$projects->links()}}
    </div>
</div>

{{-- @push('scripts')
    <script>
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
@endpush --}}