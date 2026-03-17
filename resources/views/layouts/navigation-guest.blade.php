<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 ">
            
            <x-application-logo />
            
            <div class="lg:flex gap-6 text-sm font-sans hidden">
                <a href="#index" class=" text-lime-500 nav-link-guest font-semibold hover:text-lime-500 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">Inicio</a>
                <a href="#about" class="text-gray-500 nav-link-guest font-semibold hover:text-lime-500 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">Sobre mí</a>
                <a href="#projects" class="text-gray-500 nav-link-guest font-semibold hover:text-lime-500 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">Proyectos</a>
                <a href="#contact" class="text-gray-500 nav-link-guest font-semibold hover:text-lime-500 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">Contacto</a>
            </div>
            
            @if (Route::has('login'))
                <a href="{{route('login')}}" class="lg:flex text-sm font-sans hidden bg-lime-500 hover:bg-lime-600 text-white font-semibold px-6 py-3 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">
                    Iniciar sesión
                </a>
            @endif
            
            <button @click="open = !open" class="block lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        
        <div 
        x-show="open"
        x-transition:enter="transition ease-linear duration-300"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-linear duration-300"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="lg:hidden mt-4 flex flex-col divide-y px-4"
        >
        {{-- <div x-show="open" class="lg:hidden mt-4 flex flex-col divide-y"> --}}
            @if (Route::has('login'))
            <a href="{{route('login')}}" class="py-4 font-semibold text-gray-500 hover:text-lime-500 transition">
                Iniciar sesión
            </a>
            @endif
            <a href="#index" class="text-lime-500 nav-link-guest py-4 font-semibold hover:text-lime-500 transition">
                Inicio
            </a>
            <a href="#about" class="text-gray-500 nav-link-guest py-4 font-semibol hover:text-lime-500 transition">
                Sobre mí
            </a>
            <a href="#projects" class="text-gray-500 nav-link-guest py-4 font-semibol hover:text-lime-500 transition">
                Proyectos
            </a>
            <a href="#contact" class="text-gray-500 nav-link-guest py-4 font-semibol hover:text-lime-500 transition">
                Contacto
            </a>
        </div>
    </div>
</nav>