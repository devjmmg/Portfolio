<?php

namespace App\Livewire\Technologies;

use App\Models\Technology;
use Illuminate\Support\Str;
use Livewire\Component;

class Edit extends Component
{

    public $technology;
    public $name;
    public $slug;
    public $icon;

    public function mount(Technology $technology)
    {
        $this->technology = $technology;
        $this->name = $this->technology->name;
        $this->slug = $this->technology->slug;
    }

    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function update()
    {
        dd('Guardando...');
    }

    public function render()
    {
        return view('livewire.technologies.edit');
    }
}
