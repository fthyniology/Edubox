<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [GeneralController::class, 'index'])->name('general.index');

Route::group([
    'middleware' => ['auth', 'web']
], function () {
    // landing page

    // Student site
    Route::get('/dashboard', [StudentController::class, 'index'])->name('student.index');
    Route::get('/myprofile', [StudentController::class, 'myprofile'])->name('student.myprofile');
    Route::get('/lecturerprofile', [StudentController::class, 'lecturerprofile'])->name('student.lecturerprofile');

    // Course site
    Route::get('/course-list', [CoursesController::class, 'index'])->name('course.index');
    Route::post('/course-list/store', [CoursesController::class, 'store'])->name('course.store');
    Route::post('/course-list/edit/{course}', [CoursesController::class, 'edit'])->name('course.edit');
    Route::post('/course-list/update/{course}', [CoursesController::class, 'update'])->name('course.update');
    Route::post('/course-list/courseDetail/{course}', [CoursesController::class, 'courseDetail'])->name('course.courseDetail');
    Route::post('/course-list/destroy/{course}', [CoursesController::class, 'destroy'])->name('course.destroy');
    Route::get('/course-detail', [CoursesController::class, 'courseDetail'])->name('course.courseDetail');

    // Lecturer site
    Route::get('/lecturer', [LecturerController::class, 'index'])->name('course.index');
    Route::get('/lecturer-course', [LecturerController::class, 'lecturercourse'])->name('course.lecturercourse');
    Route::get('/lecturer-students', [LecturerController::class, 'lecturerstudent'])->name('course.lecturerstudent');
    // Route::get('/lecturer-annoucements', [LecturerController::class, 'lecturerannoucement'])->name('course.lecturerannoucement');

    
    // tambah add
    Route::get('/course-setting/add-course', [LecturerController::class, 'lecturersettingaddcourse'])->name('lecturer.addcourse');
    Route::get('/course-setting/add-annoucement', [LecturerController::class, 'lecturersettingaddannoucement'])->name('lecturer.addannoucement');
});

