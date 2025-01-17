<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        Project::create($request->all());

        return back();
    }


    public function show(Project $project)
    {
        return view('tenant.projects.show', compact('project'));
    }
}
