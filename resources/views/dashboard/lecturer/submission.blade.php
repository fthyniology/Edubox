@extends('dashboard.layouts.index')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Student Submission
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>File</th>
                                    <th>Date Submission</th>
                                    <th>Assesment Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>AssignmentOne.pdf</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center">Assignment 1</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>AssignmentTwo.pdf</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center">Assignment 2</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>542</strong></td>
                                    <td><div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                                    <td>Final.pdf</td>
                                    <td>01 August 2020</td>
                                    <td><div class="d-flex align-items-center">Final</div></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-download"></i></a>
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