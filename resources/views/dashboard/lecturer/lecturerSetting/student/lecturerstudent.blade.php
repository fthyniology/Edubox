@extends('dashboard.layouts.index')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Students Settings</h4>
        </div>
        <div class="card-body">
            <div class="float-right">
                <a href="{{ url('/lecturer-add-students') }}" class="btn btn-info btn-xs">
                    <i class="fa fa-pencil-square-o mr-1"></i>
                    Add Student
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th class="width50">
                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                    <input type="checkbox" class="custom-control-input" id="checkAll" required="">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th><strong>Student ID</strong></th>
                            <th><strong>Student Name</strong></th>
                            <th><strong>Student Email</strong></th>
                            <th><strong>Student Course Group (Class)</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
                                    <label class="custom-control-label" for="customCheckBox2"></label>
                                </div>
                            </td>
                            <td><strong>542</strong></td>
                            <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                            <td>example@example.com	</td>
                            <td>L01-B02</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
                                    <label class="custom-control-label" for="customCheckBox3"></label>
                                </div>
                            </td>
                            <td><strong>542</strong></td>
                            <td><div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                            <td>example@example.com	</td>
                            <td>L01-B02</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
                                    <label class="custom-control-label" for="customCheckBox4"></label>
                                </div>
                            </td>
                            <td><strong>542</strong></td>
                            <td><div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
                            <td>example@example.com	</td>
                            <td>L01-B02</td>
                            <td>
                                <div class="d-flex">
                                    <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection