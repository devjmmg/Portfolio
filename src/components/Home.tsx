export default function Home() {
    return (
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4 items-center min-h-[calc(100vh-60px)]">
            <div className="text-center order-2 md:order-1 space-y-6">
                <p className="text-2xl font-medium text-gray-500">Hola, Soy</p>
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent">Juan Manuel Martínez García</h2>
                <p className="text-2xl font-semibold text-gray-500">Desarrollador Full Stack</p>
                <p className="text-gray-500">Me apasiona programar y construir aplicaciones web modernas con código limpio y soluciones creativas. Me gusta transformar ideas en productos funcionales y escalables que marquen la diferencia.</p>
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
                    <button
                        className="
                            px-6 py-3
                            rounded-md
                            border border-gray-300
                            text-gray-600
                            w-full md:w-40
                            font-medium
                            hover:border-indigo-500
                            hover:text-indigo-500
                            transition-colors duration-300 ease-linear cursor-pointer
                        "
                    >
                        Contacto
                    </button>
                </div>
            </div>
            <div className="relative order-1 md:order-2">

                {/* Gradiente inferior izquierdo */}
                <div className="absolute bottom-0 left-0 w-60 h-60 md:w-72 md:h-72 lg:w-96 lg:h-96 rounded-full bg-indigo-500/30 blur-3xl"></div>

                {/* Gradiente superior derecho */}
                <div className="absolute top-0 right-0 w-60 h-60 md:w-72 md:h-72 lg:w-96 lg:h-96 rounded-full bg-indigo-950/30 blur-3xl"></div>

                <img
                    src="/img/me.png"
                    alt="Juan Manuel Martínez García"
                    className="relative w-md md:w-xl mx-auto h-auto block mask-b-from-20%"
                />

            </div>
        </div>
    )
}
