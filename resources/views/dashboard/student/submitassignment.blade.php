@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/course-list') }}">Course</a></li>
            <li class="breadcrumb-item"><a href="{{ route('course.courseDetail', $assessment->course->id) }}">{{ $assessment->course->name ?? '' }}</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Course Submission</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Assignment Submission
                    </h4>
                </div>
                <form action="{{ route('student.submission.store', $assessment->id) }}" id="form-store-submission" class="needs-validation" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Note</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Assignment Title">
                            </div>
                            <div class="form-group">
                                <label>Upload Your Submission</label>
                                <input id="submission_image" name="submission_image" type="file" class="dropify" required placeholder="Submission">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success light float-right">Save changes</button>
                        <a href="{{ route('course.courseDetail', $assessment->course->id) }}" class="btn btn-danger light float-right  mr-2">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection