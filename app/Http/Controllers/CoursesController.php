<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function store(Request $request)
    {
        Course::create($request->all());

        return back()->with('success', 'Course has been stored.');
    }

    public function courseDetail(Request $request, Course $course)
    {
        return view('courses.coursedetail', compact('course'));
    }

    public function edit(Request $request, Course $course)
    {
        return view('courses.coursedetail', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());

        return back()->with('success', 'Course has been updated.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return back()->with('success', 'Course has been deleted.');
    }
}
