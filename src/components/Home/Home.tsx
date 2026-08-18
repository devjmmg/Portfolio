export default function Home() {
    return (
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4 items-center min-h-[calc(100vh-60px)]">
            <div className="text-center order-2 md:order-1 space-y-7">
                <p className="text-2xl font-medium text-gray-500">Hola, Soy</p>
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent">Juan Manuel Martínez García</h2>
                <p className="text-2xl font-semibold text-gray-500">Desarrollador Full Stack</p>
                <p className="text-gray-500">Me apasiona programar y construir aplicaciones web modernas con código limpio y soluciones creativas. Me gusta transformar ideas en productos funcionales y escalables que marquen la diferencia.</p>
                <div className="flex gap-4 justify-center">
                    <a 
                        href="tel:+522223511153"
                        aria-label="Llamar por teléfono"
                        className="cursor-pointer"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </a>
                    <a 
                        href="#contact"
                        aria-label="Enviar correo"
                        className="cursor-pointer"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                            <path strokeLinecap="round" strokeLinejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>
                    </a>
                    <a
                        href="https://github.com/devjmmg"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Enlace a GitHub"
                    >
                        <img
                            src="/img/icons/github.svg"
                            alt="GitHub.svg"
                            className="size-6"
                        />
                    </a>
                </div>
                <div className="flex flex-col sm:flex-row justify-evenly gap-4">
                    <a
                        href="/cv/CV-Juan-Manuel-Martinez-Garcia.pdf"
                        download
                        className="
                            px-6 py-3
                            rounded-md
                            text-white
                            w-full md:w-40
                            font-medium
                            bg-linear-to-r from-indigo-500 to-indigo-950
                            hover:from-indigo-950 hover:to-indigo-500
                            transition-colors duration-300 ease-linear cursor-pointer
                        "
                    >
                        Descargar CV
                    </a>
                    <a
                        href="#projects"
                        className="
                            px-6 py-3
                            rounded-md
                            border border-gray-300
                            text-gray-600
                            w-full md:w-40
                            font-medium
                            hover:border-indigo-500
                            hover:text-indigo-500
                            transition-colors duration-300 ease-linear
                        "
                    >
                        Ver proyectos
                    </a>
                </div>
            </div>
            <div className="relative order-1 md:order-2">

                {/* Gradiente inferior izquierdo */}
                <div className="absolute bottom-0 left-0 w-40 h-40 md:w-72 md:h-72 lg:w-96 lg:h-96 rounded-full bg-indigo-500/30 blur-3xl"></div>

                {/* Gradiente superior derecho */}
                <div className="absolute top-0 right-0 w-40 h-40 md:w-72 md:h-72 lg:w-96 lg:h-96 rounded-full bg-indigo-950/30 blur-3xl"></div>

                <img
                    src="/img/me.png"
                    alt="Juan Manuel Martínez García"
                    className="relative w-md md:w-xl mx-auto h-auto block mask-b-from-80% border-b border-white"
                />

            </div>
        </div>
    )
}
