
const activeNavigation = () => {

    const links = document.querySelectorAll('.nav-link-guest');
    if (links) {
        links.forEach( link => {
            link.addEventListener('click', (e) => {
                e.preventDefault(); // evita que cambie el URL
            
                const selector = link.getAttribute('href'); // obtiene el href del link
                const element = document.querySelector(selector);

                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' }); // scroll suave
                }
            });
        });
    }

    document.addEventListener("scroll",function () {
        
        const sections = document.querySelectorAll("section");
        const links = document.querySelectorAll(".nav-link-guest");
        
        let current = "index";
        sections.forEach( (section) => {
            const top = section.offsetTop;
            const rise = section.clientHeight;
            if(window.scrollY >= (top - rise / 3) ) {
                current = section.id;
            }
        });
        
        links.forEach( (link) => {
            link.classList.remove("text-lime-500");
            link.classList.add('text-gray-500');
            if(link.getAttribute("href") === "#"+current) {
                link.classList.add("text-lime-500");
                link.classList.remove('text-gray-500');
            }
            
        } );
        
    });
}

export {
    activeNavigation
}