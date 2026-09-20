import type { Skill, Project } from "../types"

export const skills: Skill[] = [
    {
        id: 1,
        title: "Frontend",
        icon: "/img/icons/frontend.svg",
        technologies: [
            {
                id: 1,
                name: "HTML",
                icon: "/img/icons/html.svg",
            },
            {
                id: 2,
                name: "CSS",
                icon: "/img/icons/css.svg",
            },
            {
                id: 3,
                name: "SASS / SCSS",
                icon: "/img/icons/sass.svg",
            },
            {
                id: 4,
                name: "Bootstrap",
                icon: "/img/icons/bootstrap.svg",
            },
            {
                id: 5,
                name: "Tailwind CSS",
                icon: "/img/icons/tailwindcss.svg",
            },
            {
                id: 6,
                name: "JavaScript",
                icon: "/img/icons/javascript.svg",
            },
            {
                id: 7,
                name: "TypeScript",
                icon: "/img/icons/typescript.svg",
            },
            {
                id: 8,
                name: "jQuery",
                icon: "/img/icons/jquery.svg",
            },
            {
                id: 9,
                name: "React",
                icon: "/img/icons/react.svg",
            },
            
        ],
    },
    {
        id: 2,
        title: "Backend",
        icon: "/img/icons/backend.svg",
        technologies: [
            {
                id: 1,
                name: "PHP",
                icon: "/img/icons/php.svg"
            },
            {
                id: 2,
                name: "Laravel",
                icon: "/img/icons/laravel.svg"
            },
            {
                id: 3,
                name: "Node.js",
                icon: "/img/icons/node.svg"
            },
            {
                id: 4,
                name: "Express",
                icon: "/img/icons/express.svg"
            }
        ]
    },
    {
        id: 3,
        title: "Base de datos",
        icon: "/img/icons/database.svg",
        technologies: [
            {
                id: 1,
                name: "MySQL",
                icon: "/img/icons/mysql.svg"
            },
            // {
            //     id: 2,
            //     name: "MongoDB",
            //     icon: "/img/icons/mongodb.svg"
            // }
        ]
    },
    {
        id: 4,
        title: "Herramientas",
        icon: "/img/icons/tools.svg",
        technologies: [
            {
                id: 1,
                name: "Git",
                icon: "/img/icons/git.svg"
            },
            {
                id: 2,
                name: "GitHub",
                icon: "/img/icons/github.svg"
            },
            {
                id: 3,
                name: "npm",
                icon: "/img/icons/npm.svg"
            },
            {
                id: 4,
                name: "Vite",
                icon: "/img/icons/vite.svg"
            },
            {
                id: 5,
                name: "Postman",
                icon: "/img/icons/postman.svg"
            },
            {
                id: 6,
                name: "Composer",
                icon: "/img/icons/composer.svg"
            },
            {
                id: 7,
                name: "Axios",
                icon: "/img/icons/axios.svg"
            }
        ]
    }
];

