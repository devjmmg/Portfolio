<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'demo_url',
        'github_url',
        'image',
        'active',
        'order',
    ];
}
