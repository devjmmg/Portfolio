<form wire:submit.prevent="store" class="mt-8">
    
    <!-- Name -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        <div>
            <x-input-label for="name" :value="__('Nombre de la tecnología')" />
            <x-text-input id="name" name="name" type="text" wire:model.live="name" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Slug -->
        <div>
            <x-input-label for="slug" :value="__('Slug')" />
            <x-text-input id="slug" name="slug" class="bg-gray-100" type="text" wire:model.live="slug" value="{{$slug}}" disabled />
            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
        </div>
    </div>
    
    <div class="w-full flex flex-col md:flex-row gap-4">
        <!-- Input -->
        <div class="mt-4 md:w-1/2">
            <x-input-label for="icon" :value="__('Icono')" />
            <x-text-input 
                id="icon"
                name="icon"
                class="block mt-2 w-full text-sm border-gray-300 shadow-sm focus:border-lime-500 focus:outline-none focus:ring-lime-500 rounded"
                type="file" 
                wire:model="icon" 
            />
            <x-input-error :messages="$errors->get('icon')" class="mt-2" />
        </div>

        <!-- Preview -->
        <div class="mt-4 md:w-1/2 flex items-center justify-center">
            @if ($icon)
                <img loading="lazy" src="{{ $icon->temporaryUrl() }}" class="w-20 h-20 md:w-10 md:h-10" alt="{{ $name }}">
            @endif
        </div>

    </div>
    
    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Guardar') }}
        </x-primary-button>
    </div>
</form>