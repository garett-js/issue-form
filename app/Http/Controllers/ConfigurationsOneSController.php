<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigurationsOneSController extends Controller
{
    public function index() {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function show(Employee $employee) {
        return view('employees.show', compact('employee'));
    }

    public function create() {
        return view('employees.create');
    }

    public function store() {
        $attributes = request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'position' => []
        ]);
        Employee::create($attributes);

        return redirect('/employees');
    }

    public function edit(Employee $employee) {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $req, Employee $employee) {   
        $employee->update($req->all());
        return redirect("/employees"); 
    }

    public function destroy(Employee $employee) { 
        $employee->delete();
        return redirect('/employees');
    }
}
