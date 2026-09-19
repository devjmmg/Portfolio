import type { Project } from "../../types";
import { useEffect, useRef, useState } from "react";

interface ProjectCardProps {
    project: Project;
}

export default function ProjectCard({ project }: ProjectCardProps) {

    const descriptionRef = useRef<HTMLParagraphElement>(null);

    const [showMoreButton, setShowMoreButton] = useState(false);
    const [showMore, setShowMore] = useState(false);

    const {
        title,
        image,
        description,
        technologies,
        demoUrl,
        githubUrl,
        frontendUrl,
        backendUrl,
    } = project;

    useEffect(() => {
        const element = descriptionRef.current;
        if (!element) return;
        if (element.scrollHeight > element.clientHeight) {
            setShowMoreButton(true);
        }
    }, [description]);

    return (
        <article
            className="
                overflow-hidden
                rounded-md
                border border-gray-200
                bg-white
                flex flex-col
            "
        >

            <div className="p-4">
                <h3
                    className="
                        text-lg
                        font-semibold
                        tracking-tight
                        text-gray-600
                    "
                >
                    {title}
                </h3>
            </div>

            <div className="group relative overflow-hidden">

                <img
                    src={image}
                    alt={title}
                    className="
                        block
                        aspect-video
                        w-full
                        object-cover
                    "
                />

                {demoUrl && (
                    <div
                        className="
                            absolute
                            inset-0
                            flex
                            items-center
                            justify-center
                            bg-black/50
                            opacity-0
                            transition-opacity
                            duration-300
                            ease-linear
                            group-hover:opacity-100
                        "
                    >
                        <a
                            href={demoUrl}
                            target="_blank"
                            rel="noopener noreferrer"
                            className="
                                rounded-full
                                bg-white
                                px-5
                                py-2.5
                                text-sm
                                font-semibold
                                text-gray-600
                                transition-all
                                duration-300
                                ease-linear
                                hover:bg-indigo-600
                                hover:text-white
                            "
                        >
                            Ver proyecto
                        </a>
                    </div>
                )}

            </div>

            <div className="p-4 flex-1 flex flex-col">

                <p
                    ref={descriptionRef}
                    className={`
                        text-sm
                        leading-6
                        text-gray-600
                        ${!showMore ? "line-clamp-3" : ""}
                    `}
                >
                    {description}
                </p>

                {showMoreButton && (
                    <button
                        type="button"
                        onClick={() => setShowMore(!showMore)}
                        className="
                            text-sm text-left
                            font-medium
                            text-indigo-500
                            hover:text-indigo-600
                            transition-colors duration-300 ease-linear cursor-pointer
                        "
                    >
                        {showMore ? "Ver menos" : "Ver más"}
                    </button>
                )}

                <div className="mt-5 mb-auto flex flex-wrap gap-2">

                    {technologies.map((technology) => (
                        <span
                            key={technology.id}
                            className="
                                rounded-md
                                bg-indigo-100
                                px-2.5
                                py-1
                                text-xs
                                font-medium
                                text-indigo-500
                            "
                        >
                            {technology.name}
                        </span>
                    ))}

                </div>

                <div className="mt-5 border-t border-gray-200 pt-4 flex justify-end">

                    <div className="flex items-center gap-5">

                        {githubUrl && (
                            <a
                                href={githubUrl}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="
                                    inline-flex
                                    items-center
                                    gap-2
                                    text-sm
                                    font-medium
                                    text-gray-600
                                    transition-colors duration-300 ease-linear
                                    hover:text-indigo-600
                                "
                            >
                                <img src="/img/icons/github.svg" alt="GitHub" className="size-5" />

                                GitHub
                            </a>
                        )}

                        {frontendUrl && (
                            <a
                                href={frontendUrl}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="
                                    text-sm
                                    font-medium
                                    text-gray-600
                                    transition-colors duration-300 ease-linear
                                    hover:text-indigo-600
                                "
                            >
                                Frontend
                            </a>
                        )}

                        {backendUrl && (
                            <a
                                href={backendUrl}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="
                                    text-sm
                                    font-medium
                                    text-gray-600
                                    transition-colors duration-300 ease-linear
                                    hover:text-indigo-600
                                "
                            >
                                Backend
                            </a>
                        )}

                    </div>

                </div>

            </div>

        </article>
    );
}