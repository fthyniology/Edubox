@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/lecturer-course') }}">Course Settings</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Quiz Setting</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Quiz Setting
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Quiz Title</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Quiz Title">
                            </div>
                            <button class="btn btn-sm btn-success float-right">
                                <i class="fa fa-plus mr-2"></i>
                                Add Question
                            </button>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Question</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Question">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Number of answer</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Question">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>first answer</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Question">
                            </div>
                            <div class="form-group">
                                <label>second answer</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Question">
                            </div>
                            <div class="form-group">
                                <label>third answer</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Question">
                            </div>
                            <div class="form-group">
                                <label>fourth answer</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Question">
                            </div>
                            <button class="btn btn-sm btn-success float-right">
                                <i class="fa fa-plus mr-2"></i>
                                Add Question
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success light float-right">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection