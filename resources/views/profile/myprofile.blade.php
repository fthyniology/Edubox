@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">My Profile</a></li>
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="profile card card-body px-3 pt-3 pb-0">
            <div class="profile-head">
                <div class="photo-content">
                    <div class="cover-photo"></div>
                </div>

                @if(auth()->user()->hasRole('lecturer'))
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
                            <a href="{!! url('edit-my-profile'); !!}" class="btn btn-outline-success btn-xs">
                                <i class="fa fa-pencil-square-o"></i>
                                Edit My Profile
                            </a>
                        </div>
                    </div>
                </div>
                @elseif(auth()->user()->hasRole('student'))
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
                            <a href="{!! url('edit-my-profile'); !!}" class="btn btn-outline-success btn-xs">
                                <i class="fa fa-pencil-square-o"></i>
                                Edit My Profile
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">
    @if(auth()->user()->hasRole('student'))
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="profile-statistics">
                    <div class="text-center">
                        <div class="row">
                            <div class="col">
                                <h3 class="m-b-0">55</h3><span>Total Subject Registered</span>
                            </div>
                            <div class="col">
                                <h3 class="m-b-0">8</h3><span>Total Quiz Taken</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills light">
                    @if(auth()->user()->hasRole('lecturer'))
                    <li class=" nav-item">
                        <a href="#navpills-1T" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            My Student
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="#navpills-2T" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Student Quiz Attempt
                        </a>
                    </li>
                    @elseif(auth()->user()->hasRole('student'))
                    <li class=" nav-item">
                        <a href="#navpills-1S" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            My Subject
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-2S" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Quiz Results
                        </a>
                    </li>
                    @endif

                    
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                @if(auth()->user()->hasRole('lecturer'))
                    <div id="navpills-1T" class="tab-pane active">
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Class</th>
                                        <th>Date registered</th>
                                        <th>Quiz Taken</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="{!! url('preview-profile'); !!}">
                                                Baiduri Binti Anwar
                                            </a>
                                        </td>
                                        <td>Science Form 5</td>
                                        <td>23/05/2023</td>
                                        <td>7</td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <a href="">
                                                Kamila Chan
                                            </a>
                                        </td>
                                        <td>Science Form 5</td>
                                        <td>23/05/2023</td>
                                        <td>7</td>
                                    </tr>                                    
                                    <tr>
                                        <td>
                                            <a href="">
                                                Eckward Kid
                                            </a>
                                        </td>
                                        <td>Science Form 5</td>
                                        <td>23/05/2023</td>
                                        <td>7</td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="navpills-2T" class="tab-pane">
                        <!-- <h4 class="mb-4">Upcoming Assesment</h4> -->
                        <div class="table-responsive">
                            <table id="example5" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Quiz</th>
                                        <th>Date Attempt</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Baiduri Binti Anwar</td>
                                        <td>Quiz Chapter 3</td>
                                        <td>23/6/2023</td>
                                        <td>
                                            <h6 class="badge light badge-success">8/10</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kamila Chan</td>
                                        <td>Quiz Chapter 3</td>
                                        <td>23/6/2023</td>
                                        <td>
                                            <h6 class="badge light badge-danger">2/10</h6>                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Eckward Kid</td>
                                        <td>Quiz Chapter 3</td>
                                        <td>23/6/2023</td>
                                        <td>
                                            <h6 class="badge light badge-dark">No Attempt</h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @elseif(auth()->user()->hasRole('student'))
                        <div id="navpills-1S" class="tab-pane active">
                            <div class="table-responsive">
                                <table id="example2" class="table table-hover table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Teacher Name</th>
                                            <th>Subject</th>
                                            <th>Date registered</th>
                                            <th>Quiz Taken</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="{!! url('preview-profile'); !!}">
                                                    Farzani Haikal Bin Rosyam Nur
                                                </a>
                                            </td>
                                            <td>Science Form 5</td>
                                            <td>23/01/2023</td>
                                            <td>7</td>
                                        </tr>                                  
                                        <tr>
                                            <td>
                                                <a href="">
                                                    Lily Cheng
                                                </a>
                                            </td>
                                            <td>Science Form 4</td>
                                            <td>23/05/2022</td>
                                            <td>7</td>
                                        </tr>                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="navpills-2S" class="tab-pane">
                            <!-- <h4 class="mb-4">Upcoming Assesment</h4> -->
                            <div class="table-responsive">
                                <table id="example5" class="table table-hover table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Quiz</th>
                                            <th>Chapter</th>
                                            <th>Date Attempted</th>
                                            <th>Result</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Quiz Chapter 3</td>
                                            <td>Chapter 3 : Mikroorganisma</td>
                                            <td>12/05/2023</td>
                                            <td>
                                                <label class="badge light badge-dark">No Attempt</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quiz Chapter 2</td>
                                            <td>Chapter 2 : Mikroorganisma</td>
                                            <td>15/05/2023</td>
                                            <td>
                                                <label class="badge light badge-danger">2/10</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quiz Chapter 1</td>
                                            <td>Chapter 1 : Safety Measures in Laboratory</td>
                                            <td>23/6/2023</td>
                                            <td>
                                                <label class="badge light badge-success">8/10</label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

<!-- @push('custom-scripts')
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}" type="text/javascript"></script>
@endpush -->