export const projects: Project[] = [
    {
        id: 1,
        title: "Portfolio",
        description: "Portafolio personal desarrollado con React y TypeScript para presentar mis proyectos y habilidades en desarrollo web. Cuenta con una interfaz responsive construida con Tailwind CSS, componentes reutilizables, navegación entre secciones mediante un custom hook y un formulario de contacto integrado con EmailJS.",
        image: "/img/projects/portfolio.png",
        technologies: [
            { id: 1, name: "React", icon: "" },
            { id: 2, name: "TypeScript", icon: "" },
            { id: 3, name: "Tailwind CSS", icon: "" },
            { id: 4, name: "Vite", icon: "" },
            { id: 5, name: "EmailJS", icon: "" },
            { id: 6, name: "React Toastify", icon: "" }
        ],
        demoUrl: "https://portfolio-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/Portfolio.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 2,
        title: "Socialgram",
        description: "Red social desarrollada con Laravel y Livewire que permite a los usuarios compartir publicaciones e interactuar mediante likes, comentarios y respuestas, seguir a otros usuarios y recibir notificaciones sobre diferentes interacciones. Incluye búsqueda de usuarios, infinite scroll, relaciones Eloquent, tablas pivot, eventos, comunicación entre JavaScript y Livewire y procesamiento de imágenes.",
        image: "/img/projects/socialgram.png",
        technologies: [
            {
                id: 1,
                name: "Laravel 10",
                icon: ""
            },
            {
                id: 2,
                name: "Livewire 4",
                icon: ""
            },
            {
                id: 3,
                name: "PHP",
                icon: ""
            },
            {
                id: 4,
                name: "Tailwind CSS",
                icon: ""
            },
            {
                id: 5,
                name: "MySQL",
                icon: ""
            },
            {
                id: 6,
                name: "Alpine.js",
                icon: ""
            },
            {
                id: 7,
                name: "JavaScript",
                icon: ""
            },
            {
                id: 8,
                name: "Vite",
                icon: ""
            },
            {
                id: 9,
                name: "Dropzone.js",
                icon: ""
            },
            {
                id: 10,
                name: "Cropper.js",
                icon: ""
            },
            {
                id: 11,
                name: "Intervention Image",
                icon: ""
            }
        ],
        demoUrl: "https://laravel-socialgram.onrender.com/",
        githubUrl: "https://github.com/devjmmg/socialgram.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 3,
        title: "Administrador de veterinaria",
        description: "Aplicación web Full Stack para la administración de pacientes en una veterinaria, donde los propietarios pueden registrar y gestionar sus mascotas. Incluye autenticación con JWT, gestión de perfiles, recuperación de contraseña y un CRUD completo de pacientes mediante una API REST desarrollada con Node.js, Express y MongoDB.",
        image: "/img/projects/vet.jpg",
        technologies: [
            {
                id: 1,
                name: "React",
                icon: ""
            },
            {
                id: 2,
                name: "Tailwind CSS",
                icon: ""
            },
            {
                id: 3,
                name: "React Router",
                icon: ""
            },
            {
                id: 4,
                name: "Axios",
                icon: ""
            },
            {
                id: 5,
                name: "Node.js",
                icon: ""
            },
            {
                id: 6,
                name: "Express",
                icon: ""
            },
            {
                id: 7,
                name: "MongoDB",
                icon: ""
            },
            {
                id: 8,
                name: "Mongoose",
                icon: ""
            },
            {
                id: 9,
                name: "JWT",
                icon: ""
            },
            {
                id: 10,
                name: "Nodemailer",
                icon: ""
            },
            {
                id: 11,
                name: "bcrypt",
                icon: ""
            },
            {
                id: 12,
                name: "Vite",
                icon: ""
            }
        ],
        demoUrl: "https://manage-vet-jmmg.netlify.app/login",
        githubUrl: "",
        frontendUrl: "https://github.com/devjmmg/react-manage-vet",
        backendUrl: "https://github.com/devjmmg/node-manage-vet"
    },
    
    {
        id: 4,
        title: "Agencia de viajes",
        description: "Aplicación web para la gestión y presentación de destinos y paquetes turísticos. Desarrollada con Node.js y Express siguiendo el patrón MVC, incluye vistas dinámicas con Pug, persistencia de datos con MySQL y Sequelize, y una interfaz diseñada con Tailwind CSS.",
        image: "/img/projects/travels.jpg",
        technologies: [
            { 
                id: 1,
                name: "Node.js",
                icon: ""
            },
            { 
                id: 2,
                name: "Express",
                icon: ""
            },
            { 
                id: 3,
                name: "Pug",
                icon: ""
            },
            { 
                id: 4,
                name: "MySQL",
                icon: ""
            },
            { 
                id: 5,
                name: "Sequelize",
                icon: ""
            },
            { 
                id: 6,
                name: "Tailwind CSS",
                icon: ""
            }
        ],
        demoUrl: "https://travels-va5m.onrender.com/",
        githubUrl: "https://github.com/devjmmg/travels.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 5,
        title: "Quiosco de comida",
        description: "Aplicación web Full Stack para la gestión de pedidos de un quiosco de comida, desarrollada con React y Laravel mediante una API REST. Incluye autenticación con Bearer Token, gestión de pedidos y productos, panel administrativo y actualización automática de pedidos y disponibilidad mediante SWR.",
        image: "/img/projects/kiosk.jpg",
        technologies: [
            {
                id: 1,
                name: "React",
                icon: ""
            },
            {
                id: 2,
                name: "Laravel 12",
                icon: ""
            },
            {
                id: 3,
                name: "PHP",
                icon: ""
            },
            {
                id: 4,
                name: "Tailwind CSS",
                icon: ""
            },
            {
                id: 5,
                name: "MySQL",
                icon: ""
            },
            {
                id: 6,
                name: "Laravel Sanctum",
                icon: ""
            },
            {
                id: 7,
                name: "React Router",
                icon: ""
            },
            {
                id: 8,
                name: "Axios",
                icon: ""
            },
            {
                id: 9,
                name: "SWR",
                icon: ""
            },
            {
                id: 10,
                name: "React Modal",
                icon: ""
            },
            {
                id: 11,
                name: "React Toastify",
                icon: ""
            },
            {
                id: 12,
                name: "Vite",
                icon: ""
            }
        ],
        demoUrl: "https://react-kiosk-jmmg.netlify.app/login",
        githubUrl: "",
        frontendUrl: "https://github.com/devjmmg/kiosk-react.git",
        backendUrl: "https://github.com/devjmmg/kiosk-laravel.git"
    },
    {
        id: 6,
        title: "Plataforma de vacantes y postulaciones",
        description: "Plataforma web de vacantes y postulaciones desarrollada con Laravel y Livewire. Permite a los candidatos registrarse, verificar su correo, buscar vacantes y postularse mediante la carga de su CV. Los reclutadores pueden crear y administrar vacantes, gestionar candidatos y recibir notificaciones sobre nuevas postulaciones.",
        image: "/img/projects/devjobs.jpg",
        technologies: [
            {
                id: 1,
                name: "Laravel 12",
                icon: ""
            },
            {
                id: 2,
                name: "Livewire 4",
                icon: ""
            },
            {
                id: 3,
                name: "PHP",
                icon: ""
            },
            {
                id: 4,
                name: "Tailwind CSS",
                icon: ""
            },
            {
                id: 5,
                name: "Blade Components",
                icon: ""
            },
            {
                id: 6,
                name: "Alpine.js",
                icon: ""
            },
            {
                id: 7,
                name: "Laravel Breeze",
                icon: ""
            },
            {
                id: 8,
                name: "MySQL",
                icon: ""
            },
            {
                id: 9,
                name: "SweetAlert2",
                icon: ""
            },
            {
                id: 10,
                name: "Vite",
                icon: ""
            },
            {
                id: 11,
                name: "Axios",
                icon: ""
            }
        ],
        demoUrl: "https://devjobs-jmmg.mnz.dom.my.id/",
        githubUrl: "https://github.com/devjmmg/devjobs.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 7,
        title: "DevWebCamp",
        description: "Aplicación web para la gestión de conferencias de desarrollo web y workshops, desarrollada con PHP y MySQL bajo una arquitectura MVC. Permite a los usuarios registrarse, adquirir su pase, seleccionar conferencias y workshops, elegir un regalo y recuperar su contraseña. Incluye un área administrativa para gestionar ponentes, usuarios y contenido del evento.",
        image: "/img/projects/devwebcamp.png",
        technologies: [
            { id: 1, name: "PHP", icon: "" },
            { id: 2, name: "MySQL", icon: "" },
            { id: 3, name: "MVC", icon: "" },
            { id: 4, name: "SASS", icon: "" },
            { id: 5, name: "JavaScript", icon: "" },
            { id: 6, name: "Gulp", icon: "" },
            { id: 7, name: "SweetAlert2", icon: "" },
            { id: 8, name: "Swiper", icon: "" },
            { id: 9, name: "Chart.js", icon: "" },
            { id: 10, name: "Fetch API", icon: "" },
            { id: 11, name: "PHPMailer", icon: "" },
            { id: 12, name: "PHPDotenv", icon: "" },
            { id: 13, name: "Intervention Image", icon: "" },
            { id: 14, name: "Webpack", icon: "" },
            { id: 15, name: "AOS", icon: "" },
        ],
        demoUrl: "https://php-devwebcamp.onrender.com/",
        githubUrl: "https://github.com/devjmmg/devwebcamp.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 8,
        title: "UpTask",
        description: "Aplicación web para la gestión de proyectos y tareas, desarrollada con PHP y MySQL bajo una arquitectura MVC. Incluye registro, inicio de sesión, recuperación de cuenta y gestión del perfil. Permite crear y administrar proyectos, organizar sus tareas y filtrarlas entre pendientes y completadas.",
        image: "/img/projects/uptask.png",
        technologies: [
            { id: 1, name: "PHP", icon: "" },
            { id: 2, name: "MySQL", icon: "" },
            { id: 3, name: "MVC", icon: "" },
            { id: 4, name: "SweetAlert2", icon: "" },
            { id: 5, name: "SASS", icon: "" },
            { id: 6, name: "JavaScript", icon: "" },
            { id: 7, name: "Gulp", icon: "" },
            { id: 8, name: "PHPMailer", icon: "" },
            { id: 9, name: "PHPDotenv", icon: "" },
            { id: 10, name: "Fetch API", icon: "" }
        ],
        demoUrl: "https://php-uptask.onrender.com/",
        githubUrl: "https://github.com/devjmmg/UpTask.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 9,
        title: "Salon",
        description: "Aplicación web para la gestión y reserva de citas en un salón de belleza, desarrollada con PHP y MySQL bajo una arquitectura MVC. Cuenta con registro e inicio de sesión, recuperación de cuentas, reserva de citas y consulta de servicios. Incluye además un área administrativa para gestionar citas y servicios.",
        image: "/img/projects/salon.png",
        technologies: [
            { id: 1, name: "PHP", icon: "" },
            { id: 2, name: "MySQL", icon: "" },
            { id: 3, name: "MVC", icon: "" },
            { id: 4, name: "SweetAlert2", icon: "" },
            { id: 5, name: "SASS", icon: "" },
            { id: 6, name: "JavaScript", icon: "" },
            { id: 7, name: "Gulp", icon: "" },
            { id: 8, name: "Fetch API", icon: "" },
            { id: 9, name: "PHPMailer", icon: "" },
            { id: 10, name: "PHPDotenv", icon: "" },
            { id: 11, name: "Sharp", icon: "" },
        ],
        demoUrl: "https://php-salon.onrender.com/",
        githubUrl: "https://github.com/devjmmg/salon.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 10,
        title: "Bienes raíces",
        description: "Aplicación web de bienes raíces desarrollada con PHP, MySQL y SASS bajo una arquitectura MVC. Permite gestionar propiedades desde un panel administrativo, incluyendo el registro de propiedades, vendedores, imágenes e información de contacto.",
        image: "/img/projects/properties.png",
        technologies: [
            { id: 1, name: "PHP", icon: "" },
            { id: 2, name: "MySQL", icon: "" },
            { id: 3, name: "MVC", icon: "" },
            { id: 4, name: "Intervention Image", icon: "" },
            { id: 5, name: "SASS", icon: "" },
            { id: 6, name: "JavaScript", icon: "" },
            { id: 7, name: "Gulp", icon: "" },
            { id: 8, name: "PHPMailer", icon: "" },
            { id: 9, name: "PHPDotenv", icon: "" },
        ],
        demoUrl: "https://properties-jmmg.mnz.dom.my.id/",
        githubUrl: "https://github.com/devjmmg/Properties.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 11,
        title: "Calculadora de consumos y propinas",
        description: "Aplicación de cálculo de propinas desarrollada con React, TypeScript y Tailwind CSS. La aplicación permite seleccionar productos de un menú, agregarlos a una orden, modificar sus cantidades, eliminarlos y seleccionar un porcentaje de propina. El subtotal, la propina y el total se calculan automáticamente a partir del estado actual de la orden. El proyecto utiliza componentes reutilizables, un Custom Hook para centralizar el estado y la lógica de la orden, datos dinámicos provenientes de arreglos de objetos y TypeScript para el tipado de la aplicación.",
        image: "/img/projects/tips.png",
        technologies: [
            { id: 1, name: "React", icon: "" },
            { id: 2, name: "TypeScript", icon: "" },
            { id: 3, name: "Tailwind CSS", icon: "" },
            { id: 4, name: "Vite", icon: "" }
        ],
        demoUrl: "https://react-ts-tip-calculator-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/react-ts-tip-calculator.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 12,
        title: "Carrito de compras",
        description: "Carrito de compras desarrollado con React, TypeScript y Bootstrap utilizando Hooks, Custom Hooks, Local Storage, componentes reutilizables y manejo de estado.",
        image: "/img/projects/shopping-cart.png",
        technologies: [
            { id: 1, name: "React", icon: "" },
            { id: 2, name: "TypeScript", icon: "" },
            { id: 3, name: "Bootstrap", icon: "" },
            { id: 4, name: "Vite", icon: "" }
        ],
        demoUrl: "https://react-shopping-cart-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/react-ts-shopping-cart.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 13,
        title: "Cotizador de préstamos",
        description: "Aplicación web desarrollada con Vue y Tailwind CSS para calcular préstamos según el monto solicitado y el plazo de pago. El sistema calcula automáticamente el total a pagar aplicando tasas de interés definidas por rangos de monto y duración del préstamo. El proyecto utiliza Composition API, componentes reutilizables, props y watch para gestionar la reactividad y actualizar los cálculos.",
        image: "/img/projects/quoter.png",
        technologies: [
            { id: 1, name: "Vue 3", icon: "" },
            { id: 2, name: "Tailwind CSS", icon: "" },
            { id: 3, name: "Vite", icon: "" }
        ],
        demoUrl: "https://vue-quoter-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/vue-quoter.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 14,
        title: "Festival de Música",
        description: "Página web para la presentación de un festival de música, desarrollada con HTML, SASS y JavaScript. Incluye diferentes secciones para artistas, galería y boletos, con un diseño responsive. El proyecto utiliza Gulp y NPM para automatizar tareas de desarrollo y optimización de recursos.",
        image: "/img/projects/festival.png",
        technologies: [
            { id: 1, name: "HTML", icon: "" },
            { id: 2, name: "SASS", icon: "" },
            { id: 3, name: "JavaScript", icon: "" },
            { id: 4, name: "Gulp", icon: "" },
            { id: 5, name: "CSS Grid", icon: "" },
            { id: 6, name: "Flexbox", icon: "" },
        ],
        demoUrl: "https://festival-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/festivalmusica_page.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 15,
        title: "Cafetería",
        description: "Página web para una cafetería desarrollada con HTML y SASS. Cuenta con diferentes secciones para presentar el establecimiento, menú, productos, galería y contacto. El proyecto utiliza CSS Grid y Flexbox para construir layouts responsive y Gulp para automatizar tareas de compilación, optimización de imágenes y procesamiento de estilos.",
        image: "/img/projects/cafe.png",
        technologies: [
            { id: 1, name: "HTML", icon: "" },
            { id: 2, name: "SASS", icon: "" },
            { id: 3, name: "JavaScript", icon: "" },
            { id: 4, name: "Gulp", icon: "" },
            { id: 5, name: "CSS Grid", icon: "" },
            { id: 6, name: "Flexbox", icon: "" },
        ],
        demoUrl: "https://cafeteria-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/cafeteria.git",
        frontendUrl: "",
        backendUrl: ""
    },
    {
        id: 16,
        title: "Ecommerce",
        description: "Página web de comercio electrónico desarrollada con HTML y CSS. Presenta un catálogo de productos mediante diferentes secciones y componentes visuales, utilizando layouts responsive para adaptar la interfaz a diferentes tamaños de pantalla.",
        image: "/img/projects/ecommerce.png",
        technologies: [
            { id: 1, name: "HTML", icon: "" },
            { id: 2, name: "CSS", icon: "" },
            { id: 5, name: "CSS Grid", icon: "" },
            { id: 6, name: "Flexbox", icon: "" },
        ],
        demoUrl: "https://ecommerce-jmmg.netlify.app/",
        githubUrl: "https://github.com/devjmmg/ecommerce_page.git",
        frontendUrl: "",
        backendUrl: ""
    }
];