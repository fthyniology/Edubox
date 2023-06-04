<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Assessment;
use App\Models\Bookshelf;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    public function index()
    {
        return view('courses.index');
    }

    public function lecturercourse()
    {
        $courses = Course::all();

        $announcements = Announcement::all();

        return view('dashboard.lecturer.lecturerSetting.course.lecturercourse', compact('courses', 'announcements'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $course = Course::create([
            'lecturer_id' => auth()->user()->id ?? null,
            'name' => $request->course_name ?? null,
            'course_code' => $request->course_code ?? null,
            'course_description' => $request->course_description ?? null,
        ]);

        if ($request->hasFile('course_image')) {

            $destination_path = 'course/' . $course->id ?? 0 . '/';
            $file_name = $request->file('course_image')->getClientOriginalName();
            $request->file('course_image')->storeAs($destination_path, $file_name);

            $course->update([
                'file_name' => $file_name,
                'file_dir' => $destination_path,
            ]);
        }

        $bookshelf = Bookshelf::create([
            'name' => $request->extra_reading_url ?? null,
            'type' => $request->bookshelf_type ?? null,
            'course_id' => $course->id,
        ]);

        if ($request->hasFile('lecture_note_files')) {

            $destination_path = 'lecture_notes/' . $course->id ?? 0 . '/';
            $file_name = $request->file('lecture_note_files')->getClientOriginalName();
            $request->file('lecture_note_files')->storeAs($destination_path, $file_name);

            $bookshelf->update([
                'file_name' => $file_name,
                'file_dir' => $destination_path,
            ]);
        }

        $bookshelf = Assessment::create([
            'name' => $request->assessment_name ?? null,
            'description' => $request->assessment_description ?? null,
            'type' => $request->assessment_type ?? null,
            'course_id' => $course->id,
        ]);

        DB::commit();

        return redirect()->route('course.lecturercourse')->with('success', 'Course has been stored.');
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
