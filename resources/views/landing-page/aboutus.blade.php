<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edubox</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="landing-assets/images/edubox/logo-compact.png">

    <!-- CSS
        ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/vendor/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/vendor/fontawesome-all.min.css') }}">

    <!-- Slick slider CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/slick.min.css') }}">

    <!-- justify CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/justify.css') }}">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/swiper.min.css') }}">

    <!-- Odomete CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/odometer.min.css') }}">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/animate-text.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/animate.min.css') }}">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/lightgallery.min.css') }}">



    <link rel="stylesheet" href="{{ asset('landing-assets/css/revolution/rs6.css') }}">


    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css') }} & plugins.min.css') }} for better website load performance and remove css files from avobe) -->
    <!--
        <link rel="stylesheet" href="{{ asset('landing-assets/css/vendor/vendor.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing-assets/css/plugins/plugins.min.css') }}">
        -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('landing-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-assets/css/stylan.css') }}">

</head>

<body style="background: #252525;" id="style-1">

  <!--====================  loader effect ====================-->
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

  <!--====================  end loader effect ====================-->

  <!--====================  header area ====================-->
  <div class="header-area header-sticky header-area--absolute">
        <div class="container-fluid container-fluid--cp-150">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header position-relative">
                        <!-- brand logo -->
                        <div class="header__logo">
                            <a href="{{ url('/') }}">
                                <img src="landing-assets/images/edubox/edubox.png" class="img-fluid light-logo" alt="edubox">
                                <img src="landing-assets/images/edubox/yellow-edubox-logo.png" class="img-fluid dark-logo" alt="edubox">
                            </a>
                        </div>
                        <!-- navigation menu -->
                        <div class="header__navigation d-none d-xl-block">
                            <div class="header__navigation--four">
                                <nav class="navigation-menu navigation-menu--onepage navigation-menu--text_white">
                                    <ul>
                                        <li><a href="{{ url('/About-Us') }}"><span>About Us</span></a></li>
                                        <li><a href="{{ url('/faq') }}"><span>FAQ</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- header actions -->
                        <div class="header__actions--four">
                            <a href="{{ url('login') }}" class="btn-rounded-custom btn-edubox">Sign In</a>

                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of header area  ====================-->

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area gradient--edubox">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="text-lpage">About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">

         <!--====================  Portfolio Area Start ====================-->
         <div class="portfolio-pages-wrapper section-space--ptb_100 section-edu-bg">
            <div class="container">
                <div class="row portfolio-syle-2 section-space--pt_70">
                    <div class="col-lg-12">
                        <div class="section-title text-center section-space--mb_50">
                            <h5 class="font-weight--bold text-white mb-2">
                                Edubox
                            </h5>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 wow move-up">
                        <div class="portfolio-wrapper mb-30">
                            <a class="single-portfolio-item" href="portfolio-single-one.html">
                                <div class="single-portfolio__thumbnail">
                                    <img class="img-fluid border-radus-5" src="{{ asset('images/edubox/caid.png') }}" alt="Portfolio Image">
                                </div>
                                <div class="post-overlay gradient-background"></div>
                                <div class="single-portfolio__content">
                                    <div class="post-overlay-info">
                                        <div class="overlay-categories">Graphic Designer</div>
                                        <h5 class="post-overlay-title">Syahid Azizan</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow move-up">
                        <div class="portfolio-wrapper mb-30">
                            <a class="single-portfolio-item" href="portfolio-single-one.html">
                                <div class="single-portfolio__thumbnail">
                                    <img class="img-fluid border-radus-5" src="{{ asset('images/edubox/pan.png') }}" alt="Portfolio Image">
                                </div>
                                <div class="post-overlay gradient-background"></div>
                                <div class="single-portfolio__content">
                                    <div class="post-overlay-info">
                                        <div class="overlay-categories">Ui Designer</div>
                                        <h5 class="post-overlay-title">Wan M. Irfan</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow move-up">
                        <div class="portfolio-wrapper mb-30">
                            <a class="single-portfolio-item" href="portfolio-single-one.html">
                                <div class="single-portfolio__thumbnail">
                                    <img class="img-fluid border-radus-5" src="{{ asset('images/edubox/zik.png') }}" alt="Portfolio Image">
                                </div>
                                <div class="post-overlay gradient-background"></div>
                                <div class="single-portfolio__content">
                                    <div class="post-overlay-info">
                                        <div class="overlay-categories">Ux Designer</div>
                                        <h5 class="post-overlay-title">M. Zikry Hafiz</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> -->
                    <div class="col-lg-6 col-md-6 wow move-up">
                        <div class="portfolio-wrapper mb-30">
                            <a class="single-portfolio-item" href="portfolio-single-one.html">
                                <div class="single-portfolio__thumbnail">
                                    <img class="img-fluid border-radus-5" src="{{ asset('images/edubox/lan.png') }}" alt="Portfolio Image">
                                </div>
                                <div class="post-overlay gradient-background"></div>
                                <div class="single-portfolio__content">
                                    <div class="post-overlay-info">
                                        <div class="overlay-categories">Front-End Developer</div>
                                        <h5 class="post-overlay-title">Adlan Fatihin</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                        <p class="text-center mt-3">
                            Edubox is a comprehensive online platform that serves as an efficient and effective 
                            tool for managing and delivering educational content and resources to students. 
                            Similar to a learning management system (LMS), Edubox is equipped with features 
                            such as course management, content delivery, assessment tools, communication tools, 
                            and analytics that enable students to learn at their own pace and in their own 
                            preferred environment. With Edubox, students can access course materials, submit assignments, 
                            participate in discussions, and communicate with their peers and instructors, 
                            all from a single centralized location.
                        </p>
                </div>
            </div>
        </div>
        <!--====================  Portfolio Area End  ====================-->
    </div>

    <!--========= App Landing Bottom Banner Area Start ==========-->
    <div class="app-landing-bottom-banner-area app-bottom-bg  drak-area theme_bg-5">
            <div class="container">
            </div>
            <div class="footer-area-wrapper">
                <div class="footer-area section-space--pt_90 section-space--pb_60">
                    <div class="container">
                        <div class="row footer-widget-wrapper">
                            <div class="col-lg-12">
                                <div class="app-landing_footer text-center">
                                    <h2 class="heading font-weight--bold text-white">
                                        Join Us Now!
                                    </h2>
                                    <h6 class="sub-title mt-20 font-weight--light text-white">
                                        Register at <span><a href="https://www.unikl.edu.my/">UniKL</a></span>
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright-area section-space--ptb_60">
                    <div class="container">
                        <div class="row aling-items-center">
                            <div class="col-md-12">
                                <div class="horizontal-list text-center">
                                    <ul>
                                        <li> © 2023 Edubox. All Rights Reserved</li>
                                        <li><a href="tel:" class="hover-style-link hover-style-link--white">(+60) 123 567990</a></li>
                                        <li><a href="mailto:contact@aeroland.com" class="hover-style-link hover-style-link--white">helpdesk@edubox.edu.my</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--========== App Landing Bottom Banner Area End ===========-->

    
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner bg-dark-lan">
            <div class="mobile-menu-overlay__header theme_bg-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <!-- <img src="landing-assets/images/logo/logo-dark.png" class="img-fluid" alt=""> -->
                                    <img src="landing-assets/images/edubox/edubox.png" class="img-fluid light-logo" alt="edubox">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-right">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation offcanvas-navigation--onepage">
                    <ul>
                        <li><a href="{{ url('/About-Us') }}"><span>About Us</span></a></li>
                        <li><a href="{{ url('/faq') }}"><span>FAQ</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->

    <!--====================  search overlay ====================-->
    <div class="search-overlay" id="search-overlay">
        <div class="search-overlay__inner">
            <div class="search-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="index.html">
                                    <img src="landing-assets/images/edubox/edubox.png" class="img-fluid light-logo" alt="Saas">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- search content -->
                            <div class="search-content text-right">
                                <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-overlay__body">
                <div class="search-overlay__form">
                    <form action="#">
                        <input type="text" placeholder="Enter search keyword...">
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of search overlay  ====================-->

    <!-- JS ============================================ -->
    
    <!-- Modernizer JS  -->
    <!-- <script src="{{ asset('landing-assets/js/vendor/modernizr-2.8.3.min.js') }}"></script> -->
       <!-- jQuery JS -->
    <script src="{{ asset('landing-assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('landing-assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('landing-assets/js/vendor/popper.min.js') }}"></script>
    <!-- Swiper Slider JS -->
    <script src="{{ asset('landing-assets/js/plugins/swiper.min.js') }}"></script>
    <!-- Tippy JS -->
    <script src="{{ asset('landing-assets/js/plugins/tippy.min.js') }}"></script>
    <!-- Light gallery JS -->
    <script src="{{ asset('landing-assets/js/plugins/lightgallery.min.js') }}"></script>
    <!-- Light gallery video JS -->
    <script src="{{ asset('landing-assets/js/plugins/lg-video.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('landing-assets/js/plugins/waypoints.min.js') }}"></script>
    <!-- Counter down JS -->
    <script src="{{ asset('landing-assets/js/plugins/countdown.min.js') }}"></script>
    <!-- Counter down JS -->
    <script src="{{ asset('landing-assets/js/plugins/odometer.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('landing-assets/js/plugins/isotope.min.js') }}"></script>
    <!-- Masonry JS -->
    <script src="{{ asset('landing-assets/js/plugins/masonry.min.js') }}"></script>
    <!-- ImagesLoaded JS -->
    <script src="{{ asset('landing-assets/js/plugins/images-loaded.min.js') }}"></script>
    <!-- Appear JS -->
    <script src="{{ asset('landing-assets/js/plugins/appear.min.js') }}"></script>
    <!-- TweenMax JS -->
    <script src="{{ asset('landing-assets/js/plugins/TweenMax.min.js') }}"></script>
    <!-- Wavify JS -->
    <script src="{{ asset('landing-assets/js/plugins/wavify.js') }}"></script>
    <!-- jQuery Wavify JS -->
    <script src="{{ asset('landing-assets/js/plugins/jquery.wavify.js') }}"></script>
    <!-- circle progress JS -->
    <script src="{{ asset('landing-assets/js/plugins/circle-progress.min.js') }}"></script>
    <!-- counterup JS -->
    <script src="{{ asset('landing-assets/js/plugins/counterup.min.js') }}"></script>
    <!-- instafeed JS -->
    <script src="{{ asset('landing-assets/js/plugins/instafeed.min.js') }}"></script>
    <!-- wow JS -->
    <script src="{{ asset('landing-assets/js/plugins/wow.min.js') }}"></script>
    <!-- time circles JS -->
    <script src="{{ asset('landing-assets/js/plugins/time-circles.js') }}"></script>
    <!-- animation text JS -->
    <script src="{{ asset('landing-assets/js/plugins/animation-text.min.js') }}"></script>
    <!-- one page nav JS -->
    <script src="{{ asset('landing-assets/js/plugins/one-page-nav.min.js') }}"></script>
    <!-- Mailchimp JS -->
    <script src="{{ asset('landing-assets/js/plugins/mailchimp-ajax-submit.min.js') }}"></script>
    <!-- test JS -->
    <script src="{{ asset('landing-assets/js/plugins/test.js') }}"></script>

    <!-- Revolution JS -->
    <script src="{{ asset('landing-assets/js/revolution/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('landing-assets/js/revolution/rs6.min.js') }}"></script>
    <script src="{{ asset('landing-assets/js/revolution.js') }}"></script>
    
    <!-- <script src="{{ asset('landing-assets/js/plugins/plugins.min.js') }}"></script> -->
    <!-- Main JS -->
    <script src="{{ asset('landing-assets/js/main.js') }}"></script>


</body>

</html>