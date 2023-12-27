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
                <div class="profile-info">
                    <div class="profile-photo">
                        @if(auth()->user()->hasRole('lecturer'))
                            <img src="{{ asset('images/profile/caid.png') }}" class="img-fluid rounded-circle" alt="">
                        @elseif(auth()->user()->hasRole('student'))
                            <img src="{{ asset('images/profile/kim.png') }}" class="img-fluid rounded-circle" alt="">
                        @endif 
                    </div>
                    <div class="profile-details">
                        <div class="profile-name px-3 pt-2">
                            @if(auth()->user()->hasRole('lecturer'))
                                <h4 class="text-primary mb-0">Syahid Azizan</h4>
                            @elseif(auth()->user()->hasRole('student'))
                                <h4 class="text-primary mb-0">Wan Muhammad Irfan</h4>
                            @endif 
                            <p>Bachelor in Multimedia Design</p>
                        </div>
                        <div class="profile-email px-2 pt-2">
                            @if(auth()->user()->hasRole('lecturer'))
                                <h4 class="text-muted mb-0">Hassan@unikl.edu.my</h4>
                            @elseif(auth()->user()->hasRole('student'))
                                <h4 class="text-muted mb-0">irfan@s.unikl.edu.my</h4>
                            @endif 
                            <p>Email</p>
                        </div>
                    </div>
                </div>
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
                                <h3 class="m-b-0">55</h3><span>Total Credit Hour</span>
                            </div>
                            <div class="col">
                                <h3 class="m-b-0">8</h3><span>Current Course</span>
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
                        <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Student Activity Log
                        </a>
                    </li>
                    @elseif(auth()->user()->hasRole('student'))
                    <li class=" nav-item">
                        <a href="#navpills-1" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Activity Log
                        </a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Assesment
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div id="navpills-1" class="tab-pane active">
                        <div class="table-responsive">
                            <table id="example2" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Topic</th>
                                        <th>Date Submission</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Multimedia Insrtuctional Design</td>
                                        <td>Assignment 2</td>
                                        <td>23/05/2023</td>
                                        <td>80%</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Post Production</td>
                                        <td>Lab Task 2</td>
                                        <td>15/04/2023</td>
                                        <td>10/15m</td>
                                    </tr>
                                    <tr>
                                        <td>Professional English 2</td>
                                        <td>Research Report</td>
                                        <td>12/04/2023</td>
                                        <td>66</td>
                                    </tr>
                                    <tr>
                                        <td>Mandarin 1</td>
                                        <td>Quiz 1</td>
                                        <td>02/04/2023</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Image</td>
                                        <td>Assignment 1</td>
                                        <td>28/03/2023</td>
                                        <td>33</td>
                                    </tr>
                                    <tr>
                                        <td>Typography</td>
                                        <td>Portfolio</td>
                                        <td>17/03/2023</td>
                                        <td>61</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="navpills-2" class="tab-pane">
                        <h4 class="mb-4">Upcoming Assesment</h4>
                        <div class="table-responsive">
                            <table id="example5" class="table table-hover table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Subject Name</th>
                                        <th>Topic</th>
                                        <th>Due Date</th>
                                        <th>To Be Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Multimedia Insrtuctional Design</td>
                                        <td>Final Project Proposal</td>
                                        <td>23/6/2023</td>
                                        <td>TBM</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Post Production</td>
                                        <td>Assignment 3</td>
                                        <td>15/05/2023</td>
                                        <td>TBM</td>
                                    </tr>
                                    <tr>
                                        <td>Professional English 2</td>
                                        <td>Research Slide</td>
                                        <td>12/05/2023</td>
                                        <td>TBM</td>
                                    </tr>
                                    <tr>
                                        <td>Mandarin 1</td>
                                        <td>Video Dialogue</td>
                                        <td>02/04/2023</td>
                                        <td>TBM</td>
                                    </tr>
                                    <tr>
                                        <td>Digital Image</td>
                                        <td>Assignment 2</td>
                                        <td>28/05/2023</td>
                                        <td>TBM</td>
                                    </tr>
                                    <tr>
                                        <td>Typography</td>
                                        <td>Final Test</td>
                                        <td>17/06/2023</td>
                                        <td>TBM</td>
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

<!-- @push('custom-scripts')
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins-init/datatables.init.js') }}" type="text/javascript"></script>
@endpush -->
