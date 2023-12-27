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
                            <span class="nav-text">Syllabus</span>
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
                            </ul>
                        </li>
                    @endif 
                </ul>
			</div>
        </div>