<?php

use App\Http\Controllers\AnnouncementController;
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
Route::get('/About-Us', [GeneralController::class, 'aboutus'])->name('general.aboutus');
Route::get('/faq', [GeneralController::class, 'faq'])->name('general.faq');

Route::group([
    'middleware' => ['auth', 'web'],
], function () {
    // landing page

    // Student site
    Route::get('/dashboard', [StudentController::class, 'index'])->name('student.index');
    Route::get('/myprofile', [StudentController::class, 'myprofile'])->name('student.myprofile');
    // Route::get('/lecturerprofile', [StudentController::class, 'lecturerprofile'])->name('student.lecturerprofile');
    Route::get('/quiz-attempt', [StudentController::class, 'quizattempt'])->name('student.quizattempt');

    // Course site
    Route::get('/course-list', [CoursesController::class, 'index'])->name('course.index');
    Route::post('/course-list/store', [CoursesController::class, 'store'])->name('course.store');
    Route::post('/course-list/edit/{course}', [CoursesController::class, 'edit'])->name('course.edit');
    Route::post('/course-list/update/{course}', [CoursesController::class, 'update'])->name('course.update');
    Route::post('/course-list/courseDetail/{course}', [CoursesController::class, 'courseDetail'])->name('course.courseDetail');
    Route::post('/course-list/destroy/{course}', [CoursesController::class, 'destroy'])->name('course.destroy');
    Route::get('/course-detail/{course}', [CoursesController::class, 'courseDetail'])->name('course.courseDetail');
    Route::get('/submit-assignment/{assessment}', [CoursesController::class, 'submit_assignment'])->name('student.submitassignment');
    Route::post('/submission/store/{assessment}', [CoursesController::class, 'submission_store'])->name('student.submission.store');
    Route::get('/lecturer-submission-view/{course}', [CoursesController::class, 'view_submission'])->name('course.view.submission');

    // Lecturer site
    Route::get('/lecturer', [LecturerController::class, 'index'])->name('course.index');
    Route::get('/lecturer-course', [CoursesController::class, 'lecturercourse'])->name('course.lecturercourse');
    Route::get('/lecturer-students', [LecturerController::class, 'lecturerstudent'])->name('course.lecturerstudent');
    Route::get('/lecturer-add-students', [LecturerController::class, 'addstudent'])->name('student.addstudent');
    Route::get('/lecturer-add-bookshelf', [LecturerController::class, 'addbookshelf'])->name('bookshelf.addbookshelf');
    Route::post('/lecturer/store/students', [LecturerController::class, 'student_store'])->name('student.store');
    Route::get('/lecturer-quiz-setting', [LecturerController::class, 'lecturerquizsetting'])->name('course.lecturerquizsetting');
    // Route::get('/lecturer-annoucements', [LecturerController::class, 'lecturerannoucement'])->name('course.lecturerannoucement');


    // tambah add
    Route::get('/course-setting/add-course', [LecturerController::class, 'lecturersettingaddcourse'])->name('lecturer.addcourse');
    Route::get('/course-setting/add-annoucement', [AnnouncementController::class, 'create'])->name('lecturer.addannoucement');
    Route::post('/annoucement/store', [AnnouncementController::class, 'store'])->name('announcement.store');
    Route::post('/annoucement/comment/store{annoucement}', [AnnouncementController::class, 'comment_store'])->name('announcement.comment.store');
});
