<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar proyecto') }}
        </h2>
    </x-slot>
    
    <div class="p-4">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm rounded">
                <div class="p-6 text-gray-900">
                    <header>
                        <h2 class="text-lg font-medium text-gray-800">
                            {{ __('Información del proyecto') }}
                        </h2>
                        
                        <p class="mt-1 text-sm text-gray-500">
                            {{ __('Edita la información de tus proyectos.') }}
                        </p>
                    </header>
                    
                    <livewire:projects.edit :project="$project" />
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>