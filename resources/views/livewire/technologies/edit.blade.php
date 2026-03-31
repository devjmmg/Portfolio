<form wire:submit.prevent="update" class="mt-8">
    
    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Nombre de la tecnología')" />
        <x-text-input id="name" class="block mt-2 w-full" type="text" wire:model.live="name" autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    
    <!-- Slug -->
    <div class="mt-4">
        <x-input-label for="slug" :value="__('Slug')" />
        <x-text-input id="slug" class="block mt-2 w-full bg-gray-100 text-black" type="text" wire:model.live="slug" value="{{$slug}}" disabled />
        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
    </div>
    
    <div class="w-full flex flex-col md:flex-row gap-4">
        <!-- Input -->
        <div class="mt-4 md:w-1/2">
            <x-input-label for="icon" :value="__('Icono')" />
            <x-text-input 
                id="icon" 
                class="block mt-2 w-full rounded-none" 
                type="file" 
                wire:model="icon" 
            />
            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
        </div>

        <!-- Preview -->
        <div class="mt-4 md:w-1/2 flex items-center justify-center">
            @if ($icon)
                <img loading="lazy" src="{{ $icon->temporaryUrl() }}" class="w-20 h-20 md:w-10 md:h-10" alt="{{ $name }}">
            @else
                <img loading="lazy" src="{{ asset('storage/icons/' . $technology->icon) }}" class="w-20 h-20 md:w-10 md:h-10 p-1" alt="{{ $technology->name }}" >
            @endif
        </div>

    </div>
    
    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Guardar') }}
        </x-primary-button>
    </div>
</form>