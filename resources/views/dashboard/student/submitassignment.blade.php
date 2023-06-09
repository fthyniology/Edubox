@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/course-list') }}">Course</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/course-detail') }}">IMB 20503 - Multimedia Insrtuctional Design</a></li>
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
                <div class="card-body">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Note</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Quiz Title">
                        </div>
                        <div class="form-group">
                            <label>Upload Your Submission</label>
                            <input id="course_image" name="course_image" type="file" class="dropify" required placeholder="Submission">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success light float-right">Save changes</button>
                    <a href="{{ url('/course-detail') }}" class="btn btn-danger light float-right  mr-2">Cancel</a>
                </div>
            </div>
        </div>
    </div>
@endsection