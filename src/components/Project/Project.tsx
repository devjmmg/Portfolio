import ProjectCard from "./ProjectCard";
import { projects } from "../../data/db";

export default function Project() {
    return (
        <div className="flex flex-col items-center justify-center min-h-screen gap-10">
            <div className="space-y-4">
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent text-center">
                    Proyectos
                </h2>
                <p className="max-w-2xl text-center text-gray-500">
                    Proyectos que forman parte de mi camino como desarrollador.
                </p>
            </div>

            <div className="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full">

                {
                    projects.map( (project) => {

                        const { id } = project;

                        return (
                            <ProjectCard key={id} project={project} />
                        )
                    })
                }

            </div>
        </div>
    )
}
