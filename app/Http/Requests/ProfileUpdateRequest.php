<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['nullable', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'experience_years' => ['nullable', 'integer', 'min:0', 'max:80'],
            'github_url' => ['nullable', 'url', 'max:255'],
            'cv' => ['nullable', 'file', 'mimes:pdf', 'max:2048'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp,svg', 'max:2048'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido.',
            'name.string' => 'El nombre debe ser un texto válido.',
            'name.max' => 'El nombre no puede tener más de 255 caracteres.',

            'fname.required' => 'El primer apellido es requerido.',
            'fname.string' => 'El primer apellido debe ser un texto válido.',
            'fname.max' => 'El primer apellido no puede tener más de 255 caracteres.',

            'lname.string' => 'El segundo apellido debe ser un texto válido.',
            'lname.max' => 'El segundo apellido no puede tener más de 255 caracteres.',

            'email.required' => 'El correo electrónico es requerido.',
            'email.string' => 'El correo electrónico debe ser un texto válido.',
            'email.lowercase' => 'El correo electrónico debe estar en minúsculas.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.max' => 'El correo electrónico no puede tener más de 255 caracteres.',
            'email.unique' => 'Este correo electrónico ya está en uso.',

            'experience_years.integer' => 'Los años de experiencia debe ser un número entero.',
            'experience_years.min' => 'Los años de experiencia no pueden ser negativos.',
            'experience_years.max' => 'Los años de experiencia no pueden ser mayores a 80.',

            'github_url.url' => 'El enlace de GitHub no es válido.',
            'github_url.max' => 'El enlace de GitHub no puede tener más de 255 caracteres.',

            'cv.file' => 'El CV debe ser un archivo válido.',
            'cv.mimes' => 'El CV debe ser un archivo PDF.',
            'cv.max' => 'El CV no debe pesar más de 2MB.',

            'image.image' => 'El archivo debe ser una imagen.',
            'image.mimes' => 'La imagen debe ser JPG, JPEG, PNG o WEBP, SVG.',
            'image.max' => 'La imagen no debe pesar más de 2MB.',
        ];
    }
}
