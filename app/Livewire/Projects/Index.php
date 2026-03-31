<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{

    public function updateOrder(Project $project, $value)
    {
        if ( $project->order != $value ) {
            $value = $value >= 1 ? $value : 1;
            $project->update([
                'order' => $value
            ]);
        }
    }

    public function toggleActive($id)
    {
        $project = Project::find($id);
        $project->active = !$project->active;
        $project->save();
    }

    #[On('destroy')]
    public function destroy(Project $project)
    {
        if ($project->icon && Storage::disk('public')->exists('projects/' . $project->icon)) {
            Storage::disk('public')->delete('projects/' . $project->icon);
        }
        $project->delete();
    }

    public function render()
    {

        $projects = Project::orderBy('name', 'ASC')->paginate(10);
        $github = Technology::where('slug', 'github')->first();
        return view('livewire.projects.index', [
            'projects' => $projects,
            'github' => $github
        ]);
    }
}
