<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear tecnología') }}
        </h2>
    </x-slot>
    
    <div class="p-4">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm rounded">
                <div class="p-6 text-gray-900">
                    <header>
                        <h2 class="text-lg font-medium text-gray-800">
                            {{ __('Información de tecnología') }}
                        </h2>
                        
                        <p class="mt-1 text-sm text-gray-500">
                            {{ __('Registra las tecnologías que utilizas en tus proyectos, como HTML, CSS, JavaScript, etc.') }}
                        </p>
                    </header>
                    
                    <livewire:technologies.create />
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>