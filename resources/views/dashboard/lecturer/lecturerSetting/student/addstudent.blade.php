<!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Student Name</label>
                            <input id="course_code" name="course_code" type="text" class="form-control" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Student ID</label>
                            <input id="course_code" name="course_code" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <label>dropify</label>
                            <input id="course_code" name="course_code" type="file" class="dropify" data-allowed-file-extensions="pdf png psd" />
                        </div>
                        <div class="form-group">
                            <label>Class Group (select one):</label>
                            <select class="form-control" id="sel1">
                                <option>L01-B01</option>
                                <option>L01-B02</option>
                                <option>L01-B03</option>
                                <option>L01-B04</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success light">Save changes</button>
            </div>
        </div>
    </div>
</div> -->

@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/lecturer-course') }}">Student Settings</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Add Student</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('student.store') }}" id="form-store-course" class="needs-validation" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Student
                        </h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Student Name</label>
                                    <input id="student_name" name="student_name" type="text" class="form-control" placeholder="Enter student name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Student Email</label>
                                    <input id="student_email" name="student_email" type="email" class="form-control" placeholder="Enter student email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Student Password</label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Enter student password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Student ID</label>
                                    <input id="student_id" name="student_id" type="text" class="form-control" placeholder="Enter student ID">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Profile Picture</label>
                                    <input id="profile_image" name="profile_image" type="file" class="dropify" data-allowed-file-extensions="png jpg" />
                                </div>
                                <div class="form-group">
                                    <label>Class Group (select one):</label>
                                    <select class="form-control" id="class_group" name="class_group">
                                        <option value="L01-B01">L01-B01</option>
                                        <option value="L01-B02">L01-B02</option>
                                        <option value="L01-B03">L01-B03</option>
                                        <option value="L01-B04">L01-B04</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success light float-right">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection