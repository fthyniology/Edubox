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
<div class="col-xl-6 col-lg-6 col-sm-6" >
		<div class="card">
			<div class="card-body">
				<div class="row">					
					<div class="col-2">
						<div class="dashboard-user">
							<img src="{{ asset('images/profile/student.png') }}" class="img-fluid rounded-circle" alt="">
						</div>
					</div>
					<div class="col-10 d-flex justify-content-between">
						<div class="dashboard-welcome">
							<h4>
								Hi! Welcome back Student!
							</h4>
							<p>
								Let's learn something.
							</p>
							<a href="{{ url('student-quiz-attempt') }}" class="btn btn-outline-primary btn-xs">
								<i class="fa fa-eye mr-1"></i>
								View Syllabus
							</a>
						</div>
						<div class="dashboard-card-bg">
							<img  class="img-fluid pr-4" width="190px" src="{{ asset('images/edubox/welcome.svg') }}" alt="">
						</div>							
					</div>
				</div>			
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4" >
		<div class="widget-stat card">
			<div class="card-body p-4">
				<h4 class="card-title">Total Subject Taken</h4>
				<h3>6</h3>
				<div class="progress mb-2">
					<div class="progress-bar progress-animated bg-primary" style="width: 60%"></div>
				</div>
				<small>6 Subjects</small>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-sm-6 col-xxl-4">
		<div class="widget-stat card">
			<div class="card-body p-4">
				<h4 class="card-title">Total Quiz Taken</h4>
				<h3>12</h3>
				<div class="progress mb-2">
					<div class="progress-bar progress-animated bg-success" style="width: 80%"></div>
				</div>
				<small>80% Quiz Attempt</small>
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
			<div class="card-header">
				<h4 class="fs-20"><i class="fa fa-volume-off mr-2"></i> Reminder</h4>
			</div>
			<div class="card-body">
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Chapter 3 : Technique of Measuring The Parameter of Body Health</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Quiz 3 : Attempted</span>
							<span class="fs-14">2hr ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-success">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Chapter 2 : Emergency Help</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Quiz 2 : Attempted</span>
							<span class="fs-14">11d ago</span>
						</div>
					</div>
				</div>
				<div class="media pb-3 border-bottom mb-3 align-items-center">
					<div class="ticket-icon mr-3 bg-danger">
						<i class="fs-22 fa fa-graduation-cap text-white" aria-hidden="true"></i>
					</div>
					<div class="media-body">
						<h6 class="fs-16 mb-0">Chapter 1 : Safety Measures in Laboratory</h6>
						<div class="d-flex">
							<span class="fs-14 mr-auto">Quiz 2 : No attempts</span>
							<span class="fs-14">No attempts</span>
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