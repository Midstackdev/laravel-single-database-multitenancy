<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        dd(Project::all());
    }
}
