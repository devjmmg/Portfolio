<form wire:submit.prevent="update" class="mt-8">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        <div>
            <x-input-label for="name" :value="__('Nombre del proyecto')" />
            <x-text-input id="name" name="name" type="text" wire:model.live="name" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <div>
            <x-input-label for="slug" :value="__('Slug')" />
            <x-text-input id="slug" name="slug" class="bg-gray-100" type="text" wire:model.live="slug" value="{{$slug}}" disabled />
            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
        </div>
    </div>

    <div class="mt-4">
        <x-input-label for="description" :value="__('Descripción del proyecto')" />
        <textarea id="description" name="description" class="block mt-2 w-full text-sm border-gray-300 shadow-sm focus:border-lime-500 focus:outline-none focus:ring-lime-500 rounded h-36" wire:model="description"></textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="demo_url" :value="__('URL de la demo')" />
        <x-text-input id="demo_url" name="demo_url" type="text" wire:model="demo_url" autofocus autocomplete="demo_url" />
        <x-input-error :messages="$errors->get('demo_url')" class="mt-2" />
    </div>
    
    <div class="mt-4">
        <x-input-label for="github_url" :value="__('URL de GitHub')" />
        <x-text-input id="github_url" name="github_url" type="text" wire:model="github_url" />
        <x-input-error :messages="$errors->get('github_url')" class="mt-2" />
    </div>
    
    <div class="mt-4">
        <x-input-label for="image" :value="__('Imagen')" />
        <x-text-input 
            id="image"
            name="image"
            class="block mt-2 w-full text-sm border-gray-300 shadow-sm focus:border-lime-500 focus:outline-none focus:ring-lime-500 rounded"
            type="file" 
            wire:model="image" 
        />
        <x-input-error :messages="$errors->get('image')" class="mt-2" />
    </div>

    <div class="mt-4">
        @if ($image)
            <img loading="lazy" src="{{ $image->temporaryUrl() }}" class="w-full" alt="{{ $name }}">
        @else
            <img loading="lazy" src="{{ asset('storage/projects/' . $imageCurrent) }}" class="w-full" alt="{{ $name }}">
        @endif
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
                            class="h-4 w-4 text-lime-600 border-gray-300 rounded block mt-2 text-sm shadow-sm focus:border-lime-500 focus:outline-none focus:ring-lime-500"
                        />
                        <span class="text-gray-700">{{ $lt->name }}</span>
                    </div>
                    <img loading="lazy" src="{{asset('storage/icons/' . $lt->icon)}}" class="w-8 h-8" alt="{{$lt->name}}">
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