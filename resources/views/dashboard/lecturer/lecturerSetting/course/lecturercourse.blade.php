@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Course Settings</a></li>
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">IMB 20503 - Multimedia Insrtuctional Design</a></li> -->
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
<div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills light">
                    <li class=" nav-item">
                        <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Annoucements
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    
                    <div id="navpills-1" class="tab-pane active">
                        <h4 class="float-left">Courses List</h4>
                        <div class="float-right">
                            <a href="{{ url('/course-setting/add-course') }}" class="btn btn-success btn-xs">
                                <i class="fa fa-plus mr-1"></i>
                                Add Course
                            </a>
                            <button type="button" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil-square-o mr-1"></i>
                                Edit Course
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Semester</th>
                                        <th>Total Assesment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IMB 50203</td>
                                        <td>Multimedia Insrtuctional Design</td>
                                        <td>Feb 2023</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="navpills-2" class="tab-pane">
                        <h4 class="float-left">All Annoucement</h4>
                        <div class="float-right">
                            <a href="{{ url('/course-setting/add-annoucement') }}" class="btn btn-success btn-xs">
                                <i class="fa fa-plus mr-1"></i>
                                Add Annoucement
                            </a>
                            <button type="button" class="btn btn-info btn-xs">
                                <i class="fa fa-pencil-square-o mr-1"></i>
                                Edit Annoucement
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Semester</th>
                                        <th>Total Assesment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IMB 50203</td>
                                        <td>Multimedia Insrtuctional Design</td>
                                        <td>Feb 2023</td>
                                        <td>4</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>

@endsection