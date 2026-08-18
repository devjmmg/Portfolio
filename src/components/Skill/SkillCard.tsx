import type { Skill } from "../../types";

interface SkillProps {
    skill: Skill
}

export default function SkillCard(props: SkillProps) {

    const { skill } = props;
    const { title, icon, technologies  } = skill;

    return (
        <div className="
            rounded-md
            border border-gray-200
            p-8
            transition-all duration-300 ease-linear
            hover:border-indigo-500
            hover:shadow-lg hover:shadow-indigo-500/30"
        >
            <div className="flex items-center justify-center gap-3">
                <img src={icon} alt={title} className="size-6" />
                <h3 className="text-xl font-semibold">{title}</h3>
            </div>
            <div className="grid grid-cols-2 sm:grid-cols-3 gap-3 mt-6">
                {
                    technologies.map( technology => {

                        const { id, name, icon } = technology;

                        return (
                            <div key={id} className="flex flex-col items-center gap-2 p-3">
                                <img
                                    src={icon}
                                    alt={name}
                                    className="size-6"
                                />
                                <span className="text-sm font-medium text-gray-600">
                                    {name}
                                </span>
                            </div>
                        );
                    })
                }
            </div>
        </div>
    )
}
