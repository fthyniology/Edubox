@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/lecturer-course') }}">Teacher Settings</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/lecturer-course') }}">Syllabus Settings</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/lecturer-course') }}">Science Form 4 Syllabus - All Chapter</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Chapters</a></li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Chapter
                    </h4>
                </div>
                <form action="{{ route('chapters.store', $course->id) }}" id="form-store-chapter" class="needs-validation" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Chapter or Notes (.pdf)</label>
                                <input id="file" name="file" type="file" class="dropify" required placeholder="Teacher's Notes File or Chapter">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label>Chapters Title</label>
                                <input id="title" name="title" type="text" class="form-control" placeholder="Chapters Title">
                            </div>
                            <input type="hidden" name="course_id" value="{{ $course->id }}">
                        </div>
                    </div>
                    <div class="card-footer">
                            <button type="submit" class="btn btn-success light float-right">Save changes</button>
                            <button type="" class="btn btn-danger light float-right mr-2">cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
@endsection

@push('js')
    <script>
        $('.extra-reading-div').hide();
        $('.lecture-note-div').hide();
        $('.assignment-div').hide();
        $('.quiz-div').hide();
        
        $('.dropify').dropify();

        $('#bookshelf_type').on('change', function () {
            if ($(this).val() == 1) {
                $('.extra-reading-div').hide();
                $('.lecture-note-div').show();
            } else {
                $('.extra-reading-div').show();
                $('.lecture-note-div').hide();
            }
        });

        $('#assessment_type').on('change', function () {
            $('.assignment-div').show();

            if ($(this).val() == '1') {
                $('#assessment-label-name').html('Assignment Name');
                $('#assessment_name').prop('placeholder', 'Assignment Name');
            } else {
                $('#assessment-label-name').html('Quiz Name');
                $('#assessment_name').prop('placeholder', 'Quiz Name');
            }
        });
    </script>
@endpush