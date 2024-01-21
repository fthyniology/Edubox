@extends('dashboard.layouts.index')

@section('breadcrumb')
    <div class="page-titles mt-0 breadcrumb-custom">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Past Year SPM Papers</a></li>
            <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">IMB 20503 - Multimedia Insrtuctional Design</a></li> -->
        </ol>
    </div>
@endsection

@section('content')

<div class="row">
	<div class="col-xl-4 col-sm-12">
		<div class="card h-auto">
			<div class="card-header">
				<h4>Past year SPM Papers</h4>
			</div>
            <div class="card-body">
                <ul class="nav nav-pills light">
                    <li class=" nav-item">
                        <a href="#navpills-chap1" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            SPM Sains Kertas 1 - 2019
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap2" class="nav-link" data-toggle="tab" aria-expanded="false">
                            SPM Sains Kertas 2 - 2019
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap3" class="nav-link" data-toggle="tab" aria-expanded="false">
							SPM Sains Kertas 1 - 2020
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a href="#navpills-chap4" class="nav-link" data-toggle="tab" aria-expanded="false">
                            SPM Sains Kertas 2 - 2020
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap5" class="nav-link" data-toggle="tab" aria-expanded="false">
							SPM Sains Kertas 1 - 2021
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#navpills-chap6" class="nav-link" data-toggle="tab" aria-expanded="false">
							SPM Sains Kertas 2 - 2021
                        </a>
                    </li>
                </ul>
            </div>
        </div>
	</div>
	<div class="col-xl-8 col-sm-12">
		<div class="tab-content">
			<div id="navpills-chap1" class="tab-pane active">
			<div class="card">
					<div class="card-header">
						<h4>Chapter 1 : Safety Measures in Laboratory</h4>
						<a type="button" download href="" class="btn btn-outline-info float-right btn-xs">
							<i class="fa fa-cloud-download mr-1"></i>
							Download
						</a>
					</div>
					<div class="card-body">
						<object data="https://gurubesar.my/wp-content/uploads/2020/09/Form-4-Science-Chapter-9-KSSM.pdf" type="application/pdf" width="100%" height="500px"></object>
					</div>
				</div>
			</div>
			<div id="navpills-chap2" class="tab-pane">
				chapter 2
			</div>
			<div id="navpills-chap3" class="tab-pane">
				chapter 3
			</div>
			<div id="navpills-chap4" class="tab-pane">
				chapter 4
			</div>
			<div id="navpills-chap5" class="tab-pane">
				chapter 5
			</div>
			<div id="navpills-chap6" class="tab-pane">
				chapter 6
			</div>
		</div>
	</div>
</div>
@endsection