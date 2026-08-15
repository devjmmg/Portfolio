import Header from "./components/Header"
import Home from "./components/Home"

function App() {
    
    return (
        <>
            <Header />
            <main id="home" className="max-w-7xl mx-auto p-4 md:p-0">
                <Home />
            </main>
        </>
    )
}

export default App
