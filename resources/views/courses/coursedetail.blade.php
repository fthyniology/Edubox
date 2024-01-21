@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/course-list') }}">Syllabus</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $course->name ?? '' }}</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
	<!-- annoucements -->
	<div class="col-xl-8 col-md-8 col-sm-12 d-flex" style="flex-direction: column;">
		<div class="card mb-3">
			<div class="card-header">
				<h4>
					Annoucements
				</h4>
				@if(auth()->user()->hasRole('lecturer'))
					<a href="{{ url('/course-setting/add-annoucement') }}" class="btn btn-sm btn-success float-right">
						<i class="fa fa-plus mt-1 mr-2"></i>
						Add Post
					</a>
				@endif
			</div>
			<div class="card-body">
				@if (!$course->announcements->isEmpty())
					<div class="my-post-content pt-3">
						<div class="profile-uploaded-post border-bottom-1 pb-5">
							<div class="d-flex">
								<img src="{{ $course->lecturer->profile_pic ? asset('storage/' . $course->lecturer->profile_dir . '/'. $course->lecturer->profile_name) : asset('images/profile/caid.png') }}" alt="" class="rounded-circle img-fluid lect-posts-img">
								<div class="lect-posts ml-3">
									<h4>{{ $course->announcements->sortByDesc('created_at')->first()->name ?? '' }}. </h4>
									<p>
										{{ $course->announcements->sortByDesc('created_at')->first()->description ?? '' }}. 
									</p>
								</div>
							</div>
							
							
							<hr>

							<div class="comments">
								@forelse ($course->announcements->sortByDesc('created_at')->first()->comments as $comment)
									<div class="row">
										<div class="col-lg-1">
											<img src="{{ $course->lecturer->profile_pic ? asset('storage/' . $course->lecturer->profile_dir . '/'. $course->lecturer->profile_name) : asset('images/profile/kim.png') }}" alt="" class="rounded-circle img-fluid">
										</div>
										<div class="col-lg-11">
											<h4>{{ $comment->student->name ?? '' }}</h4>
											<p>
												{{ $comment->description ?? '' }}
											</p>
										</div>
									</div>
								@empty
									No comment
								@endforelse
							</div>
						</div>
					</div>
				@else
					No announcement at this moment
				@endif
			</div>
			@if (!$course->announcements->isEmpty())
				<div class="card-footer">
					
					<form action="{{ route('announcement.comment.store', $course->announcements->sortByDesc('created_at')->first()->id) }}" id="form-store-course" class="needs-validation" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">
							<div class="col-lg-1">
								<img src="{{ $course->lecturer->profile_pic ? asset('storage/' . $course->lecturer->profile_dir . '/'. $course->lecturer->profile_name) : asset('images/profile/1.png') }}" alt="" class="rounded-circle img-fluid">
							</div>
							<textarea name="description" id="description" cols="30" rows="5" class="form-control mt-0 bg-transparent col-lg-9" placeholder="Please type your comment...."></textarea> 
							<div class="col-lg-2">
								<button type="submit" href="javascript:void()" class="btn btn-sm btn-info d-flex justify-content-center">
									<i class="fa fa-reply mt-1 mr-2"></i>
									Reply
								</button>
							</div>
						</div>
					</form>
				</div>
			@endif
		</div>
	</div>
	<!-- teacher details -->
	<div class="col-xl-4 col-md-4 col-sm-12 d-flex" style="flex-direction: column;">		
		<div class="card">
			<div class="card-header">
				<p class="mb-0 fs-22 text-primary">Lecturer's Details</p>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-lg-3">
						<div class="d-flex mb-3 justify-content-center">
							<img class="img-fluid rounded-circle" src="{{ $course->lecturer->profile_pic ? asset('storage/' . $course->lecturer->profile_dir . '/'. $course->lecturer->profile_name) : asset('images/profile/Teacher.png') }}">
						</div>
					</div>
					<div class="col-lg-9">
						<h3>
							{{ $course->lecturer->name ?? 'Teacher' }}
						</h3>
						<p>{{ $course->lecturer->address ?? 'Contact Number' }}</p>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xl-4 col-sm-12">
		<div class="card h-auto">
			<div class="card-header">
				<h4>Chapters / Notes</h4>
				@if(auth()->user()->hasRole('lecturer'))
				<a href="{{ url('/course-setting/add-course') }}" class="btn btn-outline-primary float-right btn-xs">
					<i class="fa fa-plus mr-1"></i>
					Add Chapters
				</a>
				@endif
			</div>
            <div class="card-body">
                <ul class="nav flex-column nav-pills light">
                    <li class=" nav-item">
                        <a href="#navpills-chap1" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Chapter 1 : Safety Measures in Laboratory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap2" class="nav-link" data-toggle="tab" aria-expanded="false">
							Chapter 2 : Emergency Help
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap3" class="nav-link" data-toggle="tab" aria-expanded="false">
							Chapter 3 : Technique of Measuring The Parameter of Body Health
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="#navpills-chap4" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Chapter 4 : Safety Measures in Laboratory
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap5" class="nav-link" data-toggle="tab" aria-expanded="false">
							Chapter 5 : Genetics
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap6" class="nav-link" data-toggle="tab" aria-expanded="false">
							Chapter 6 : Support Movement and Growth
                        </a>
                    </li>
                </ul>
            </div>
        </div>
	</div>
	<div class="col-xl-8 col-sm-12">
		<div class="tab-content">
			<div id="navpills-chap1" class="tab-pane active">
				<div class="card">
					<div class="card-header">
						<h4>Chapter 1 : Safety Measures in Laboratory</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
					<div class="card-footer">						
						<a href="{{ route('student.quizattempt') }}" class="btn btn-outline-primary float-right btn-xs">
							Go to Quiz
							<i class="fa fa-chevron-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
			<div id="navpills-chap2" class="tab-pane">
				<div class="card">
					<div class="card-header">
						<h4>Chapter 2 : Emergency Help</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
					<div class="card-footer">						
						<a href="{{ route('student.quizattempt') }}" class="btn btn-outline-primary float-right btn-xs">
							Go to Quiz
							<i class="fa fa-chevron-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
			<div id="navpills-chap3" class="tab-pane">
				<div class="card">
					<div class="card-header">
						<h4>Chapter 3 : Technique of Measuring The Parameter of Body Health</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
					<div class="card-footer">						
						<a href="{{ route('student.quizattempt') }}" class="btn btn-outline-primary float-right btn-xs">
							Go to Quiz
							<i class="fa fa-chevron-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
			<div id="navpills-chap4" class="tab-pane">
				<div class="card">
					<div class="card-header">
						<h4>Chapter 1 : Safety Measures in Laboratory</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
					<div class="card-footer">						
						<a href="{{ route('student.quizattempt') }}" class="btn btn-outline-primary float-right btn-xs">
							Go to Quiz
							<i class="fa fa-chevron-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
			<div id="navpills-chap5" class="tab-pane">
				<div class="card">
					<div class="card-header">
						<h4>Chapter 5 : Genetics</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
					<div class="card-footer">						
						<a href="{{ route('student.quizattempt') }}" class="btn btn-outline-primary float-right btn-xs">
							Go to Quiz
							<i class="fa fa-chevron-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
			<div id="navpills-chap6" class="tab-pane">
				<div class="card">
					<div class="card-header">
						<h4>Chapter 6 : Support Movement and Growth</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
					<div class="card-footer">						
						<a href="{{ route('student.quizattempt') }}" class="btn btn-outline-primary float-right btn-xs">
							Go to Quiz
							<i class="fa fa-chevron-right ml-1"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="row">
	<div class="col-lg-6">
		<h4 class="fs-20">Bookshelf</h4>
		<div id="accordion-bookshelf" class="accordion accordion-header-bg accordion-bordered">
			@foreach ($course->bookshelves as $bookshelf) 
				<div class="accordion__item">
					<div class="accordion__header {{ $bookshelf->type == '1' ? 'accordion__header--success' : 'accordion__header--primary' }}" data-toggle="collapse" data-target="#header-{{ $bookshelf->id }}">
						<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
						<span class="accordion__header--text">{{ $bookshelf->name ?? '' }}</span>
						<span class="accordion__header--indicator"></span>
					</div>
					<div id="header-{{ $bookshelf->id }}" class="collapse accordion-bd-bg  accordion__body" data-parent="#accordion-bookshelf">
						<div class="accordion__body--text">
							<div class="row">
								<div class="col-6">
									<p>{{ $bookshelf->name ?? '' }}</p>
								</div>
								<div class="col-6">
									@if ($bookshelf->type == '1') 
										<a type="button" download href="{{ $bookshelf->file_name ? asset('storage/' . $bookshelf->file_dir . '/'. $bookshelf->file_name) : '#' }}" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											Download
										</a>
									@else 
										<a type="button" target="_blank" href="{{ $bookshelf->url }}" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											Go to Link
										</a>
									@endif
								</div>
							</div>								
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	<div class="col-lg-6">
		<h4 class="fs-20">Quizes</h4>
		@if(auth()->user()->hasRole('student'))
			<div id="accordion-assessment" class="accordion accordion-header-bg accordion-bordered">
				@foreach ($course->assessments as $assessment) 
					<div class="accordion__item">
						<div class="accordion__header accordion__header--info" data-toggle="collapse" data-target="#header4">
							<span class="accordion__header--icon"></span>
							<span class="accordion__header--text">{{ $assessment->name ?? '' }}</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header4" class="collapse accordion-bd-bg accordion__body" data-parent="#accordion-assessment">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6"> <p> Submission </p> 
										@if ($assessment->submissions->where('student_id', auth()->user()->id)->first())
											Submitted: {{ $assessment->submissions->where('student_id', auth()->user()->id)->first()->file_name ?? '' }}
										@endif
									</div>
									<div class="col-6">
										<div class="float-right">
											@if ($assessment->submissions->where('student_id', auth()->user()->id)->first())
												<a href="{{ route('student.submitassignment', $assessment->id) }}" class="btn btn-info btn-xs">
													<i class="fa fa-pencil-square-o mr-1"></i>
													edit submission
												</a>
											@else
												<a href="{{ route('student.submitassignment', $assessment->id) }}" class="btn btn-success btn-xs">
													<i class="fa fa-plus-circle mr-1"></i>
													add
												</a>
											@endif
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@elseif(auth()->user()->hasRole('lecturer'))
			<a href="{{ route('course.view.submission', $course->id) }}" class="btn btn-secondary btn-block">View Submission</a>
		@endif
	</div>
</div> -->


@include('courses.modal-submission')

@endsection