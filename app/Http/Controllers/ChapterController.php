<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChapterController extends Controller
{
    /**
     * Display a listing of all chapters.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Course $course): View
    {
        $chapters = $course->chapters;

        return view('dashboard.lecturer.lecturerSetting.bookshelf.bookshelf', compact('course', 'chapters'));
    }

    /**
     * Display the form for creating a new announcement.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Course $course): View
    {
        return view('dashboard.lecturer.lecturerSetting.bookshelf.addbookshelf', compact('course'));
    }

    /**
     * Store a newly created chapter in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        DB::beginTransaction();

        $chapter = Chapter::create($request->all());

        if ($request->hasFile('file')) {

            $destination_path = 'chapters/' . $chapter->id ?? 0 . '/';
            $file_name = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs($destination_path, $file_name);

            $chapter->update([
                'file_name' => $file_name,
                'file_dir' => $destination_path,
            ]);
        }

        DB::commit();

        return redirect()->route('all-chapters', $request->course_id)->with('success', 'Chapter has been stored.');
    }
}
