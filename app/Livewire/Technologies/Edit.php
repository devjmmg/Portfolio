<?php

namespace App\Livewire\Technologies;

use App\Models\Technology;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{

    use WithFileUploads;
    public $technology;
    public $name;
    public $slug;
    public $icon;
    public $iconCurrent;

    public function mount(Technology $technology)
    {
        $this->technology = $technology;
        $this->name = $technology->name;
        $this->slug = $technology->slug;
        $this->iconCurrent = $technology->icon;
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function update()
    {
        $data = $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:technologies,slug,' . $this->technology->id,
            'icon' => 'nullable|file|mimes:svg|max:2048',
        ], [
            'name.required' => 'El nombre de la tecnología es requerido',
            'name.string' => 'El nombre de la tecnología debe ser texto',
            'name.max' => 'El nombre de la tecnología no debe superar los 255 caracteres',

            'slug.required' => 'El slug es requerido',
            'slug.string' => 'El slug debe ser texto',
            'slug.max' => 'El slug no debe superar los 255 caracteres',
            'slug.unique' => 'Este slug ya está en uso, intenta con otro',

            'icon.file' => 'El archivo debe ser válido',
            'icon.mimes' => 'El icono debe ser un archivo SVG',
            'icon.max' => 'El icono no debe pesar más de 2MB',
        ]);

        $data['slug'] = Str::slug($data['name']);

        if ($this->icon) {
            if ($this->iconCurrent) {
                Storage::disk('public')->delete('icons/' . $this->iconCurrent);
            }
            $icon = $this->icon->store('icons', 'public');
            $data['icon'] = basename($icon);
        } else {
            unset($data['icon']);
        }

        $this->technology->update($data);
        session()->flash('success', 'Tecnología editada correctamente');
        
        return redirect()->route('technologies.index');
    }

    public function render()
    {
        return view('livewire.technologies.edit');
    }
}
