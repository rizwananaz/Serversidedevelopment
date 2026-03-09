<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    $students = \App\Models\Student::with('courses')->get();
    return view('students.index', compact('students'));
}
}
