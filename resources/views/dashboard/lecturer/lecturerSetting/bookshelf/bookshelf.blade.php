@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Teacher Settings</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Syllabus Settings</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Science Form 4 Syllabus - All Chapter</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Science Form 4 Syllabus</h4>
                <a href="{{ url('/lecturer-add-bookshelf') }}" class="btn btn-outline-primary float-right btn-xs">
					<i class="fa fa-plus mr-1"></i>
					Add Chapters
				</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>Chapter Name</th>
                                <th>Quiz Title</th>
                                <th>Date Created</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chapter 1 : Safety Measures in Laboratory</td>
                                <td>Quiz Chapter 1</td>
                                <td>20 Sep 2023</td>
                                <td>
                                    <div class="float-right">
                                        <a href="{{ url('student-quiz-attempt') }}" class="btn btn-primary btn-xs">
                                            <i class="fa fa-eye mr-1"></i>
                                            View Quiz Attempt
                                        </a>
                                        <a href="{{ url('/lecturer-quiz-setting') }}" class="btn btn-info btn-xs">
                                            <i class="fa fa-pencil-square-o mr-1"></i>
                                            Edit Quiz
                                        </a>
                                        <a href="{{ url('/lecturer-quiz-setting') }}" class="btn btn-success btn-xs">
                                            <i class="fa fa-plus mr-1"></i>
                                            Add Quiz
                                        </a>
                                        <a href="{{ url('/lecturer-add-bookshelf') }}" class="btn btn-info btn-xs">
                                            <i class="fa fa-pencil-square-o"></i>
                                            Edit
                                        </a>
                                        <button type="button" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash mr-1"></i>
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection