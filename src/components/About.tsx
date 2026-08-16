export default function About() {
    return (
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 items-center min-h-screen">
            <div className="flex justify-center order-2 md:order-1">
                <img src="/img/about.jpeg" alt="About me" className="
                    w-full max-w-lg h-auto
                    border-[2rem] border-white
                    shadow-2xl
                    rotate-2
                    transition-transform duration-300 ease-linear
                    hover:-rotate-2
                " />
            </div>
            <div className="space-y-8 order-1 md:order-2">
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent text-center">Sobre mi</h2>
                <p className="text-md text-gray-700 text-center md:text-left">
                    Mi nombre es Juan Manuel Martínez García. Me apasiona programar y convertir ideas en aplicaciones web funcionales, modernas y escalables. Disfruto enfrentar problemas, buscar soluciones creativas y escribir código limpio y mantenible. A lo largo de mi experiencia he trabajado con diferentes tecnologías como React, TypeScript, Laravel y Node.js, siempre buscando seguir aprendiendo y mejorar la forma en que construyo software.
                </p>
                <div className="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4">
                    <div className="flex flex-col justify-between items-center p-4 rounded-xl border border-gray-200 transition-all ease-linear duration-300 hover:scale-105 hover:border-indigo-500">
                        <div className="text-indigo-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                            </svg>
                        </div>

                        <h3 className="font-semibold text-gray-700 text-center">
                            Código limpio
                        </h3>

                        <p className="mt-2 text-sm text-gray-500 text-center">
                            Código claro, organizado y fácil de mantener.
                        </p>
                    </div>

                    <div className="flex flex-col justify-between items-center p-4 rounded-xl border border-gray-200 transition-all ease-linear duration-300 hover:scale-105 hover:border-indigo-500">
                        <div className="text-indigo-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg>
                        </div>

                        <h3 className="font-semibold text-gray-700 text-center">
                            Soluciones creativas
                        </h3>

                        <p className="mt-2 text-sm text-gray-500 text-center">
                            Busco soluciones prácticas para resolver problemas.
                        </p>
                    </div>

                    <div className="flex flex-col justify-between items-center p-4 rounded-xl border border-gray-200 transition-all ease-linear duration-300 hover:scale-105 hover:border-indigo-500">
                        <div className="text-indigo-500 mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                        </div>

                        <h3 className="font-semibold text-gray-700 text-center">
                            Aplicaciones escalables
                        </h3>

                        <p className="mt-2 text-sm text-gray-500 text-center">
                            Desarrollo pensando en el crecimiento del proyecto.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    )
}
