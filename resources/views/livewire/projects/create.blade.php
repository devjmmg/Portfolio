<form wire:submit.prevent="store" class="mt-8">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        <div>
            <x-input-label for="name" :value="__('Nombre del proyecto')" />
            <x-text-input id="name" class="block mt-2 w-full" type="text" wire:model.live="name" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <div>
            <x-input-label for="slug" :value="__('Slug')" />
            <x-text-input id="slug" class="block mt-2 w-full bg-gray-100 text-black" type="text" wire:model.live="slug" value="{{$slug}}" disabled />
            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
        </div>
    </div>

    <div class="mt-4">
        <x-input-label for="description" :value="__('Descripción del proyecto')" />
        <textarea id="description" class="block mt-2 w-full border-gray-300 focus:border-lime-500 focus:ring-lime-500 rounded shadow-sm h-36" wire:model="description"></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="demo_url" :value="__('URL de la demo')" />
        <x-text-input id="demo_url" class="block mt-2 w-full" type="text" wire:model="demo_url" autofocus autocomplete="demo_url" />
        <x-input-error :messages="$errors->get('demo_url')" class="mt-2" />
    </div>
    
    <div class="mt-4">
        <x-input-label for="github_url" :value="__('URL de GitHub')" />
        <x-text-input id="github_url" class="block mt-2 w-full text-black" type="text" wire:model="github_url" />
        <x-input-error :messages="$errors->get('github_url')" class="mt-2" />
    </div>
    
    <div class="w-full flex flex-col md:flex-row gap-4">
        <!-- Input -->
        <div class="mt-4 md:w-1/2">
            <x-input-label for="image" :value="__('Imagen')" />
            <x-text-input 
                id="image" 
                class="block mt-2 w-full rounded-none" 
                type="file" 
                wire:model="image" 
            />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <!-- Preview -->
        <div class="mt-4 md:w-1/2 flex items-center justify-center">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" class="w-20 h-20 md:w-10 md:h-10" alt="{{ $name }}">
            @endif
        </div>

    </div>

    <div class="mt-4">
        <x-input-label for="image" :value="__('Tecnologías utilizadas')" />

        <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-5 gap-2 mt-4">
            @foreach($listTechnologies as $lt)
                <label class="flex items-center justify-between space-x-2 p-2 border rounded hover:bg-gray-50 cursor-pointer">
                    <div class="flex items-center gap-2">
                        <input 
                            type="checkbox" 
                            wire:model="technologies" 
                            value="{{ $lt->id }}" 
                            class="h-4 w-4 text-lime-600 border-gray-300 rounded"
                        />
                        <span class="text-gray-700">{{ $lt->name }}</span>
                    </div>
                    <img src="{{asset('storage/icons/' . $lt->icon)}}" class="w-8 h-8" alt="{{$lt->name}}">
                </label>
            @endforeach
        </div>
        <x-input-error :messages="$errors->get('technologies')" class="mt-2" />
    </div>
    
    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Guardar') }}
        </x-primary-button>
    </div>
</form>