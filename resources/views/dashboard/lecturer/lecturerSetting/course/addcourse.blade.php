@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/lecturer-course') }}">Course Settings</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('/lecturer-course') }}">Course</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Add Course</a></li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label>Course Code</label>
                            <input type="text" class="form-control" placeholder="Course Code">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Course Name</label>
                            <input type="text" class="form-control" placeholder="Course Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Course Image</label>
                            <input type="file" class="form-control" data-allowed-file-extensions="pdf png psd" />
                        </div>
                        <div class="form-group col-md-12">
                            <label>Course Description</label>
                            <input type="text" class="form-control" placeholder="Course Description">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Add Bookshelf</label>
                            <select class="form-control" id="Assessment">
                                <option>Lecture notes</option>
                                <option>Extra Readings</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Extra Readings URL</label>
                            <input type="text" class="form-control" placeholder="Extra Readings URL">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Lecture Notes Files</label>
                            <input type="file" class="form-control" data-allowed-file-extensions="pdf png psd" />
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Add Assesment</label>
                                <select class="form-control" id="Assessment">
                                <option>Assignment</option>
                                <option>Quiz</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Assignment Name</label>
                            <input type="text" class="form-control" placeholder="Extra Readings URL">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Quiz Name</label>
                            <input type="text" class="form-control" placeholder="Extra Readings URL">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <!-- <div class="float-right"> -->
                        <a href="{{ url('/lecturer-course') }}" class="btn btn-danger light float-left">Cancel</a>
                        <a href="{{ url('/lecturer-course') }}" class="btn btn-success light float-right">Save changes</a>
                    <!-- </div> -->
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

