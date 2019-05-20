<?php

namespace App\Http\Controllers;
use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index() {
        //$projects = Project::all();
        $projects = Project::where('owner_id', auth()->id())->get();

        return view('projects.index', compact('projects'));
    }


    public function showIssueProject() {
        $project = Project::where('id', 1)->get()->first();
        return view('projects.view_for_issue', compact('project'));
    }


    public function show(Project $project) {
        return view('projects.show', compact('project'));
    }

    public function create() {
        return view('projects.create');
    }

    public function edit(Project $project) {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project) {   
        $project->update(request(['title', 'description']));
        return redirect("/projects"); 
    }

    public function destroy(Project $project) { 
        $project->delete();
        return redirect('/projects');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3']
        ]);
 
        $attributes['owner_id'] = auth()->id();
        //Project::create(request(['title', 'description']));
        Project::create($attributes);
        
        return redirect('/projects');
    }
}