import Navbar from "./Navbar";

export default function Header() {
    return (
        <header className="sticky top-0 z-50 bg-white shadow-sm">
            <div className="max-w-5xl mx-auto p-4 flex justify-between items-center">
                <h1 className="font-bold text-xl bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent">devjmmg</h1>
                <Navbar />
            </div>
        </header>
    )
}
