import { useEffect, useState } from "react"

export default function Navbar() {

    const [ open, setOpen ] = useState<boolean>(false);

    const handleCloseMenu = () => {
        setOpen(false);
    };

    useEffect(() => {
        const mq = window.matchMedia("(min-width: 768px)");
        const handleResize = () => {
            if (mq.matches) {
                setOpen(false);
            }
        };
        window.addEventListener("resize", handleResize);
        return () => { // Se ejecuta cuando se desmonta el componente (Deje de renderizarlo)
            window.removeEventListener("resize", handleResize);
        };
    }, []);

    return (
        <>

            <button
                type="button" 
                aria-label="Abrir menú" 
                className={`md:hidden text-indigo-500 transition-opacity duration-500 ${ open ? 'opacity-0 pointer-events-none' : 'opacity-100'}`}
                onClick={() => { setOpen(true) }}
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                </svg>

            </button>

            <div className={`fixed inset-0 bg-black/90 transition-[transform, opacity] duration-500 ${ open ? "translate-x-0 opacity-100" : " -translate-x-full opacity-0"  }`}>
                <div className="flex justify-end">
                    <button
                        type="button" 
                        aria-label="Cerrar menú" 
                        className={`md:hidden text-white h-15 p-4`}
                        onClick={handleCloseMenu}
                    >
                        {
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        }

                    </button>
                </div>
                <nav className={`flex flex-col text-center`}>
                    <a onClick={handleCloseMenu} href="#home" className="text-white p-4 font-medium text-sm hover:bg-indigo-500 transition-colors ease-linear duration-300">Inicio</a>
                    <a onClick={handleCloseMenu} href="#about" className="text-white p-4 font-medium text-sm hover:bg-indigo-500 transition-colors ease-linear duration-300">Sobre mí</a>
                    <a onClick={handleCloseMenu} href="#skills" className="text-white p-4 font-medium text-sm hover:bg-indigo-500 transition-colors ease-linear duration-300">Habilidades</a>
                    <a onClick={handleCloseMenu} href="#projects" className="text-white p-4 font-medium text-sm hover:bg-indigo-500 transition-colors ease-linear duration-300">Proyectos</a>
                    <a onClick={handleCloseMenu} href="#experience" className="text-white p-4 font-medium text-sm hover:bg-indigo-500 transition-colors ease-linear duration-300">Experiencia</a>
                    <a onClick={handleCloseMenu} href="#contact" className="text-white p-4 font-medium text-sm hover:bg-indigo-500 transition-colors ease-linear duration-300">Contacto</a>
                </nav>
            </div>
            
            <nav className="hidden md:flex justify-between gap-4">
                <a onClick={handleCloseMenu} href="#home" className="text-gray-500 font-medium text-sm hover:text-indigo-500 transition-colors ease-linear duration-300">Inicio</a>
                <a onClick={handleCloseMenu} href="#about" className="text-gray-500 font-medium text-sm hover:text-indigo-500 transition-colors ease-linear duration-300">Sobre mí</a>
                <a onClick={handleCloseMenu} href="#skills" className="text-gray-500 font-medium text-sm hover:text-indigo-500 transition-colors ease-linear duration-300">Habilidades</a>
                <a onClick={handleCloseMenu} href="#projects" className="text-gray-500 font-medium text-sm hover:text-indigo-500 transition-colors ease-linear duration-300">Proyectos</a>
                <a onClick={handleCloseMenu} href="#experience" className="text-gray-500 font-medium text-sm hover:text-indigo-500 transition-colors ease-linear duration-300">Experiencia</a>
                <a onClick={handleCloseMenu} href="#contact" className="text-gray-500 font-medium text-sm hover:text-indigo-500 transition-colors ease-linear duration-300">Contacto</a>
            </nav>
        </>
    )
}
