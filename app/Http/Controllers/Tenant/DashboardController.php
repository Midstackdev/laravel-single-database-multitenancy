<?php

namespace App\Http\Controllers\Tenant;

use App\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        // dd(request()->tenant());

        return view('tenant.dashboard', compact('projects'));
    }
}
