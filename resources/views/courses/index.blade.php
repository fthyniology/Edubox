@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Courselist</a></li>
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">IMB 20503 - Multimedia Insrtuctional Design</a></li> -->
        </ol>
    </div>
@endsection

@section('content')
    
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img class="card-img-top img-fluid"  src="{{ asset('images/card/9.png') }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">IMB 20503 - Multimedia Insrtuctional Design</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Elevate the learning experience through multimedia instructional design as you harness the 
                        power of engaging multimedia elements to create impactful and interactive learning materials 
                        that captivate learners and enhance knowledge retention.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn-outline-primary float-right"> <a href="{!! url('course-detail'); !!}">View Detail</a></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img class="card-img-top img-fluid"  src="{{ asset('images/card/10.png') }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">ISB 42503 - Internet Programming</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Explore into the world of internet programming and unlock the skills to create dynamic websites and web applications,
                        harnessing the power of programming languages and technologies to bring your ideas to life on the internet.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn-outline-primary float-right"> <a href="{!! url('course-detail'); !!}">View Detail</a></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img class="card-img-top img-fluid"  src="{{ asset('images/card/11.png') }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">MPU 3192 - Philosophy</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Embark on a profound intellectual exploration through the study of philosophy, 
                        pondering life's fundamental questions and gaining a deeper understanding of the 
                        complexities of existence and human thought.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn-outline-primary float-right"> <a href="{!! url('course-detail'); !!}">View Detail</a></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img class="card-img-top img-fluid"  src="{{ asset('images/card/12.png') }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">IMB 11803 - Visual Communication</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                    Unleash the power of visual communication as you master the art of conveying meaningful messages, emotions, 
                    and ideas through the strategic use of visual elements, design principles, and storytelling techniques.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn-outline-primary float-right"> <a href="{!! url('course-detail'); !!}">View Detail</a></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img class="card-img-top img-fluid"  src="{{ asset('images/card/8.png') }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">IAB 10903 - Digital Photography</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Master the art of digital photography, from camera techniques to composition and 
                        post-processing, and capture stunning images that showcase your unique vision.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn-outline-primary float-right"> <a href="{!! url('course-detail'); !!}">View Detail</a></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="card mb-3">
                <img class="card-img-top img-fluid"  src="{{ asset('images/card/13.png') }}" alt="Card image cap">
                <div class="card-header">
                    <h5 class="card-title">IMB 12003 - Digital Graphic Design</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Discover the realm of digital graphic design as you unleash your creativity, 
                        learn industry-standard software, and craft visually captivating designs for diverse digital platforms.
                    </p>
                </div>
                <div class="card-footer">
                    <div class="btn btn-outline-primary float-right"> <a href="{!! url('course-detail'); !!}">View Detail</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection