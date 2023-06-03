@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/lecturer-course') }}">Course Settings</a></li>
            <li class="breadcrumb-item active"><a href="{{ url('/lecturer-course') }}">Annoucements</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Add Annoucement</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Title</label>
                            <input type="text" class="form-control" placeholder="Annoucement Title">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Description</label>
                            <textarea class="form-control" placeholder="Annoucement Description"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <a href="{{ url('/lecturer-course') }}" class="btn btn-danger light mr-3">Cancel</a>
                            <a href="{{ url('/lecturer-course') }}" class="btn btn-success light">Save changes</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

