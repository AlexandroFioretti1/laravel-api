<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        $project = Project::orderByDesc('start_date')->get();

        return view('admin.dashboard', compact('project'));
    }
}
