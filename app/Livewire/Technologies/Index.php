<?php

namespace App\Livewire\Technologies;

use App\Models\Technology;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
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

    #[On('destroy')]
    public function destroy(Technology $technology)
    {
        if ($technology->icon && Storage::disk('public')->exists('icons/' . $technology->icon)) {
            Storage::disk('public')->delete('icons/' . $technology->icon);
        }
        $technology->delete();
    }

    public function render()
    {
        $technologies = Technology::orderBy('name', 'ASC')->paginate(10);
        return view('livewire.technologies.index', [
            'technologies' => $technologies
        ]);
    }
}
