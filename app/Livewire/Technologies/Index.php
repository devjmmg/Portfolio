<?php

namespace App\Livewire\Technologies;

use App\Models\Technology;
use Livewire\Component;

class Index extends Component
{

    public $technology;

    public function toggleActive($id)
    {
        $tech = Technology::find($id);
        $tech->active = !$tech->active;
        $tech->save();
    }

    public function render()
    {
        return view('livewire.technologies.index');
    }
}
