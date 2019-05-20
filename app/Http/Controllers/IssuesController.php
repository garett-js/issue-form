<?php

namespace App\Http\Controllers;

use App\Issue;
use App\Employee;

use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function index() {
        $issues = Issue::orderBy('id', 'desc')->paginate(8);
        return view('issues.index', compact('issues'));
    }

    public function show(Issue $issue) {
        return view('issues.show', compact('issue'));
    }

    public function create() {
        $employees = Employee::all();
        return view('issues.create', compact('employees'));
    }

    public function store() {

        $attributes = request()->validate([
            'phone_number' => ['required', 'min:5', 'max:15'],
            'name'         => ['required', 'min:2'],
            'employee_id'  => ['required'],
            'issue'        => ['required'],
            'ver_1c'       => [],
            'ver_platform' => [],
            'is_remote'    => [],
            'is_client'    => [],
            'organization' => [],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        if (request()->hasFile('image')) {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads'), $imageName);
            $attributes['image'] = '/uploads/' . $imageName;
        }
        
        Issue::create($attributes);
        return redirect('/issues');
    }

    public function edit(Issue $issue) {
        $employees = Employee::all();
        // return view('issues.edit', compact('issue'));
        return view('issues.edit')->with([
            'employees' => $employees,
            'issue' => $issue
        ]);
    }

    public function update(Request $req, Issue $issue) {   
        $issue->update($req->all());
        return redirect("/issues"); 
    }

    public function destroy(Issue $issue) { 
        $issue->delete();
        return redirect('/issues');
    }
}
