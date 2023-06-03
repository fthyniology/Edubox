<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


// landing page
Route::get('/', 'App\Http\Controllers\GeneralController@index');


// Student site
Route::get('/dashboard', 'App\Http\Controllers\StudentController@index');
Route::get('/myprofile', 'App\Http\Controllers\StudentController@myprofile');
Route::get('/lecturerprofile', 'App\Http\Controllers\StudentController@lecturerprofile');

Route::get('/course-list', 'App\Http\Controllers\CoursesController@index');
Route::get('/course-detail', 'App\Http\Controllers\CoursesController@courseDetail');

// Lecturer site
Route::get('/lecturer', 'App\Http\Controllers\LecturerController@index');
Route::get('/lecturer-course', 'App\Http\Controllers\LecturerController@lecturercourse');
Route::get('/lecturer-students', 'App\Http\Controllers\LecturerController@lecturerstudent');
Route::get('/lecturer-annoucements', 'App\Http\Controllers\LecturerController@lecturerannoucement');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
