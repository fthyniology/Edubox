@extends('dashboard.layouts.index')

@section('content')
<div class="row">
	<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4" >
		<div class="widget-stat card">
			<div class="card-body p-4">
				<h4 class="card-title">Total Students</h4>
				<h3>3280</h3>
				<div class="progress mb-2">
					<div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
				</div>
				<small>80% Increase in 20 Days</small>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
		<div class="widget-stat card">
			<div class="card-body p-4">
				<h4 class="card-title">New Students</h4>
				<h3>245</h3>
				<div class="progress mb-2">
					<div class="progress-bar progress-animated bg-info" style="width: 50%"></div>
				</div>
				<small>50% Increase in 25 Days</small>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
		<div class="widget-stat card">
			<div class="card-body p-4">
				<h4 class="card-title">Total Course</h4>
				<h3>28</h3>
				<div class="progress mb-2">
					<div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
				</div>
				<small>76% Increase in 20 Days</small>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
		<div class="widget-stat card">
			<div class="card-body p-4">
				<h4 class="card-title">Total Submission</h4>
				<h3>270 subs</h3>
				<div class="progress mb-2">
					<div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
				</div>
				<small>30% Increase in 30 Days</small>
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
		<div class="card">
			<div class="card-header border-0 pb-0">
				<h4 class="fs-20"><i class="fa fa-graduation-cap mr-2"></i>Student Latest Sub</h4>
			</div>
			<div class="card-body">
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-danger">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Abu RohazemeeKari</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Assigment 1</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-info">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Jamal Abdellah Bin Sufian Cheng Hock</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Quiz attempted</span>
							<span class="fs-14">11m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Fizmal Samsul</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Assigment 1</span>
							<span class="fs-14">11d ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Fazullah Jamaica</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Assignment 2</span>
							<span class="fs-14">2month ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-danger">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Nik Wan Abudllah</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Final Project</span>
							<span class="fs-14">32m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Sufi Zulaikha</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Assignment 2</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-primary">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Safiah Akiah</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Final Project</span>
							<span class="fs-14">2m ago</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>					
</div>

@endsection