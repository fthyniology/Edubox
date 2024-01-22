@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">My Profile</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit My Profile</a></li>
        </ol>
    </div>
@endsection

@section('content')

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    My Profile
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Profile Photo</label>
                            <input id="course_image" name="course_image" type="file" class="dropify" required placeholder="Teacher's Notes File or Chapter">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Teacher For Subject</label>
                            <input id="first_name" name="first_name" type="text" class="form-control mb-4" placeholder="Science Form 5" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>First Name</label>
                            <input id="first_name" name="first_name" type="text" class="form-control mb-4" placeholder="First Name">
                            <label>Second Name</label>
                            <input id="second_name" name="second_name" type="text" class="form-control" placeholder="Second Name">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Email</label>
                            <input id="email" name="email" type="text" class="form-control mb-4" placeholder="Email">
                            <label>Contact Number</label>
                            <input id="contact" name="contact" type="text" class="form-control" placeholder="Contact Number">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Address Number</label>
                            <input id="address_line1" name="address_line1" type="text" class="form-control mb-2" placeholder="Address Line 1">
                            <input id="address_line2" name="address_line2" type="text" class="form-control" placeholder="Address Line 2">
                        </div>
                    </div>
                </div>                
                <div class="card-footer">
                        <button type="submit" class="btn btn-success light float-right">Save changes</button>
                        <button type="" class="btn btn-danger light float-right mr-2">cancel</button>
                </div>
            </div>
        </div>
    </div>

@endsection