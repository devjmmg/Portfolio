export interface Technology {
    id: number;
    name: string;
    icon: string;
}

export interface Skill {
    id: number;
    title: string;
    icon: string;
    technologies: Technology[];
}

export interface Project {
    id: number;
    title: string;
    description: string;
    image: string;
    technologies: Technology[];
    demoUrl: string;
    githubUrl: string;
    frontendUrl: string;
    backendUrl: string;
}