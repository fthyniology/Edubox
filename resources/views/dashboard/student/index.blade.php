@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)"></a></li> -->
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
	<!-- <div class="col-xl-6 col-lg-6">
		<div class="card">
			<div class="card-body p-4">
				<h4 class="card-intro-title mb-4">Annoucement</h4>
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
			</div>
		</div>
	</div> -->
	<div class="col-xl-8 col-lg-8">
		<div class="card">
			<div class="card-body">
				<div id="calendar" class="app-fullcalendar"></div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-4">
		<div class="card">
			<div class="card-header">
				<h4 class="fs-20"><i class="fa fa-volume-off mr-2"></i> Reminder</h4>
			</div>
			<div class="card-body">
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-primary">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">IMB 25034 - Internet Programming</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Assignment 1</span>
							<span class="fs-14">25 Sept. 2023</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-danger">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">IAB 20842 - Philosophia</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Assignment 2</span>
							<span class="fs-14">30 June 2023</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-info">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">MID 90213 - Multimedia In Design</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Final Project</span>
							<span class="fs-14">30 July 2023</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>					
</div>

<div class="modal fade none-border" id="event-modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><strong>Add New Event</strong></h4>
			</div>
			<div class="modal-body"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
				<button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
			</div>
		</div>
	</div>
</div>

@endsection