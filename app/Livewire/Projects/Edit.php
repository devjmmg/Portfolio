<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;
    public $project;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $imageCurrent;
    public $demo_url;
    public $github_url;
    public $technologies = [];

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->name = $project->name;
        $this->slug = $project->slug;
        $this->description = $project->description;
        $this->imageCurrent = $project->image;
        $this->demo_url = $project->demo_url;
        $this->github_url = $project->github_url;
        // $this->technologies = $project->technologies->pluck('id')->toArray();
        $this->technologies = $project->technologies->modelKeys();
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function update()
    {
        $data = $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:projects,slug,' . $this->project->id,
            'description' => 'nullable|string|max:1000',
            'demo_url' => 'nullable|url|max:255',
            'github_url' => 'nullable|url|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,svg|max:2048',
            'technologies' => 'required|array|min:1',
        ],[
            'name.required' => 'El nombre del proyecto es requerido',
            'name.string' => 'El nombre del proyecto debe ser texto',
            'name.max' => 'El nombre del proyecto no debe superar los 255 caracteres',

            'slug.required' => 'El slug es requerido',
            'slug.string' => 'El slug debe ser texto',
            'slug.max' => 'El slug no debe superar los 255 caracteres',
            'slug.unique' => 'Este slug ya está en uso, intenta con otro',

            'description.string' => 'La descripción debe ser texto',
            'description.max' => 'La descripción no debe superar los 1000 caracteres',

            'demo_url.url' => 'El link de la demo debe ser una URL válida',
            'demo_url.max' => 'El link de la demo no debe superar los 255 caracteres',

            'github_url.url' => 'El link de GitHub debe ser una URL válida',
            'github_url.max' => 'El link de GitHub no debe superar los 255 caracteres',

            'image.file' => 'El archivo debe ser válido',
            'image.mimes' => 'La imagen debe ser un archivo jpg, jpeg, png o svg',
            'image.max' => 'La imagen no debe pesar más de 2MB',

            'technologies.required' => 'Debes seleccionar al menos una tecnología',
            'technologies.min' => 'Debes seleccionar al menos una tecnología',
        ]);

        $data['slug'] = Str::slug($data['name']);

        if ($this->image) {
            if ($this->imageCurrent) {
                Storage::disk('public')->delete('projects/' . $this->imageCurrent);
            }
            $image = $this->image->store('projects', 'public');
            $data['image'] = basename($image);
        } else {
            $data['image'] = $this->imageCurrent;
        }

        $this->project->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'description' => $data['description'],
            'demo_url' => $data['demo_url'],
            'github_url' => $data['github_url'],
            'image' => $data['image'],
        ]);
        $this->project->technologies()->sync($data['technologies']);

        session()->flash('success', 'Proyecto editado correctamente');
        return redirect()->route('projects.index');

    }

    public function render()
    {
        $listTechnologies = Technology::orderBy('name', 'ASC')->get();
        return view('livewire.projects.edit', [
            'listTechnologies' => $listTechnologies
        ]);
    }
}
