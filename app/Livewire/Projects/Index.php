<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $projects = Project::orderBy('name', 'ASC')->paginate(10);
        return view('livewire.projects.index', [
            'projects' => $projects
        ]);
    }
}
