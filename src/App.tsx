import About from "./components/About/About"
import Header from "./components/Header/Header"
import Home from "./components/Home/Home"
import Skill from "./components/Skill/Skill"

function App() {
    
    return (    
        <>
            <Header />
            <main id="home" className="max-w-7xl mx-auto p-4 scroll-mt-36 mt-20 md:mt-0">
                <Home />
            </main>
            <section id="about" className="max-w-7xl mx-auto p-4 scroll-mt-16 md:scroll-mt-14 lg:-scroll-mt-8 mt-20 md:mt-0">
                <About />
            </section>
            <section id="skill" className="max-w-7xl mx-auto p-4 scroll-mt-16 md:scroll-mt-18 lg:scroll-mt-18 mt-20 md:mt-0">
                <Skill />
            </section>
        </>
    )
}

export default App
