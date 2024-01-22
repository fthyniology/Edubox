<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    /**
     * Display the main dashboard for the student.
     *
     * This method renders the 'dashboard.student.index' view, which serves
     * as the main dashboard page for the student.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('dashboard.student.index');
    }

    /**
     * Display the student's profile page.
     *
     * This method renders the 'profile.myprofile' view, which displays the
     * profile information for the currently authenticated student.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function myprofile()
    {
        return view('profile.myprofile');
    }

    /**
     * Display the lecturer's profile page.
     *
     * This method renders the 'profile.lecturerprofile' view, which displays the
     * profile information for the currently authenticated lecturer.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function lecturerprofile()
    {
        return view('profile.lecturerprofile');
    }

    /**
     * Display the page for attempting quizzes.
     *
     * This method renders the 'dashboard.student.quizattempt' view, which allows
     * the student to attempt quizzes.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function quizattempt()
    {
        return view('dashboard.student.quizattempt');
    }

    /**
     * Display the page for submitting assignments.
     *
     * This method renders the 'dashboard.student.submitassignment' view, which
     * contains the form for submitting assignments.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function submitassignment()
    {
        return view('dashboard.student.submitassignment');
    }
}
