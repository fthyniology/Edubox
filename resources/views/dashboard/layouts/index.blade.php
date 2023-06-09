<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edubox</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/edubox/logo-compact.png') }}">


    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('vendor/fullcalendar/css/fullcalendar.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/> -->
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/dropify.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" type="text/css"/>

</head>
<body id="style-1">
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/') }}" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('images/edubox/logo-compact.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('images/edubox/edubox.png') }}" alt="">
                <img class="brand-title ml-4" src="{{ asset('images/edubox/logo-text.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        @include('dashboard.layouts.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('dashboard.layouts.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				@yield('content')
			</div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @include('dashboard.layouts.footer')
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>

    <script src="{{ asset('vendor/global/global.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/jqueryui/js/jquery-ui.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/moment/moment.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('vendor/fullcalendar/js/fullcalendar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins-init/fullcalendar-init.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('js/custom.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dropify.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/toastr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/deznav-init.js') }}" type="text/javascript"></script>

    @stack('js')
    @include('layouts.toastr')

</body>
</html>