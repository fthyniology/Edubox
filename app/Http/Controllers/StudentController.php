<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.student.index');
    }
    public function quizattempt()
    {
        return view('dashboard.student.quizattempt');
    }
    public function pastyearpaper()
    {
        return view('dashboard.student.pastpaper');
    }
    public function submitassignment()
    {

        return view('dashboard.student.submitassignment');
    }
}
