<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $demo_url;
    public $github_url;
    public $active;
    public $order;

    public function mount()
    {
        $this->name = '';
        $this->slug = '';
        $this->description = '';
        $this->demo_url = '';
        $this->github_url = '';
        $this->image = '';
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:projects,slug',
        'description' => 'nullable|string|max:1000',
        'demo_url' => 'nullable|url|max:255',
        'github_url' => 'nullable|url|max:255',
        'image' => 'required|file|mimes:jpg,jpeg,png,svg|max:2048',
    ];

    protected $messages = [
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

        'image.required' => 'La imagen es requerida',
        'image.file' => 'El archivo debe ser válido',
        'image.mimes' => 'La imagen debe ser un archivo jpg, jpeg, png o SVG',
        'image.max' => 'La imagen no debe pesar más de 2MB'
    ];

    public function store()
    {
        $data = $this->validate();
        $data['slug'] = Str::slug($data['name']);
        $image = $this->image->store('projects', 'public');
        $imageName = basename($image);

        $order = Project::max('id') ?? 0;
        $order++;

        Project::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'description' => $data['description'],
            'demo_url' => $data['demo_url'],
            'github_url' => $data['github_url'],
            'image' => $imageName,
            'order' => $order
        ]);

        session()->flash('success', 'Proyecto creado correctamente');
        return redirect()->route('projects.index');
    }

    public function render()
    {
        return view('livewire.projects.create');
    }
}
