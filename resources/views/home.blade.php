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
    <main id="index" class="w-full max-w-7xl mx-auto flex lg:flex-row flex-col items-center justify-center min-h-screen font-sans gap-10 scroll-mt-16">
        <div class="space-y-5 lg:w-1/2 p-5 flex flex-col justify-center items-center">
            <p class="text-xl font-bold mt-10 md:mt-0 text-pretty text-neutral-900 text-center">
                Hola, soy 
                <span class="text-lime-500 text-pretty">Juan Manuel</span>
            </p>
            <h1 class="text-4xl sm:text-6xl font-bold text-neutral-900 text-pretty text-center">
                Desarrollador
                <span class="block">Full Stack</span>
            </h1>
            <p class="text-pretty text-4xl md:text-5xl font-bold bg-gradient-to-r from-lime-500 to-orange-500 bg-clip-text text-transparent text-center">
                Creando aplicaciones web modernas
            </p>
            <div class="flex flex-col xs:flex-row items-center justify-center gap-4 pt-8 text-center">
                <a href="mailto:mg.jmanuel7@gmail.com" class="p-2 hover:bg-gray-300 transition-colors duration-300 ease-linear rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </a>
                <a href="https://github.com/devjmmg" target="_blank" rel="noopener noreferrer" class="p-2 hover:bg-gray-300 transition-colors duration-300 ease-linear rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0C5.37 0 0 5.373 0 12c0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.016-2.04-3.338.724-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.089-.744.083-.729.083-.729 1.205.085 1.84 1.237 1.84 1.237 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.304.76-1.604-2.665-.304-5.467-1.335-5.467-5.933 0-1.31.468-2.38 1.235-3.22-.123-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.3 1.23a11.5 11.5 0 0 1 3-.403c1.02.005 2.045.137 3 .403 2.29-1.552 3.296-1.23 3.296-1.23.654 1.653.242 2.873.12 3.176.77.84 1.233 1.91 1.233 3.22 0 4.61-2.807 5.625-5.48 5.921.43.37.815 1.096.815 2.21 0 1.595-.014 2.88-.014 3.27 0 .32.216.694.825.576C20.565 21.795 24 17.303 24 12c0-6.627-5.373-12-12-12z"/>
                    </svg>
                </a>
                <a href="{{asset('storage/cv/JuanManuelMartinezGarcia_CV.pdf')}}" download class="text-pretty text-neutral-900 border flex justify-center items-center gap-2 border-gray-300 hover:border-lime-500 font-semibold px-6 py-3 transition-colors duration-300 ease-linear focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                    Descargar CV
                </a>
            </div>
        </div>
        
        <div class="w-11/12 mx-auto md:w-3/5 lg:w-1/2 bg-lime-500 p-10 pb-0 md:p-14 md:pb-0.5 rounded-[90%_90%_75%_55%/47%_60%_50%_50%] flex justify-center items-center">
            <img loading="lazy" class="block rounded-[0%_0%_43%_26%/0%_0%_17%_15%] sm:rounded-[0%_0%_43%_26%/0%_0%_20%_15%] md:rounded-[0%_0%_43%_26%/0%_0%_13%_15%] lg:rounded-[0%_0%_43%_26%/0%_0%_15%_15%]" src="{{asset('storage/me/me.png')}}" alt="Juan Manuel">
        </div>
        
    </main>
    
    <section id="about" class="scroll-mt-20 md:scroll-mt-16 lg:scroll-mt-0">
        <div class="min-h-screen flex items-center max-w-5xl mx-auto px-5 mt-20 md:mt-0">
            
            <div class="w-full">
                
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-lime-500 to-orange-500 bg-clip-text text-transparent">
                    Sobre mí
                </h2>
                
                <div class="w-20 h-1 bg-gradient-to-r from-lime-500 to-orange-500 mt-4 rounded"></div>
                
                <p class="mt-8 text-md text-gray-500 font-sanst text-left">
                    Soy Juan Manuel Martínez García, desarrollador web Full Stack apasionado por la programación y la creación de sistemas funcionales.
                </p>
                
                <p class="mt-2 text-md text-gray-500 font-sanst text-left">
                    Me dedico a desarrollar aplicaciones completas desde cero, trabajando tanto el backend como el frontend con tecnologías modernas.
                </p>
                
                <p class="mt-2 text-md text-gray-500 font-sanst text-left">
                    Tengo experiencia construyendo APIs, integrando interfaces dinámicas y gestionando bases de datos, siempre buscando soluciones claras y bien estructuradas.
                </p>
                
                <p class="mt-2 text-md text-gray-500 font-sanst text-left">
                    Disfruto optimizar procesos, resolver problemas y crear herramientas que aporten valor en cada proyecto.
                </p>
                
                <!-- TECNOLOGÍAS -->
                <div class="mt-4">
                    <p class="text-md text-gray-500 font-sans">
                        Tecnologías que utilizo:
                    </p>
                    
                    <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-6 gap-8 items-center mt-4">
                        @foreach ($technologies as $t)
                            <!-- HTML -->
                            <div class="flex flex-col items-center gap-2 hover:scale-110 transition duration-300">
                                <img loading="lazy" src="{{ asset('storage/icons/' . $t->icon)}}" alt="{{$t->name}}" class="w-10 h-10">
                                <span class="text-sm text-gray-500">{{$t->name}}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
                
                <!-- STATS -->
                <div class="flex justify-center gap-10 mt-8">
                    <div>
                        <p class="text-3xl font-bold text-lime-500 text-center">+2</p>
                        <p class="text-sm text-gray-500 text-center">Años de experiencia</p>
                    </div>
                    
                    <div>
                        <p class="text-3xl font-bold text-orange-500 text-center">+10</p>
                        <p class="text-sm text-gray-500 text-center">Proyectos</p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    <section id="projects" class="scroll-mt-20 md:scroll-mt-16 lg:scroll-mt-0">
        <div class="min-h-screen flex items-center max-w-5xl mx-auto px-5 mt-20 md:mt-0">
            
            <div class="w-full">
                
                <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-lime-500 to-orange-500 bg-clip-text text-transparent">
                    Proyectos
                </h2>
                
                <div class="w-20 h-1 bg-gradient-to-r from-lime-500 to-orange-500 mt-4 rounded"></div>
                
                <p class="mt-8 text-md text-gray-500 font-sans">
                    Algunos de los proyectos en los que he trabajado:
                </p>
                
                <div class="grid grid-cols-1 xs:grid-cols-2 items-center mt-4">
                    


                </div>
            </div>
        </section>
        
        <section id="contact" class="min-h-screen scroll-mt-16">
            <p>Contacto</p>
        </section>
        
        <footer class="mt-4 bg-lime-800 p-6">
            <p class="font-sans text-base font-semibold text-white text-center">
                © {{ date('Y') }} Juan Manuel Martínez García. Todos los derechos reservados.
            </p>
        </footer>
    </body>
    </html>
    