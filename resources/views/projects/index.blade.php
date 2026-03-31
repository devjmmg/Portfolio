<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Proyectos') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-4">

        @if (session('success'))
            <div 
                x-data="{ show: true }"
                x-init="setTimeout(() => show = false, 3000)"
                x-show="show"
                x-transition
                class="bg-green-100 text-green-600 p-4 rounded mb-4"
            >
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-end">
            <a href="{{route('projects.create')}}" class="block bg-lime-500 hover:bg-lime-600 transition-colors duration-300 ease-linear p-2 w-10 h-10 text-white focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>
        <div class="mt-4">
            <livewire:projects.index />
        </div>
        
    </div>
</x-app-layout>