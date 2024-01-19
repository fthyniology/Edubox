@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Syllabus</a></li>
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">IMB 20503 - Multimedia Insrtuctional Design</a></li> -->
        </ol>
    </div>
@endsection

@section('content')
    
    <div class="row">
        @foreach ($courses as $course) 
            <div class="col-xl-6 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <img class="card-img-top img-fluid"  src="{{ $course->file_name ? asset('storage/' . $course->file_dir . '/'. $course->file_name) : asset('images/card/9.png') }}" alt="Card image cap">
                    <div class="card-header">
                        <h5 class="card-title">{{ $course->name ?? '' }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $course->description ?? '' }}</p>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-outline-primary float-right" href="{{ route('course.courseDetail', $course->id) }}">View Detail</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection