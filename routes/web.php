<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/technologies', [TechnologyController::class, 'index'])->name('technologies.index');
    Route::get('/technologies/create', [TechnologyController::class, 'create'])->name('technologies.create');
    Route::get('/technologies/{technology}/edit', [TechnologyController::class, 'edit'])->name('technologies.edit');

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');

    Route::get('/projects/{technology}', [ProjectController::class, 'show'])->name('projects.show');

});

require __DIR__.'/auth.php';
