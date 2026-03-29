<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tecnologías') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-4">
        <div class="flex justify-end">
            <a href="{{route('technologies.create')}}" class="block bg-lime-500 hover:bg-lime-600 transition-colors duration-300 ease-linear p-2 w-10 h-10 rounded text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>
        <div class="mt-4">
            @foreach ($technologies as $technology)
                <livewire:technologies.index :technology="$technology" />
            @endforeach
        </div>
        
    </div>
</x-app-layout>