<?php

namespace App\Http\Controllers;

use App\Models\Course; // Import the Course Model
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Fetch all courses with their related students
        $courses = Course::with('students')->get(); 
        
        // Send the data to the view folder we are about to create
        return view('courses.index', compact('courses'));
    }
}
