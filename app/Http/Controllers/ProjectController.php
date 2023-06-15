<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();

        return view('admin.projects.create', compact('types', 'technologies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $val_data = $request->validated();
        $val_data["start_date"] = date('Y-m-d');
        if ($request->hasFile('screenshot')) {
            $img_path = Storage::put('uploads/', $request->screenshot);
            $val_data['screenshot'] = $img_path;
        }
        $newProject =  Project::create($val_data);
        if ($request->technologies) {
            $newProject->technologies()->attach($request->technologies);
        }

        return to_route('admin.projects.index')->with('message', "$request->name insert");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'types', 'technologies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {

        $val_data = $request->validated();
        if ($request->hasFile('screenshot')) {
            if ($project->screenshot) {
                Storage::delete($project->screenshot);
            }
            $img_path = Storage::put('uploads', $request->screenshot);
            $val_data['screenshot'] = $img_path;
        }
        $project->update($val_data);
        if ($request->technologies) {
            $project->technologies()->sync($request->technologies);
        }
        return to_route('admin.projects.show', $project->id)->with('message', "$request->name edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->technologies()->sync([]);
        if ($project->screenshot) {
            Storage::delete($project->screenshot);
        }
        $project->delete();
        return to_route('admin.projects.index');
    }
}
