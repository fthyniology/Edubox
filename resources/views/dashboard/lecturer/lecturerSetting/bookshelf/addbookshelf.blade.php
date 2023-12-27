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
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Bookshelf
                    </h4>
                </div>
                <div class="card-body">
                    <h4 class="mb-4">Course Title</h4>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Add Bookshelf</label>
                            <select class="form-control" id="bookshelf_type" name="bookshelf_type">
                                <option value="" disabled selected>Choose One</option>
                                <option value="1">Lecture notes</option>
                                <option value="2">Extra Readings</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input id="bookshelf_name" name="bookshelf_name" type="text" class="form-control" placeholder="Bookshelf Name">
                        </div>
                        <div class="form-group col-md-12 extra-reading-div">
                            <label>Extra Readings URL</label>
                            <input id="extra_reading_url" name="extra_reading_url" type="text" class="form-control" placeholder="Extra Readings URL">
                        </div>
                        <div class="form-group col-md-12 lecture-note-div">
                            <label>Lecture Notes Files</label>
                            <input id="lecture_note_files" name="lecture_note_files" type="file" class="dropify" placeholder="Lecture Note File">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-success light float-right">Save changes</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Add Assesment
                    </h4>
                </div>
                <div class="card-body">
                    <h4 class="mb-4">Course Title</h4>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label>Add Assesment</label>
                                <select class="form-control" id="assessment_type" name="assessment_type">
                                    <option value="" disabled selected>Choose One</option>
                                <option value="1">Assignment</option>
                                <option value="2">Quiz</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 assignment-div">
                            <label id="assessment-label-name">Assignment Name</label>
                            <input id="assessment_name" name="assessment_name" type="text" class="form-control" placeholder="Assessment Name">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-success light float-right">Save changes</button>
                </div>
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