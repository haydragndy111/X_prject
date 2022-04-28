@extends('layouts.master')
<title>Data tables</title>
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Add a new item</h4>
						</div>
					</div>
				</div>
				<div class="col-4">
					<a href="#">
						<a class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Add New Category </a>
					</a>
				</div>
				<div class="modal" id="modaldemo8">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content modal-content-demo">
							<div class="modal-header">
								<h6 class="modal-title">Catgegory</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<form action="#" method="POST">
									@csrf
									<label for="">Category Name</label>
									<input class="form-control" type="text" placeholder="name" name="name" required> <br> <br>											
									<label for="">Sub Category of</label>
									<div>
										<select name="category_id" class="form-control">
											{{-- @php
												$categories=App\Models\Category::where('category_id','=','0')->get();
											@endphp --}}
											<option value="0">No Subcategory</option>
											{{-- @foreach ($categories as $item)
												<option value=""></option>
											@endforeach --}}
										</select>
									</div>
									<div class="modal-footer">
										<button class="btn ripple btn-primary">Save</button>
										<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
			
					<!--div-->
					<div class="col-xl-12">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">To open your form :</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2"> </a></p>
								<!-- the Add Button -->
								<div class="col-sm-6 col-md-4 col-xl-3 mg-t-20">
									<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">Add new item</a>
								</div>
								<!-- the Add alert -->
								<!-- Modal effects -->
								<div class="modal" id="modaldemo8">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content modal-content-demo">
											<div class="modal-header">
												<h6 class="modal-title">Modal Header</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
											</div>
											<div class="modal-body">
												<form action="#" method="POST">
													@csrf
													<label for="">Product Name</label>
													<input class="form-control" type="text" placeholder="name" name="name" required> <br> <br>
													<div class="form-group">
														<label for="FormControlSelect1">belongs to the Grade :</label>
														<select class="form-control" id="FormControlSelect1" name="grade_id">
															<option selected>Open this select menu</option>
															<option value="10">المرحلة الابتدائية</option>
															<option value="11">المرحلة الاعدادية</option>
															<option value="12">المرحلة الثانوية</option>
														</select>
													</div>													
													<div class="modal-footer">
														<button class="btn ripple btn-primary">Save</button>
														<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
													</div>
												</form>
											</div>
										</div>
                                        
									</div>
								</div>
								<!-- End Modal effects-->
							</div>
						</div>
					</div>
					<!--/div-->

				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}">//pdfff her</script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>


	<!--Internal  Datatable js -->
	<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
	<!-- Internal Modal js-->
	<script src="{{URL::asset('assets/js/modal.js')}}"></script>
@endsection