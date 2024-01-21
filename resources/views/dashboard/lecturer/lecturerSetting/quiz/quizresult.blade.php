@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Teacher Settings</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Syllabus Settings</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Science Form 4 Syllabus</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Chapter 1</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Quiz Attempts</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Quiz Attempts</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Quiz Title</th>
                                <th>Date atempt</th>
                                <th>Results</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="">Bidin Alzaifar</a>
                                </td>
                                <td>Quiz Chapter 1</td>
                                <td>20 Sep 2023</td>
                                <td>
                                    <label class="badge light badge-danger">2/10</label>
                                    <label class="badge light badge-warning">4/10</label>
                                    <label class="badge light badge-success">8/10</label>
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