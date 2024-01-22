@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Students Settings</a></li>
        </ol>
    </div>
@endsection

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
                            <th><strong>Student Name</strong></th>
                            <th><strong>Subject Taken</strong></th>
                            <th><strong>Student's Teacher</strong></th>
                            <th><strong>Date Registered</strong></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- @foreach ($students as $student)
                            <tr>
                                <td><strong>{{ $student->student_id ?? '' }}</strong></td>
                                <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">{{ $student->name ?? '' }}</span></div></td>
                                <td>{{ $student->email ?? '' }}</td>
                                <td>{{ $student->class_group ?? '' }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach -->
                        <tr>
                            <td>Baiduri Binti Anwar</td>
                            <td>
                                <ul>
                                    <li>Science Form 5</li>
                                    <li>Science Form 4</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Farzani Haikal</li>
                                    <li>Lily Cheng</li>
                                </ul>
                            </td>
                            <td>
                                22/02/2023
                            </td>
                            <td>
                                <div class="float-right">
                                    <button type="button" class="btn btn-success btn-xs">
                                        <i class="fa fa-pencil-square-o mr-1"></i>
                                        Edit
                                    </button>
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


@endsection