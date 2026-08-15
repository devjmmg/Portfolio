export default function Home() {
    return (
        <div className="grid grid-cols-1 md:grid-cols-2 gap-4 items-center min-h-[calc(100vh-60px)]">
            <div className="text-center order-2 md:order-1 space-y-6">
                <p className="text-2xl font-medium text-gray-500">Hola, Soy</p>
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent">Juan Manuel Martínez García</h2>
                <p className="text-2xl font-semibold text-gray-500">Desarrollador Full Stack</p>
                <p className="text-gray-500">Me apasiona programar y construir aplicaciones web modernas con código limpio y soluciones creativas. Me gusta transformar ideas en productos funcionales y escalables que marquen la diferencia.</p>
                <div className="flex justify-evenly gap-4">
                    <a
                        href="/cv/CV-Juan-Manuel-Martinez-Garcia.pdf"
                        download
                        className="
                            px-6 py-3 w-40
                            rounded-md
                            text-white
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
                            px-6 py-3 w-40
                            rounded-md
                            border border-gray-300
                            text-gray-600
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
            <div className="order-1 md:order-2">
                <img src="/img/me.png" alt="Juan Manuel Martínez García" className="w-md md:w-xl mx-auto h-auto" />
            </div>
        </div>
    )
}
