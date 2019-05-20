<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function show(Test $test) {
       return view('tests.show', compact('test')); 
    }
}
