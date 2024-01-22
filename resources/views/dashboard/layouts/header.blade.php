<!--**********************************
        Header start
    ***********************************-->
<div class="header">
  <div class="header-content">
      <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                  <div class="dashboard_bar">
                     Edubox
                  </div>
              </div>
              <ul class="navbar-nav header-right">
                <!-- <li class="nav-item">
                  <div class="input-group search-area ml-auto d-inline-flex">
                    <input type="text" class="form-control" placeholder="Search here">
                    <div class="input-group-append">
                      <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                    </div>
                  </div>
                </li> -->
                <!--=========== Notification ===========-->
                <li class="nav-item dropdown notification_dropdown">
                  <a class="nav-link  ai-icon" href="javascript:;" role="button" data-toggle="dropdown">
                  <i class="fa fa-bell-o text-primary"></i>
                    <div class="pulse-css"></div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                      <div id="DZ_W_Notification1" class="widget-media dz-scroll text-center p-4">
                        <p class="mb-0">nothing to see</p>
                      </div>
                    <!-- <a class="all-notification" href="javascript:;">See all notifications <i class="ti-arrow-right"></i></a> -->
                  </div>
                </li>
                <!--===========  End Notification ===========-->
                  <li class="nav-item dropdown header-profile">
                      <a class="nav-link" href="javascript:;" role="button" data-toggle="dropdown">
                      @if(auth()->user()->hasRole('lecturer'))
                        <img src="{{ asset('images/profile/teacher.png') }}" width="20" alt=""/>
                      @elseif(auth()->user()->hasRole('student'))
                        <img src="{{ asset('images/profile/student.png') }}" width="20" alt=""/>
                      @endif
                        <div class="header-info">
                          <span>{{ auth()->user()->hasRole('student') ? 'Student' : (auth()->user()->hasRole('lecturer') ? 'Teacher' : 'Admin') }}<i class="fa fa-caret-down ml-3" aria-hidden="true"></i></span>
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                          <a href="{!! url('my-profile'); !!}" class="dropdown-item ai-icon">
                              <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                              <span class="ml-2">Profile </span>
                          </a>
                          <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                              <span class="ml-2">Logout </span>
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              </ul>
          </div>
                  
      </nav>
  </div>
  
  @yield('breadcrumb')


</div>
