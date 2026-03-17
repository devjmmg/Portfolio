<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&family=Manrope:wght@200..800&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-white">
    <header class="sticky inset-0 z-10 bg-white">
        @include('layouts.navigation-guest')
    </header>   
    <main id="index" class="w-full max-w-7xl mx-auto flex lg:flex-row flex-col items-center justify-center min-h-[90vh] font-sans gap-10 scroll-mt-20">
        <div class="space-y-5 lg:w-1/2 text-center p-5">
            <p class="text-xl font-bold mt-10 md:mt-0">
                Hola, soy 
                <span class="text-lime-500">Juan Manuel</span>
            </p>
            <h1 class="text-4xl md:text-6xl font-bold">
                Desarrollador
                <span class="block">Full Stack</span>
            </h1>
            <p class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-lime-500 to-lime-300 bg-clip-text text-transparent">
                Creando aplicaciones web modernas
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-4 pt-8">
                <a href="#projects" class="w-full md:w-auto bg-lime-500 hover:bg-lime-600 text-white font-semibold px-6 py-3 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">
                    Ver proyectos
                </a>
                <a href="{{asset('storage/cv/JuanManuelMartinezGarcia_CV.pdf')}}" download class="w-full md:w-auto border flex justify-center items-center gap-2 border-gray-300 hover:border-lime-500 font-semibold px-6 py-3 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    Descargar CV
                </a>
            </div>
        </div>
        
        <div class="lg:w-1/2 bg-lime-500 p-10 pb-3 md:p-14 md:pb-0.5 rounded-[90%_90%_75%_55%/47%_60%_50%_50%] flex justify-center items-center">
            <img class="block rounded-[0%_0%_43%_26%/0%_0%_15%_15%]" src="{{asset('storage/me/me3.png')}}" alt="Juan Manuel">
        </div>
        
    </main>
    
    <div class="overflow-hidden">
        <section id="about" class="min-h-[90vh] scroll-mt-20 bg-lime-500 my-60 py-40 rotate-[5deg] scale-110">
            <div class="-rotate-[5deg] scale-100">
                <div class="max-w-7xl mx-auto">
                    <div class="w-1/2">
                        hola
                    </div>
                    <div class="w-1/2">
                        hola
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <section id="projects" class="min-h-[90vh] scroll-mt-20">
        <p>Proyectos</p>
    </section>
    
    <section id="contact" class="min-h-[90vh] scroll-mt-20">
        <p>Contacto</p>
    </section>
    
    <footer class="mt-4 bg-lime-500 p-6">
        <p class="font-sans text-base font-semibold text-white text-center">
            © {{ date('Y') }} Juan Manuel Martínez García. Todos los derechos reservados.
        </p>
    </footer>
</body>
</html>
