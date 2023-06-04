<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    public function create()
    {
        $courses = Course::all();
        
        return view('dashboard.lecturer.lecturerSetting.course.addannoucement', compact('courses'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $course = Announcement::create([
            'name' => $request->name ?? null,
            'description' => $request->description ?? null,
            'course_id' => $request->course_id ?? null,
        ]);

        DB::commit();

        return redirect()->route('course.lecturercourse')->with('success', 'Announcement has been stored.');
    }
}
