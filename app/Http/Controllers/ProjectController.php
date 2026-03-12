<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects   = Project::latest()->get();
        $categories = Project::select('category')->distinct()->pluck('category');

        return view('projects', compact('projects', 'categories'));
    }
}
