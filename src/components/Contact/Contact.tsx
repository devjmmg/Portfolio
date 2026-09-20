import React, { useEffect, useRef, useState } from "react";
import emailjs from "@emailjs/browser";
import { toast } from "react-toastify";

export default function Contact() {

    const [ error, setError ] = useState({
        name: false,
        email: false,
        subject: false,
        message: false,
    });
    const [isSending, setIsSending] = useState(false);

    const nameRef = useRef<HTMLInputElement>(null);
    const emailRef = useRef<HTMLInputElement>(null);
    const subjectRef = useRef<HTMLInputElement>(null);
    const messageRef = useRef<HTMLTextAreaElement>(null);
    const formRef = useRef<HTMLFormElement>(null);

    const handleInput = (e: React.FormEvent<HTMLInputElement | HTMLTextAreaElement>) => {
        const id = e.currentTarget.id;
        setError(
            prev => ({
                ...prev,
                [id]: false
            })
        );
    }

    const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
        e.preventDefault();

        const errors = {
            name: !nameRef.current?.value.trim(),
            email: !emailRef.current?.value.trim(),
            subject: !subjectRef.current?.value.trim(),
            message: !messageRef.current?.value.trim(),
        }

        setError(errors);

        if (Object.values(errors).some(Boolean)) {
            return;
        }

        setIsSending(true);

        try {
            await emailjs.sendForm(
                import.meta.env.VITE_SERVICE_ID,
                import.meta.env.VITE_TEMPLATE_ID,
                formRef.current!,{
                    publicKey: import.meta.env.VITE_PUBLIC_KEY
                }
            );

            formRef.current?.reset();
            toast.success("Mensaje enviado correctamente");
            
        } catch (error) {
            toast.error("No se pudo enviar el mensaje.");
        } finally {
            setIsSending(false);
        }

    }

    useEffect(() => {
        if (Object.values(error).some(Boolean)) {
            document.querySelector('#contact')?.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }, [error]);

    return (
        <div className="flex flex-col items-center justify-center min-h-screen gap-10">

            <div className="space-y-4">
                <h2 className="text-5xl font-bold bg-linear-to-r from-indigo-500 to-indigo-950 bg-clip-text text-transparent text-center">
                    Contacto
                </h2>

                <p className="max-w-2xl text-center text-gray-500">
                    ¿Tienes un proyecto en mente? Hablemos y hagámoslo realidad.
                </p>
            </div>

            <div className="w-full max-w-2xl">
                <form className="space-y-5" onSubmit={handleSubmit} ref={formRef}>

                    <div className="space-y-2">
                        <label
                            htmlFor="name"
                            className="block text-sm font-medium text-gray-600"
                        >
                            Nombre
                        </label>

                        <input
                            ref={nameRef}
                            onInput={handleInput}
                            id="name"
                            name="name"
                            type="text"
                            placeholder="Tu nombre"
                            className="
                                w-full
                                rounded-md
                                border border-gray-200
                                px-4 py-3
                                text-sm text-gray-600
                                outline-none
                                transition-colors duration-300 ease-linear
                                focus:border-indigo-500
                            "
                        />
                        {
                            error.name && (
                                <p className="text-red-500 text-sm">El nombre es requerido.</p>
                            )
                        }
                    </div>

                    <div className="space-y-2">
                        <label
                            htmlFor="email"
                            className="block text-sm font-medium text-gray-600"
                        >
                            Correo electrónico
                        </label>

                        <input
                            ref={emailRef}
                            onInput={handleInput}
                            id="email"
                            name="email"
                            type="email"
                            placeholder="correo@ejemplo.com"
                            className="
                                w-full
                                rounded-md
                                border border-gray-200
                                px-4 py-3
                                text-sm text-gray-600
                                outline-none
                                transition-colors duration-300 ease-linear
                                focus:border-indigo-500
                            "
                        />
                        {
                            error.email && (
                                <p className="text-red-500 text-sm">El correo electrónico es requerido.</p>
                            )
                        }
                    </div>

                    <div className="space-y-2">
                        <label
                            htmlFor="subject"
                            className="block text-sm font-medium text-gray-600"
                        >
                            Asunto
                        </label>

                        <input
                            ref={subjectRef}
                            onInput={handleInput}
                            id="subject"
                            name="subject"
                            type="text"
                            placeholder="¿En qué puedo ayudarte?"
                            className="
                                w-full
                                rounded-md
                                border border-gray-200
                                px-4 py-3
                                text-sm text-gray-600
                                outline-none
                                transition-colors duration-300 ease-linear
                                focus:border-indigo-500
                            "
                        />
                        {
                            error.subject && (
                                <p className="text-red-500 text-sm">El asunto es requerido.</p>
                            )
                        }
                    </div>

                    <div className="space-y-2">
                        <label
                            htmlFor="message"
                            className="block text-sm font-medium text-gray-600"
                        >
                            Mensaje
                        </label>

                        <textarea
                            ref={messageRef}
                            onInput={handleInput}
                            id="message"
                            name="message"
                            rows={5}
                            placeholder="Cuéntame sobre tu proyecto..."
                            className="
                                w-full
                                rounded-md
                                border border-gray-200
                                px-4 py-3
                                text-sm text-gray-600
                                outline-none
                                transition-colors duration-300 ease-linear
                                focus:border-indigo-500
                            "
                        />
                        {
                            error.message && (
                                <p className="text-red-500 text-sm">El mensaje es requerido.</p>
                            )
                        }
                    </div>

                    <div className="flex justify-end">
                        <button
                            disabled={isSending}
                            type="submit"
                            className={`
                                rounded
                                bg-indigo-500
                                px-5 py-2.5
                                text-sm font-medium text-white
                                transition-colors duration-300 ease-linear
                                hover:bg-indigo-600
                                ${isSending ? 'cursor-not-allowed opacity-50' : 'cursor-pointer'} 
                                w-full md:w-auto
                            `}
                        >
                            {isSending ? "Enviando..." : "Enviar mensaje"}
                        </button>
                    </div>

                </form>
            </div>

        </div>
    );
}