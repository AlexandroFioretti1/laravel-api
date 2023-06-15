<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(["technologies", "type"])->get();
        return response()->json($projects);
    }

    public function show($id)
    {
        $project = Project::with(["technologies", "type"])->where("id", $id)->first();
        if ($project) {
            return response()->json([
                'success' => true,
                'project' => $project
            ]);
        } else {
            return response()->json([
                'success' => false,
            ]);
        }
    }
}
