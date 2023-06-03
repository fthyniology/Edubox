@extends('dashboard.layouts.index')

@section('content')
<div class="row">
	<div class="col-xl-12 col-sm-12">
		<div class="row">
			<div class="col-xl-8 col-md-8 col-sm-12">
				<div class="card mb-3">
					<div class="card-header">
						<h4 class="card-intro-title mb-4">Annoucements</h4>
					</div>
						<div class="bootstrap-carousel">
							<div data-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
								<ol class="carousel-indicators">
									<li class="active" data-slide-to="0" data-target="#carouselExampleCaptions">
									</li>
									<li data-slide-to="1" data-target="#carouselExampleCaptions" class=""></li>
									<li data-slide-to="2" data-target="#carouselExampleCaptions" class=""></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100"  src="{{ asset('images/big/img5.jpg') }}" alt="">
										<div class="carousel-caption d-none d-md-block">
											<h5>First slide label</h5>
											<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img alt="" class="d-block w-100"  src="{{ asset('images/big/img6.jpg') }}">
										<div class="carousel-caption d-none d-md-block">
											<h5>Second slide label</h5>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
									</div>
									<div class="carousel-item">
										<img alt="" class="d-block w-100"  src="{{ asset('images/big/img7.jpg') }}">
										<div class="carousel-caption d-none d-md-block">
											<h5>Third slide label</h5>
											<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.
											</p>
										</div>
									</div>
								</div><a data-slide="prev" href="#carouselExampleCaptions" class="carousel-control-prev"><span
										class="carousel-control-prev-icon"></span> <span
										class="sr-only">Previous</span>
								</a><a data-slide="next" href="#carouselExampleCaptions" class="carousel-control-next"><span
										class="carousel-control-next-icon"></span> <span
										class="sr-only">Next</span></a>
							</div>
						</div>
						<div class="card-header">
						<div>
							<h5 class="card-title">
								<!-- <i class="fa fa-graduation-cap"></i> -->
								IMB 20503 - Multimedia Insrtuctional Design
							</h5>
						</div>

					</div>
					<div class="card-body">
						<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
						<p class="card-text text-dark">Last updated 3 mins ago</p>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-md-4 col-sm-12 d-flex" style="flex-direction: column;">
				<div class="card">
					<div class="card-header">
						<p class="mb-0 fs-22 text-primary">Lecturer's Details</p>
					</div>
					<div class="card-body">
						<div class="d-flex mb-3 justify-content-center">
							<img class="img-fluid rounded-circle" src="{{ asset('images/profile/1.png') }}">
						</div>
						<hr>
						<h3>
							Jessica Brown
						</h3>
						<p>
							Room 2011 <br>
							Ext. 2011 <br>
							+6011-223 3567
						</p>
						<a href="{{url('lecturerprofile')}}" class="btn btn-primary float-right btn-sm btn-block">
							view detail
						</a>

					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Course Progress <span class="badge badge-xs float-right badge-light">60%</span></h4>
						<div class="progress">
							<div class="progress-bar" style="width: 60%; height:6px;" role="progressbar">
								<span class="sr-only">60% Complete</span>
							</div>
						</div>
					</div>
				</div>
			</div>
				
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
									<div class="col-6">
										<p>
											Submission
										</p>
									</div>
									<div class="col-6">
										<div class="float-right">
											<button type="button" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												add
											</button>
											<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
												<i class="fa fa-pencil-square-o mr-1"></i>
												edit submission
											</button>
										</div>
									</div>
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
											<button type="button" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												add
											</button>
											<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
												<i class="fa fa-pencil-square-o mr-1"></i>
												edit submission
											</button>
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
											<button type="button" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												add
											</button>
											<button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target=".bd-example-modal-lg">
												<i class="fa fa-pencil-square-o mr-1"></i>
												edit submission
											</button>
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
											<button type="button" class="btn btn-success btn-xs">
												<i class="fa fa-plus-circle mr-1"></i>
												attempt now
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@include('courses.modal-submission')

@endsection