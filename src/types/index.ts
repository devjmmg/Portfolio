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