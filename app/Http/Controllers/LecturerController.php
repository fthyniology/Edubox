<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LecturerController extends Controller
{
    /**
     * Display the main dashboard for the lecturer.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('dashboard.lecturer.index');
    }

    /**
     * Display the lecturer's course settings in the dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturercourse(): View
    {
        return view('dashboard.lecturer.lecturerSetting.course.lecturercourse');
    }

    /**
     * Display the past paper management page for the lecturer.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function pastpaper(): View
    {
        return view('dashboard.lecturer.pastpaper');
    }

    /**
     * Display the bookshelf management page for the lecturer.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function bookshelf(): View
    {
        return view('dashboard.lecturer.lecturerSetting.bookshelf.bookshelf');
    }

    /**
     * Display the quiz result management page for the lecturer.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function quizresult(): View
    {
        return view('dashboard.lecturer.lecturerSetting.quiz.quizresult');
    }

    /**
     * Display the list of students assigned to the lecturer.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturerstudent(): View
    {
        $students = auth()->user()->students;

        return view('dashboard.lecturer.lecturerSetting.student.lecturerstudent', compact('students'));
    }

    /**
     * Store a newly created student in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function student_store(Request $request): RedirectResponse
    {
        DB::beginTransaction();

        $user = User::create([
            'name' => $request->student_name,
            'email' => $request->student_email,
            'password' => $request->password,
            'student_id' => $request->student_id,
            'lecturer_id' => auth()->user()->id,
            'class_group' => $request->class_group,
        ])->assignRole('student');

        if ($request->hasFile('profile_image')) {

            $destination_path = 'profile_image/' . $user->id ?? 0 . '/';
            $file_name = $request->file('profile_image')->getClientOriginalName();
            $request->file('profile_image')->storeAs($destination_path, $file_name);

            $user->update([
                'profile_name' => $file_name,
                'profile_dir' => $destination_path,
            ]);
        }

        DB::commit();

        return redirect()->route('course.lecturerstudent')->with('success', 'User has been stored.');
    }

    /**
     * Display the form for adding a new course in the lecturer settings.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturersettingaddcourse(): View
    {
        return view('dashboard.lecturer.lecturerSetting.course.addcourse');
    }

    /**
     * Display the form for adding a new announcement in the lecturer settings.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturersettingaddannoucement(): View
    {
        return view('dashboard.lecturer.lecturerSetting.course.addannoucement');
    }

    /**
     * Display the form for adding a new student in the lecturer settings.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturersettingaddstudent(): View
    {
        return view('dashboard.lecturer.lecturerSetting.student.addstudent');
    }

    /**
     * Display the submissions for quizzes and assignments in the lecturer dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturerviewsubmission(): View
    {
        return view('dashboard.lecturer.submission');
    }

    /**
     * Display the quiz settings in the lecturer dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturerquizsetting(): View
    {
        return view('dashboard.lecturer.lecturerSetting.quiz.quizsetting');
    }

    /**
     * Display the form for adding a new student in the lecturer settings.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function addstudent(): View
    {
        return view('dashboard.lecturer.lecturerSetting.student.addstudent');
    }

    /**
     * Display the form for adding a new bookshelf in the lecturer settings.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function addbookshelf(): View
    {
        return view('dashboard.lecturer.lecturerSetting.bookshelf.addbookshelf');
    }
}
