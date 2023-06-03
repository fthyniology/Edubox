<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.lecturer.index');
    }
    public function lecturercourse()
    {
        return view('dashboard.lecturer.lecturerSetting.course.lecturercourse');
    }
    // public function lecturerannoucement()
    // {
    //     return view('dashboard.lecturer.lecturerSetting.annoucement.lecturerannoucement');
    // }
    public function lecturerstudent()
    {
        return view('dashboard.lecturer.lecturerSetting.student.lecturerstudent');
    }

    // Tambah add
    public function lecturersettingaddcourse()
    {
        return view('dashboard.lecturer.lecturerSetting.course.addcourse');
    }
    public function lecturersettingaddannoucement()
    {
        return view('dashboard.lecturer.lecturerSetting.course.addannoucement');
    }
    public function lecturersettingaddstudent()
    {
        return view('dashboard.lecturer.lecturerSetting.student.addstudent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
