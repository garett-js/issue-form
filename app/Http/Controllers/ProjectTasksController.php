<?php

namespace App\Http\Controllers;
use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    // public function update(Task $task) {
    //     request()->has('completed') ? $task->complete() : $task->incomplete();

    //     return back();
    // }

    public function store(Project $project) {
        
        $attributes = request()->validate([
            'description' => ['required', 'min:3']
        ]);

        $project->addTask($attributes);

        // Task::create([
        //     'description' => request('description'),
        //     'project_id' => $project->id
        // ]);

        return back(); 
    }
}
