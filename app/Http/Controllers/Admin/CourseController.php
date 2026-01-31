<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Display dashboard/list of courses for IT Staff 
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', compact('courses'));
    }

    // Add new course details 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            'max_students' => 'required|integer|min:1',
        ]);

        // Laravel's Query Builder/Eloquent prevents SQL Injection 
        Course::create($validated);

        return redirect()->back()->with('success', 'Course added successfully.');
    }

    // Modify course details 
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'course_name' => 'required',
            'max_students' => 'required|integer|min:1',
        ]);

        $course->update($validated);

        return redirect()->back()->with('success', 'Course updated successfully.');
    }

    // Delete course 
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back()->with('success', 'Course deleted.');
    }
}