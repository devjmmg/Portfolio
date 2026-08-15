import About from "./components/About"
import Header from "./components/Header"
import Home from "./components/Home"

function App() {
    
    return (
        <>
            <Header />
            <main id="home" className="max-w-7xl mx-auto p-4">
                <Home />
            </main>
            <section id="about" className="max-w-7xl mx-auto p-4">
                <About />
            </section>
        </>
    )
}

export default App
