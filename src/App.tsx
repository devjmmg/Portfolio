import About from "./components/About/About"
import Contact from "./components/Contact/Contact"
import Footer from "./components/Footer/Footer"
import Header from "./components/Header/Header"
import Home from "./components/Home/Home"
import Project from "./components/Project/Project"
import Skill from "./components/Skill/Skill"

function App() {
    
    return (    
        <>
            <Header />
            <main id="home" className="max-w-7xl mx-auto p-4 scroll-mt-36 mt-20 md:mt-0">
                <Home />
            </main>
            <section id="about" className="max-w-7xl mx-auto p-4 scroll-mt-24 md:scroll-mt-3 lg:-scroll-mt-8 mt-20 md:mt-0">
                <About />
            </section>
            <section id="skills" className="max-w-7xl mx-auto p-4 scroll-mt-28 md:scroll-mt-18 lg:scroll-mt-18 mt-20 md:mt-0">
                <Skill />
            </section>
            <section id="projects" className="max-w-7xl mx-auto p-4 scroll-mt-28 md:scroll-mt-18 lg:scroll-mt-18 mt-20 md:mt-0">
                <Project />
            </section>
            <section id="contact" className="max-w-7xl mx-auto p-4 scroll-mt-36 md:scroll-mt-2 lg:-scroll-mt-2 mt-20 md:mt-0 ">
                <Contact />
            </section>
            <Footer />
        </>
    )
}

export default App
