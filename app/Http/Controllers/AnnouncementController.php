<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Comment;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display the form for creating a new announcement.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        $courses = Course::all();

        return view('dashboard.lecturer.lecturerSetting.course.addannoucement', compact('courses'));
    }

    /**
     * Store a newly created announcement in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        DB::beginTransaction();

        Announcement::create([
            'name' => $request->name ?? null,
            'description' => $request->description ?? null,
            'course_id' => $request->course_id ?? null,
        ]);

        DB::commit();

        return redirect()->route('course.lecturercourse')->with('success', 'Announcement has been stored.');
    }

    /**
     * Store a newly created comment for the specified announcement.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @param Announcement $annoucement
     * @return \Illuminate\Http\RedirectResponse
     */
    public function comment_store(Request $request, Announcement $annoucement): RedirectResponse
    {
        DB::beginTransaction();

        Comment::create([
            'description' => $request->description ?? null,
            'announcement_id' => $annoucement->id ?? null,
            'student_id' => auth()->user()->id ?? null,
        ]);

        DB::commit();

        return back()->with('success', 'Comment replied.');
    }
}
