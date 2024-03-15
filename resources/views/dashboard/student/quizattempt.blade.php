@extends('dashboard.layouts.index')

@section('breadcrumb')
<div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/course-list') }}">Syllabus</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $course->name ?? '' }}</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Quiz</a></li>
        </ol>
    </div>
@endsection

@section('content')
<div class="row">
	<div class="col-xl-9 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Quiz Chapter 1 : Safety Measures in Laboratory</h4>
            </div>
            <div class="card-body">
		        <div class="tab-content">
                    <div id="navpills-Q1" class="tab-pane active">  
                        <h3>Question 1</h3>
                        <div class="form-group ml-4">
                            <img class="img-fluid" src="{{ asset('images/edubox/quiz/q1.png') }}" alt="">
                            <p class="">The diagram shows two examples of microorganisms. What is this group of microorganisms?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                    <label class="form-check-label">
                                        Fungus
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                    <label class="form-check-label">
                                        Virus
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                    <label class="form-check-label">
                                        Algae
                                    </label>
                                </div>
                            
                            <a type="button" href="#navpills-Q2" class="btn btn-outline-info float-right btn-xs">
                                Next Question
                                <i class="fa fa-chevron-right ml-1"></i>
                            </a> 
                        </div>
                    </div>
                    <div id="navpills-Q2" class="tab-pane">
                     <h3>Question 2</h3>
                        <div class="form-group ml-4">
                            <img class="img-fluid" src="{{ asset('images/edubox/quiz/q2.png') }}" alt="">
                            <p class="">Show the vector that spreads the disease Which of the following diseases can be spread by this vector?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                    <label class="form-check-label">
                                        year's disease
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                    <label class="form-check-label">
                                        Tinea Versicolor
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                    <label class="form-check-label">
                                        Dengue Fever
                                    </label>
                                </div>
                            
                            <a type="button" href="#navpills-Q2" class="btn btn-outline-info float-right btn-xs">
                                Next Question
                                <i class="fa fa-chevron-right ml-1"></i>
                            </a> 
                        </div>
                    </div>
                    <div id="navpills-Q3" class="tab-pane">
                        <h3>Question 3</h3>
                        <div class="form-group ml-4">
                            <!-- <img class="img-fluid" src="{{ asset('images/edubox/quiz-1.png') }}" alt=""> -->
                            <p class="">What natural phenomena play an important role in the nitrogen cycle?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                    <label class="form-check-label">
                                        Flood
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                    <label class="form-check-label">
                                        Flash Flood
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                    <label class="form-check-label">
                                        Hurricanes
                                    </label>
                                </div>
                            
                            <a type="button" href="#navpills-Q2" class="btn btn-outline-info float-right btn-xs">
                                Next Question
                                <i class="fa fa-chevron-right ml-1"></i>
                            </a> 
                        </div>
                    </div>
                    <div id="navpills-Q4" class="tab-pane">
                        <h3>Question 4</h3>
                        <div class="form-group ml-4">
                            <!-- <img class="img-fluid" src="{{ asset('images/edubox/quiz-1.png') }}" alt=""> -->
                            <p class="">Which of the following is best for sterilizing a wound?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                    <label class="form-check-label">
                                        Antiseptic
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                    <label class="form-check-label">
                                        Disinfectant
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                    <label class="form-check-label">
                                        Ultraviolet Rays
                                    </label>
                                </div>
                            
                            <a type="button" href="#navpills-Q2" class="btn btn-outline-info float-right btn-xs">
                                Next Question
                                <i class="fa fa-chevron-right ml-1"></i>
                            </a> 
                        </div>
                    </div>
                    <div id="navpills-Q5" class="tab-pane">
                        <h3>Question 5</h3>
                        <div class="form-group ml-4">
                            <img class="img-fluid" src="{{ asset('images/edubox/quiz/q5.jpg') }}" alt="">
                            <p class="">Are microorganisms helpful or harmful?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                    <label class="form-check-label">
                                        Helpful
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                    <label class="form-check-label">
                                        Harmful
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                    <label class="form-check-label">
                                        Both
                                    </label>
                                </div>
                            
                            <a type="button" href="#navpills-Q2" class="btn btn-outline-info float-right btn-xs">
                                Next Question
                                <i class="fa fa-chevron-right ml-1"></i>
                            </a> 
                        </div>
                    </div>
                    <div id="navpills-Q6" class="tab-pane">
                        <h3>Question 6</h3>
                        <div class="form-group ml-4">
                            <img class="img-fluid" src="{{ asset('images/edubox/quiz/q6.jpg') }}" alt="">
                            <p class="">What is Penicillin (medicine) made from?</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                                    <label class="form-check-label">
                                        Water
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                    <label class="form-check-label">
                                        Sugar
                                    </label>
                                </div>
                                <div class="form-check disabled">
                                    <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                                    <label class="form-check-label">
                                        Algae
                                    </label>
                                </div>
                            
                            <a type="button" href="#navpills-Q2" class="btn btn-outline-info float-right btn-xs">
                                Next Question
                                <i class="fa fa-chevron-right ml-1"></i>
                            </a> 
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <div class="col-xl-3 col-sm-12">
		<div class="card">
			<div class="card-header">
				<h4>Past year SPM Papers</h4>
			</div>
            <div class="card-body">
                <ul class="nav nav-pills light">
                    <li class=" nav-item">
                        <a href="#navpills-Q1" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Q1
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-Q2" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Q2
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-Q3" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Q3
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="#navpills-Q4" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Q4
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-Q5" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Q5
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-Q6" class="nav-link" data-toggle="tab" aria-expanded="false">
                            Q6
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
	</div>
</div>
@endsection