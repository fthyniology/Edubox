@extends('dashboard.layouts.index')

@section('content')
<div class="row">
	<div class="col-xl-6 col-lg-6">
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
	</div>
	<div class="col-xl-8 col-lg-8">
		<div class="card">
			<div class="card-body">
				<div id="calendar" class="app-fullcalendar"></div>
			</div>
		</div>

	</div>
	<div class="col-xl-4 col-lg-4">
		<!-- <div class="row">
			<div class="col-sm-6">
				<div class="card overflow-hidden">
					<div class="card-header align-items-start pb-0 border-0">	
						<div>
							<h4 class="fs-16 mb-0">451,509</h4>
							<span class="fs-12">Sales</span>
						</div>
						<div class="dropdown">
							<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
								This Week
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:void(0);">Daily</a>
								<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
								<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<canvas id="widgetChart1" height="60" class="mr-3"></canvas>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card overflow-hidden">
					<div class="card-header align-items-start pb-0 border-0">	
						<div>
							<h4 class="fs-16 mb-0">Increase 25%</h4>
							<span class="fs-12">Comparisson</span>
						</div>
						<div class="dropdown">
							<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
								Daily
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:void(0);">Daily</a>
								<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
								<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<canvas id="widgetChart2" height="60"></canvas>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card overflow-hidden">
					<div class="card-header align-items-start pb-0 border-0">	
						<div class="dropdown ml-auto">
							<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
								This Week
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:void(0);">Daily</a>
								<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
								<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
							</div>
						</div>
					</div>
					<div class="card-body pt-2">
						<div class="index-chart-point">
							<div class="check-point-area">
								<canvas id="doughnut_chart"></canvas>
							</div>
							<ul class="index-chart-point-list">
								<li><i class="fa fa-stop text-danger"></i>Tickets A</li>
								<li><i class="fa fa-stop text-success"></i> Tickets B</li>
								<li><i class="fa fa-stop text-warning"></i> Tickets C</li>
								<li><i class="fa fa-stop text-info"></i> Tickets D</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card overflow-hidden">
					<div class="card-header align-items-start pb-0 border-0">	
						<div>
							<h4 class="fs-16 mb-0">$456,623</h4>
							<span class="fs-12">Income</span>
						</div>
						<div class="dropdown">
							<a href="javascript:;"	class="dropdown-toggle fs-12" data-toggle="dropdown" aria-expanded="false">
								Monthly
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="javascript:void(0);">Daily</a>
								<a class="dropdown-item" href="javascript:void(0);">Weekly</a>
								<a class="dropdown-item" href="javascript:void(0);">Monthly</a>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<canvas id="lineChart_4" height="60"></canvas>
					</div>
				</div>
			</div>
		</div> -->
		<div class="card">
		<div class="card-header border-0 pb-0">
				<h4 class="fs-20"><i class="fa fa-volume-off mr-2"></i> Reminder</h4>
				<div class="dropdown custom-dropdown mb-0">
					<div data-toggle="dropdown">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</div>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="javascript:void(0);">Details</a>
						<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-primary">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-danger">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-info">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-danger">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-primary">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Olivia Johanson</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Event AB</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>					
</div>

@endsection