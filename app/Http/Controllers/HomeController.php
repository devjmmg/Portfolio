<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke()
    {
        $technologies = Technology::where('active', 1)->orderBy('name', 'ASC')->get();
        $github = Technology::where('slug', 'github')->first();
        $user = User::first();
        return view('home', [
            'technologies' => $technologies,
            'github' => $github,
            'user' => $user
        ]);
    }
}
