<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function pastpaper()
    {
        return view('dashboard.lecturer.pastpaper');
    }

    
    public function bookshelf()
    {
        return view('dashboard.lecturer.lecturerSetting.bookshelf.bookshelf');
    }
    public function quizresult()
    {
        return view('dashboard.lecturer.lecturerSetting.quiz.quizresult');
    }
    
    // public function lecturerannoucement()
    // {
    //     return view('dashboard.lecturer.lecturerSetting.annoucement.lecturerannoucement');
    // }
    public function lecturerstudent()
    {
        $students = auth()->user()->students;

        return view('dashboard.lecturer.lecturerSetting.student.lecturerstudent', compact('students'));
    }
    

    public function student_store(Request $request)
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


    public function lecturerviewsubmission()
    {
        return view('dashboard.lecturer.submission');
    }
    public function lecturerquizsetting()
    {
        return view('dashboard.lecturer.lecturerSetting.quiz.quizsetting');
    }
    public function addstudent()
    {
        return view('dashboard.lecturer.lecturerSetting.student.addstudent');
    }
    public function addbookshelf()
    {
        return view('dashboard.lecturer.lecturerSetting.bookshelf.addbookshelf');
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
