@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Preview Profile</a></li>
        </ol>
    </div>
@endsection

@section('content')
@if(auth()->user()->hasRole('lecturer'))
<div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo"></div>
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                        <img src="{{ asset('images/profile/student-female.png') }}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            <h4 class="text-primary mb-0">Baiduri Binti Anwar</h4>
                            <p>Student</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            <h4 class="text-muted mb-0">baiduri@gmail.com</h4>
                            <p>Email</p>
                        </div>
                        <div class="ml-auto">
                            <!-- <a href="{!! url('edit-my-profile'); !!}" class="btn btn-outline-success btn-xs">
                                <i class="fa fa-pencil-square-o"></i>
                                Edit My Profile
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>Quiz Chapter</th>
                                <th>Quiz Attempt Date</th>
                                <th>Quiz Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chapter 1 : Safety Measures in Laboratory</td>
                                <td>23/03/2023</td>
                                <td>
                                    <label class="badge light badge-success">8/10</label>
                                </td>
                            </tr>                                  
                            <tr>
                                <td>Chapter 2 : Safety Measures in Laboratory</td>
                                <td>23/05/2023</td>
                                <td>
                                    <label class="badge light badge-success">8/10</label>
                                </td>
                            </tr>                                  
                            <tr>
                                <td>Chapter 3 : Safety Measures in Laboratory</td>
                                <td>23/09/2023</td>
                                <td>
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
@elseif(auth()->user()->hasRole('student'))
<div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo"></div>
                </div>
                <div class="profile-info">
                    <div class="profile-photo">
                        <img src="{{ asset('images/profile/Teacher.png') }}" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            <h4 class="text-primary mb-0">Farzani Haikal Bin Rosyam Nur</h4>
                            <p>Science Form 5 Teacher</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            <h4 class="text-muted mb-0">zani@gmail.com</h4>
                            <p>Email</p>
                        </div>
                        <div class="ml-auto">
                            <!-- <a href="{!! url('edit-my-profile'); !!}" class="btn btn-outline-success btn-xs">
                                <i class="fa fa-pencil-square-o"></i>
                                Edit My Profile
                            </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="table table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th>Quiz Chapter</th>
                                <th>Quiz Attempt Date</th>
                                <th>Quiz Result</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chapter 1 : Safety Measures in Laboratory</td>
                                <td>23/03/2023</td>
                                <td>
                                    <label class="badge light badge-success">8/10</label>
                                </td>
                            </tr>                                  
                            <tr>
                                <td>Chapter 2 : Safety Measures in Laboratory</td>
                                <td>23/05/2023</td>
                                <td>
                                    <label class="badge light badge-success">8/10</label>
                                </td>
                            </tr>                                  
                            <tr>
                                <td>Chapter 3 : Safety Measures in Laboratory</td>
                                <td>23/09/2023</td>
                                <td>
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
@endif

@endsection