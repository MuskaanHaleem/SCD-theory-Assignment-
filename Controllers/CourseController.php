<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display all courses
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // Show form to create a new course
    public function create()
    {
        return view('courses.create');
    }

    // Handle form submission to add a new course
    public function store(Request $request)
    {
        // Debug incoming form data
        dd($request->all());

        // Validate and create new course
        $request->validate([
            'title' => 'required|string|max:255',
            'credit_hrs' => 'required|integer',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course added successfully!');
    }
}
