<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    public function index()
    {
        $technologies = Technology::all();
        return view('technologies.index', [
            'technologies' => $technologies
        ]);
    }

    public function create()
    {
        return view('technologies.create');
    }

    public function edit(Technology $technology)
    {
        return view('technologies.edit', [
            'technology' => $technology
        ]);
    }

}
