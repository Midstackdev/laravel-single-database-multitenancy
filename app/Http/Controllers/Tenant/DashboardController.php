<?php

namespace App\Http\Controllers\Tenant;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Company $company)
    {
        $projects = $company->projects;

        return view('tenant.dashboard', compact('projects'));
    }
}
