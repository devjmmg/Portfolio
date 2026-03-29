<?php

namespace App\Livewire\Technologies;

use App\Models\Technology;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{

    use WithFileUploads;
    public $name;
    public $slug;
    public $icon;

    public function mount()
    {
        $this->name = '';
        $this->slug = '';
        $this->icon = '';
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:technologies,slug',
        'icon' => 'required|file|mimes:svg|max:2048',
    ];

    protected $messages = [
        'name.required' => 'El nombre de la tecnología es requerido',
        'name.string' => 'El nombre de la tecnología debe ser texto',
        'name.max' => 'El nombre de la tecnología no debe superar los 255 caracteres',

        'slug.required' => 'El slug es requerido',
        'slug.string' => 'El slug debe ser texto',
        'slug.max' => 'El slug no debe superar los 255 caracteres',
        'slug.unique' => 'Este slug ya está en uso, intenta con otro',

        'icon.required' => 'El icono es requerido',
        'icon.file' => 'El archivo debe ser válido',
        'icon.mimes' => 'El icono debe ser un archivo SVG',
        'icon.max' => 'El icono no debe pesar más de 2MB',
    ];

    public function store()
    {
        $data = $this->validate();
        $data['slug'] = Str::slug($data['name']);
        $icon = $this->icon->store('icons', 'public');
        $iconName = basename($icon);

        Technology::create([
            'name' => $data['name'],
            'slug' => $data['slug'],
            'icon' => $iconName
        ]);

        session()->flash('success', 'Tecnología creada correctamente');

        return redirect()->route('technologies.index');
    }

    public function render()
    {
        return view('livewire.technologies.create');
    }
}
