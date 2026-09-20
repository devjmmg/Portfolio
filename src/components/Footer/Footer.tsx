export default function Footer() {
    return (
        <footer className="bg-indigo-500 text-white">
            <div className="max-w-7xl mx-auto text-center py-6 px-4">
                <p className="text-sm font-semibold">
                    © {new Date().getFullYear()} Juan Manuel Martínez García, Todos los derechos reservados.
                </p>
            </div>
        </footer>
    );
}