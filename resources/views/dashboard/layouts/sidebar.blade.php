<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <!-- <li>
                        <a href="{!! url('dashboard'); !!}">
                            <i class="fa fa-cube"></i>
                            <span class="nav-text">Dashboard {{ auth()->user()->hasRole('student') ? 'Student' : (auth()->user()->hasRole('lecturer') ? 'Lecturer' : 'Admin') }}</span>
                        </a>
                    </li> -->
                    @if(auth()->user()->hasRole('lecturer'))
                        <li>
                            <a href="{!! url('lecturer'); !!}">
                                <i class="fa fa-cube"></i>
                                <span class="nav-text">Dashboard {{ auth()->user()->hasRole('student') ? 'Student' : (auth()->user()->hasRole('lecturer') ? 'Lecturer' : 'Admin') }}</span>
                            </a>
                        </li>
                    @elseif(auth()->user()->hasRole('student'))
                        <li>
                            <a href="{!! url('dashboard'); !!}">
                                <i class="fa fa-cube"></i>
                                <span class="nav-text">Dashboard {{ auth()->user()->hasRole('student') ? 'Student' : (auth()->user()->hasRole('lecturer') ? 'Lecturer' : 'Admin') }}</span>
                            </a>
                        </li>
                    @endif 
                    
                    <li>
                        <a href="{!! url('course-list'); !!}">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="nav-text">Courselist</span>
                        </a>
                    </li>
                    @if(auth()->user()->hasRole('lecturer'))
                        <li>
                            <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                                <i class="flaticon-381-networking"></i>
                                <span class="nav-text">Lecturer Settings</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="{{ url('/lecturer-course') }}">Course Settings</a></li>
                                <li><a href="{{ url('/lecturer-students') }}">Student Settings</a></li>
                                <!-- <li><a href="{{ url('/lecturer-annoucements') }}">Add Annoucement</a></li> -->
                            </ul>
                        </li>
                    @endif 
                </ul>
            
				<div class="plus-box bg-primary sidebar-help" style="color:#252525;">
					<p class="fs-16 font-w500 mb-1">Need our assistance? <br> click here</p>
					<a class="text-white fs-26" href="javascript:;"><i class="las la-long-arrow-alt-right"></i></a>
				</div>
				<!-- <div class="copyright">
					<p class="fs-14 font-w200"><strong class="font-w400">Karciz Ticketing Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart text-danger"></i> by DexignZone</p>
				</div> -->
			</div>
        </div>