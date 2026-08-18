import { skills } from "../../data/db"
import SkillCard from "./SkillCard"

export default function Skill() {
    return (
        <div className="flex flex-col items-center justify-center min-h-screen gap-10">
            <div className="space-y-4">
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent text-center">
                    Habilidades
                </h2>
                <p className="max-w-2xl text-center text-gray-500">
                    Tecnologías y herramientas que forman parte de mi día a día como desarrollador.
                </p>
            </div>
            <div className="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
                
                {
                    skills.map( skill => {

                        const { id } = skill;

                        return (
                            <SkillCard key={id} skill={skill} />
                        );

                    })
                }

            </div>
        </div>
    )
}
