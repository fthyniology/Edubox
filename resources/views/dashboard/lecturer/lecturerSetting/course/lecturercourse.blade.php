@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Course Settings</a></li>
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">IMB 20503 - Multimedia Insrtuctional Design</a></li> -->
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
<div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills light">
                    <li class=" nav-item">
                        <a href="#navpills-course" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-annoucement" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Annoucements
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-quiz" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Quiz
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    
                    <div id="navpills-course" class="tab-pane active">
                        <h4 class="float-left">Courses List</h4>
                        <div class="float-right">
                            <a href="{{ url('/course-setting/add-course') }}" class="btn btn-success btn-xs">
                                <i class="fa fa-plus mr-1"></i>
                                Add Course
                            </a>
                            <button type="button" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil-square-o mr-1"></i>
                                Edit Course
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Semester</th>
                                        <th>Total Assesment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($courses as $course)
                                        <tr>
                                            <td>{{ $course->course_code ?? '' }}</td>
                                            <td>{{ $course->name ?? '' }}</td>
                                            <td>{{ $course->created_at->format('F Y') ?? '' }}</td>
                                            <td>{{ $course->assessments->count() ?? '' }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4">No data found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="navpills-annoucement" class="tab-pane">
                        <h4 class="float-left">All Annoucement</h4>
                        <div class="float-right">
                            <a href="{{ url('/course-setting/add-annoucement') }}" class="btn btn-success btn-xs">
                                <i class="fa fa-plus mr-1"></i>
                                Add Annoucement
                            </a>
                            <button type="button" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil-square-o mr-1"></i>
                                Edit Annoucement
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Announcement Name</th>
                                        <th>Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($announcements as $announcement)
                                        <tr>
                                            <td>{{ $announcement->course->course_code ?? '' }}</td>
                                            <td>{{ $announcement->name ?? '' }}</td>
                                            <td>{{ $announcement->created_at->format('F Y') ?? '' }}</td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="4">No data found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="navpills-quiz" class="tab-pane">
                        <h4 class="float-left">All Quiz</h4>
                        <div class="float-right">
                            <a href="{{ url('/lecturer-quiz-setting') }}" class="btn btn-success btn-xs">
                                <i class="fa fa-plus mr-1"></i>
                                Add Quiz
                            </a>
                            <button type="button" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil-square-o mr-1"></i>
                                Edit Quiz
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Course ID</th>
                                        <th>Course</th>
                                        <th>Quiz Title</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IMB 20503</td>
                                        <td>Multimedia Insrtuctional Design</td>
                                        <td>Quiz</td>
                                        <td>20 Sep 2023</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection