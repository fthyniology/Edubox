@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/lecturer-course') }}">Syllabus Settings</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/lecturer-course') }}">Annoucements</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Annoucement</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('announcement.store') }}" id="form-store-announcement" class="needs-validation" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Title</label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Annoucement Title">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <input id="description" name="description" type="text" class="form-control" placeholder="Annoucement Description">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Choose Course</label>
                                <select class="form-control" id="course_id" name="course_id">
                                    <option value="" disabled selected>Choose One</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <button type="submit" class="btn btn-success light float-right">Save changes</button>
                            <button type="" class="btn btn-danger light float-right mr-2">cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

