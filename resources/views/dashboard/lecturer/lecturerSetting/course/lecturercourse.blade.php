@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Teacher Settings</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Syllabus Settings</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="float-left mb-3">Syllabus List</h4>
                <div class="float-right mb-3">
                    <a href="{{ url('/course-setting/add-course') }}" class="btn btn-success btn-xs">
                        <i class="fa fa-plus mr-1"></i>
                        Add Syllabus
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>Subject Code</th>
                                <th>Syllabus Name</th>
                                <th>Date Created</th>
                                <th>Total Assesment</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($courses as $course)
                                <tr>
                                    <td>{{ $course->course_code ?? '' }}</td>
                                    <td>{{ $course->name ?? '' }}</td>
                                    <td>{{ $course->created_at->format('F Y') ?? '' }}</td>
                                    <td>{{ $course->assessments->count() ?? '' }}</td>
                                    <td>
                                        <div class="float-right">
                                            <a href="{{ route('all-chapters', $course->id) }}" class="btn btn-info btn-xs">
                                                <i class="fa fa-eye mr-1"></i>
                                                View Chapters
                                            </a>
                                            <button type="button" class="btn btn-success btn-xs">
                                                <i class="fa fa-pencil-square-o mr-1"></i>
                                                Edit
                                            </button>
                                            <button type="button" class="btn btn-danger btn-xs">
                                                <i class="fa fa-trash mr-1"></i>
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No data found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- <div class="tab-content">
                    <div id="navpills-course" class="tab-pane active">
                        
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
                                        <th>Subject Code</th>
                                        <th>Subject</th>
                                        <th>Quiz Title</th>
                                        <th>Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IMB 20503</td>
                                        <td>Multimedia Insrtuctional Design</td>
                                        <td>Quiz</td>
                                        <td>20 Sep 2023</td>
                                        <td>
                                            <div class="float-right">
                                                <a href="{{ url('/lecturer-add-bookshelf') }}" class="btn btn-success btn-xs">
                                                    <i class="fa fa-plus mr-1"></i>
                                                    Add Quiz
                                                </a> 
                                                <button type="button" class="btn btn-info btn-xs">
                                                    <i class="fa fa-pencil-square-o mr-1"></i>
                                                    Edit Quiz
                                                </button>
                                                <button type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash mr-1"></i>
                                                    Delete Quiz
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
            </div> 
        </div>
    </div>
   
</div>

@endsection