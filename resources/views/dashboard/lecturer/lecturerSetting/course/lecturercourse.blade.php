@extends('dashboard.layouts.index')

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Courses Settings</h4>
        </div>
        <div class="card-body">
            <div class="float-right">
                <!-- <button type="button" class="btn btn-success btn-xs light">
                    <i class="fa fa-plus mr-2"></i>
                    Add Course
                </button> -->
                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
                    <i class="fa fa-pencil-square-o mr-1"></i>
                    edit submission
                </button>
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
                            <th><strong>Course Code</strong></th>
                            <th><strong>Course Name</strong></th>
                            <th><strong>Total Student</strong></th>
                            <th><strong>Semester</strong></th>
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
                            <td><strong>ISB 42503</strong></td>
                            <td><div class="d-flex align-items-center"><span class="w-space-no">Internet Programming</span></div></td>
                            <td>250</td>
                            <td>02 Feb 2023</td>
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
                            <td><strong>IMB 20503 </strong></td>
                            <td><div class="d-flex align-items-center"><span class="w-space-no">Multimedia Ins. Design</span></div></td>
                            <td>90</td>
                            <td>02 Feb 2023</td>
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
                            <td><strong>MPU 3192</strong></td>
                            <td><div class="d-flex align-items-center"><span class="w-space-no">Philosophy</span></div></td>
                            <td>120</td>
                            <td>02 Feb 2023</td>
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

@include('dashboard.lecturer.lecturerSetting.course.coursemodal')


@endsection