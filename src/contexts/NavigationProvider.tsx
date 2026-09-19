import {
    createContext,
    useEffect,
    useState,
    type ReactNode,
    type Dispatch,
    type SetStateAction
} from "react";

interface NavigationContextType {
    activeSection: string;
    setActiveSection: Dispatch<SetStateAction<string>>;
}

const NavigationContext = createContext<NavigationContextType>({
    activeSection: "#inicio",
    setActiveSection: () => {}
});

const NavigationProvider = ({ children }: { children: ReactNode }) => {

    const [activeSection, setActiveSection] = useState("#home");

    useEffect(() => {

        const handleClick = (e: Event) => {
            e.preventDefault();

            const target = e.currentTarget as HTMLAnchorElement;
            const href = target.getAttribute("href");

            if (!href) {
                return;
            }

            const element = document.querySelector(href);

            element?.scrollIntoView({
                behavior: "smooth"
            });

            setActiveSection(href);
        }
        const handleScroll = () => {
            const sections = document.querySelectorAll("main[id], section[id]");
            let current = '';

            sections.forEach( section => {

                const element = section as HTMLElement;
                const top = element.offsetTop - 100;
                if (window.scrollY >= top) {
                    current = element.id;
                }
            });
            if (current) {
                setActiveSection(`#${current}`);
            }
        }
        const links = document.querySelectorAll(".link");
        links?.forEach(link => {
            link.addEventListener("click", handleClick);
        });
        window.addEventListener('scroll', handleScroll);
        return () => {
            window.removeEventListener("scroll", handleScroll);

            links.forEach(link => {
                link.removeEventListener("click", handleClick);
            });
        };
    }, []);

    return (
        <NavigationContext.Provider
            value={{
                activeSection,
                setActiveSection
            }}
        >
            {children}
        </NavigationContext.Provider>
    );
};

export {
    NavigationProvider
};

export default NavigationContext;