@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ url('/course-list') }}">Courselist</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">IMB 20503 - Multimedia Insrtuctional Design</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
	<div class="col-xl-12 col-sm-12">
		<div class="row">
			<div class="col-xl-8 col-md-8 col-sm-12">
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
						<div class="my-post-content pt-3">							
							<div class="profile-uploaded-post border-bottom-1 pb-5">
								<div class="d-flex">
									<img src="{{ asset('images/profile/1.png') }}" alt="" class="rounded-circle img-fluid lect-posts-img">
									<div class="lect-posts ml-3">
										<h4>Mr. Hassan</h4>
										<p>
											Next Week Our Final Presentation located in 2011 at 9:30 a.m. 
										</p>
									</div>
								</div>
								
								
								<hr>

								<div class="comments">
									<div class="row">
										<div class="col-lg-1">
											<img src="{{ asset('images/profile/1.png') }}" alt="" class="rounded-circle img-fluid">
										</div>
										<div class="col-lg-11">
											<h4>Studeng</h4>
											<p>
												Next Week Our Final Presentation located in 2011 at 9:30 a.m. 
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-lg-1">
								<img src="{{ asset('images/profile/1.png') }}" alt="" class="rounded-circle img-fluid">
							</div>
							<textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control mt-0 bg-transparent col-lg-9" placeholder="Please type what you want...."></textarea> 
							<div class="col-lg-2">
								<a href="javascript:void()" class="btn btn-sm btn-info d-flex justify-content-center">
									<i class="fa fa-reply mt-1 mr-2"></i>
									Reply
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-md-4 col-sm-12 d-flex" style="flex-direction: column;">
				<div class="card" style="height: 20%;">
					<div class="card-body">
						<h4 class="card-title">Course Progress <span class="badge badge-xs float-right badge-light">60%</span></h4>
						<div class="progress">
							<div class="progress-bar" style="width: 60%; height:6px;" role="progressbar">
								<span class="sr-only">60% Complete</span>
							</div>
						</div>
					</div>
				</div>
				<div class="card" style="height: 50%;">
					<div class="card-header">
						<p class="mb-0 fs-22 text-primary">Lecturer's Details</p>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3">
								<div class="d-flex mb-3 justify-content-center">
									<img class="img-fluid rounded-circle" src="{{ asset('images/profile/1.png') }}">
								</div>
							</div>
							<div class="col-lg-9">
								<h3>
									Jessica Brown
								</h3>
								<p>
									Room 2011 <br>
									Ext. 2011 <br>
									+6011-223 3567
								</p>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>

			<!-- <div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-responsive-md">
						<thead>
							<tr>
								<th class="width50">
									<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
										<input type="checkbox" class="custom-control-input" id="checkAll" required="">
										<label class="custom-control-label" for="checkAll"></label>
									</div>
								</th>
								<th><strong>ROLL NO.</strong></th>
								<th><strong>NAME</strong></th>
								<th><strong>Email</strong></th>
								<th><strong>Date</strong></th>
								<th><strong>Status</strong></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
										<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
										<label class="custom-control-label" for="customCheckBox2"></label>
									</div>
								</td>
								<td><strong>542</strong></td>
								<td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
								<td>example@example.com	</td>
								<td>01 August 2020</td>
								<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
								<td>
									<div class="d-flex">
										<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
										<input type="checkbox" class="custom-control-input" id="customCheckBox3" required="">
										<label class="custom-control-label" for="customCheckBox3"></label>
									</div>
								</td>
								<td><strong>542</strong></td>
								<td><div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
								<td>example@example.com	</td>
								<td>01 August 2020</td>
								<td><div class="d-flex align-items-center"><i class="fa fa-circle text-danger mr-1"></i> Canceled</div></td>
								<td>
									<div class="d-flex">
										<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
										<input type="checkbox" class="custom-control-input" id="customCheckBox4" required="">
										<label class="custom-control-label" for="customCheckBox4"></label>
									</div>
								</td>
								<td><strong>542</strong></td>
								<td><div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">Dr. Jackson</span></div></td>
								<td>example@example.com	</td>
								<td>01 August 2020</td>
								<td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning mr-1"></i> Pending</div></td>
								<td>
									<div class="d-flex">
										<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
										<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> -->
				
			<!-- Bookshelf sction -->

			<div class="col-lg-6">
				<h4 class="fs-20">Bookshelf</h4>
				<div id="accordion-bookshelf" class="accordion accordion-header-bg accordion-bordered">
					<div class="accordion__item">
						<div class="accordion__header accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseOne">
							<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
							<span class="accordion__header--text">Chapter 1 : Introduction to MID</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseOne" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>								
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseTwo">
							<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
							<span class="accordion__header--text">Chapter 2 : Front-End Analysis</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseTwo" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
							<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>	
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseFour">
							<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
							<span class="accordion__header--text">Chapter 3 : ADDIE Model</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseFour" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseFive">
							<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
							<span class="accordion__header--text">Chapter 4 : Web Development</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseFive" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseSix">
							<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
							<span class="accordion__header--text">Chapter 5 : Front-End Basic</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseSix" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--success" data-toggle="collapse" data-target="#header-bg_collapseSeven">
							<span class="accordion__header--icon"><i class="fa fa-book mr-2"></i></span>
							<span class="accordion__header--text">Chapter 6 : How to be creative web designer</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseSeven" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--primary" style="color: #000 !important;" data-toggle="collapse" data-target="#header-bg_collapseThree">
							<span class="accordion__header--icon"><i class="fa fa-file mr-2"></i></span>
							<span class="accordion__header--text">"How to be perfect in mutlimedia designer"</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header-bg_collapseThree" class="collapse accordion__body" data-parent="#accordion-bookshelf">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											WebDevelopment.pptx
										</p>
									</div>
									<div class="col-6">
										<button type="button" class="btn btn-info float-right btn-xs">
											<i class="fa fa-cloud-download"></i>
											download
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<h4 class="fs-20">Assesment</h4>
				@if(auth()->user()->hasRole('student'))
				<div id="accordion-assessment" class="accordion accordion-header-bg accordion-bordered">
					<div class="accordion__item">
						<div class="accordion__header accordion__header--info" data-toggle="collapse" data-target="#header4">
							<span class="accordion__header--icon"></span>
							<span class="accordion__header--text">Assignment 1</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header4" class="collapse accordion__body" data-parent="#accordion-assessment">
							<div class="accordion__body--text">
								<div class="row">
									@if(auth()->user()->hasRole('student'))
									<div class="col-6">
										<p>
											Submission
										</p>
									</div>
									<div class="col-6">
										<div class="float-right">
											<a href="{{ url('/submit-assignment') }}" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												add
											</a>
											<a href="{{ url('/submit-assignment') }}" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
												<i class="fa fa-pencil-square-o mr-1"></i>
												edit submission
											</a>
										</div>
									</div>
									@elseif(auth()->user()->hasRole('lecturer'))
										<div class="col-6">
											<p>
												file-name.pdf
											</p>
										</div>
									@endif
								</div>								
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--info" data-toggle="collapse" data-target="#header5">
							<span class="accordion__header--icon"></span>
							<span class="accordion__header--text">Assignment 2</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header5" class="collapse accordion__body" data-parent="#accordion-assessment">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											Submission
										</p>
									</div>
									<div class="col-6">
										<div class="float-right">
											<a href="{{ url('/submit-assignment') }}" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												add
											</a>
											<a href="{{ url('/submit-assignment') }}" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
												<i class="fa fa-pencil-square-o mr-1"></i>
												edit submission
											</a>
										</div>
									</div>
								</div>		
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--info" data-toggle="collapse" data-target="#header6">
							<span class="accordion__header--icon"></span>
							<span class="accordion__header--text">Final Report Submission</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header6" class="collapse accordion__body" data-parent="#accordion-assessment">
							<div class="accordion__body--text">
								<div class="row">
									<div class="col-6">
										<p>
											Front-end analysis Submission
										</p>
									</div>
									<div class="col-6">
										<div class="float-right">
											<a href="{{ url('/submit-assignment') }}" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												add
											</a>
											<a href="{{ url('/submit-assignment') }}" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
												<i class="fa fa-pencil-square-o mr-1"></i>
												edit submission
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion__item">
						<div class="accordion__header collapsed accordion__header--info" data-toggle="collapse" data-target="#header7">
							<span class="accordion__header--icon"></span>
							<span class="accordion__header--text">Quiz / Test</span>
							<span class="accordion__header--indicator"></span>
						</div>
						<div id="header7" class="collapse accordion__body" data-parent="#accordion-assessment">
							<div class="accordion__body--text">
							<div class="row">
									<div class="col-7">
										<p>
											Chapter 6 : How to be creative web designer & Chapter 5 : Front-End Basic
										</p>
									</div>
									<div class="col-5">
										<div class="float-right">
											<a href="{{url('/quiz-attempt')}}" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												attempt now
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@elseif(auth()->user()->hasRole('lecturer'))
				<a href="{{ url('/lecturer-submission-view') }}" class="btn btn-secondary btn-block">view Submission</a>
				@endif
			</div>
		</div>
	</div>
</div>


@include('courses.modal-submission')

@endsection