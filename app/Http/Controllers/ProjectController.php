<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function edit(Project $project)
    {
        $project->load('technologies');
        return view('projects.edit', [
            'project' => $project
        ]);
    }
}
