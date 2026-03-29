<?php

namespace App\Http\Controllers;

use App\Models\Technology;

class HomeController extends Controller
{
    public function __invoke()
    {
        $technologies = Technology::orderBy('name', 'ASC')->get();
        return view('home', [
            'technologies' => $technologies
        ]);
    }
}
