@extends('layouts.master')
<title>Home</title>
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">@lang('lang.Hi, welcome back!')</h2>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">@lang('lang.TODAY ORDERS')</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$5,74.12</h4>
											<p class="mb-0 tx-12 text-white op-7">@lang('lang.Compared to last week')</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> +427</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">@lang('lang.TODAY EARNINGS')</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$1,230.17</h4>
											<p class="mb-0 tx-12 text-white op-7">@lang('lang.Compared to last week')</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -23.09%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">@lang('lang.TOTAL EARNINGS')</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$7,125.70</h4>
											<p class="mb-0 tx-12 text-white op-7">@lang('lang.Compared to last week')</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-up text-white"></i>
											<span class="text-white op-7"> 52.09%</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">@lang('lang.PRODUCT SOLD')</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$4,820.50</h4>
											<p class="mb-0 tx-12 text-white op-7">@lang('lang.Compared to last week')</p>
										</div>
										<span class="float-right my-auto mr-auto">
											<i class="fas fa-arrow-circle-down text-white"></i>
											<span class="text-white op-7"> -152.3</span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-md-12 col-lg-12 col-xl-7">
						<div class="card">
							<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-0">@lang('lang.Orderstatus')</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 text-muted mb-0">@lang('lang.Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number')</p>
							</div>
							<div class="card-body col-lg-3 col-xl-3">
								<div class="total-revenue">
									<div>
									  <h4>120,750</h4>
									  <label><span class="bg-primary"></span>@lang('lang.success')</label>
									</div>
									<div>
									  <h4>56,108</h4>
									  <label><span class="bg-danger"></span>@lang('lang.Pend')</label>

									</div>
									<div>
									  <h4>32,895</h4>
									  <label><span class="bg-warning"></span>@lang('lang.Failed')</label>
									</div>
								  </div>
								  <br>
									</div>
									 <!-- chartjs -->
									<canvas id="myChart" width="400" height="400" class="mt-20" style="margin-top: 20px"></canvas>
								 
								  
									<!-- </div> -->
								<!-- <div id="bar" class="sales-bar mt-4"></div> -->
							</div>
						</div>
					<!-- </div> -->
					<div class="col-lg-12 col-xl-5">
						<div class="card card-dashboard-map-one">
							<label class="main-content-label">@lang('lang.Sales Revenue by Customers in USA')</label>
							<span class="d-block mg-b-20 text-muted tx-12">@lang('lang.Sales Performance of all states in the United States')</span>
							<div class="">
								<div class="vmap-wrapper ht-180" id="vmap2">
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-4 col-md-12 col-lg-12">
						<div class="card">
							<div class="card-header pb-1">
								<h3 class="card-title mb-2">@lang('lang.Recent Customers')</h3>
								<p class="tx-12 mb-0 text-muted">@lang('lang.A customer is an individual or business that purchases the goods service has evolved to include real-time')</p>
							</div>
							<div class="card-body p-0 customers mt-1">
								<div class="list-group list-lg-group list-group-flush">
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/3.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-0">
														<h5 class="mb-1 tx-15">Samantha Melon</h5>
														<p class="mb-0 tx-13 text-muted">@lang('lang.User ID'): #1234 <span class="text-success ml-2">@lang('lang.Paid')</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark1" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/11.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Jimmy Changa</h5>
														<p class="mb-0 tx-13 text-muted">@lang('lang.User ID'): #1234 <span class="text-danger ml-2">@lang('lang.Pending')</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark2" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/17.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Gabe Lackmen</h5>
														<p class="mb-0 tx-13 text-muted">@lang('lang.User ID'): #1234<span class="text-danger ml-2">@lang('lang.Pending')</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark3" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/15.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Manuel Labor</h5>
														<p class="mb-0 tx-13 text-muted">@lang('lang.User ID'): #1234<span class="text-success ml-2">@lang('lang.Paid')</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark4" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">
										<div class="media mt-0">
											<img class="avatar-lg rounded-circle ml-3 my-auto" src="{{URL::asset('assets/img/faces/6.jpg')}}" alt="Image description">
											<div class="media-body">
												<div class="d-flex align-items-center">
													<div class="mt-1">
														<h5 class="mb-1 tx-15">Sharon Needles</h5>
														<p class="b-0 tx-13 text-muted mb-0">@lang('lang.User ID'): #1234<span class="text-success ml-2">@lang('lang.Paid')</span></p>
													</div>
													<span class="mr-auto wd-45p fs-16 mt-2">
														<div id="spark5" class="wd-100p"></div>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12 col-lg-6">
						<div class="card">
							<div class="card-header pb-1">
								<h3 class="card-title mb-2">@lang('lang.Sales Activity')</h3>
								<p class="tx-12 mb-0 text-muted">@lang('lang.Sales activities are the tactics that salespeople use to achieve their goals and objective')</p>
							</div>
							<div class="product-timeline card-body pt-2 mt-1">
								<ul class="timeline-1 mb-0">
									<li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">@lang('lang.Total Products')</span> <a href="#" class="float-left tx-11 text-muted">3 @lang('lang.days ago')</a>
										<p class="mb-0 text-muted tx-12">1.3k @lang('lang.New Products')</p>
									</li>
									<li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">@lang('lang.Total Sales')</span> <a href="#" class="float-left tx-11 text-muted">35@lang('lang.mins ago') </a>
										<p class="mb-0 text-muted tx-12">1k @lang('lang.New Sales')</p>
									</li>
									<li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">@lang('lang.Toatal Revenue')</span> <a href="#" class="float-left tx-11 text-muted">50 @lang('lang.mins ago') </a>
										<p class="mb-0 text-muted tx-12">23.5K @lang('lang.New Revenue')</p>
									</li>
									<li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">@lang('lang.Toatal Profit')</span> <a href="#" class="float-left tx-11 text-muted">1 @lang('lang.hour ago') </a>
										<p class="mb-0 text-muted tx-12">3k @lang('lang.New profit')</p>
									</li>
									<li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">@lang('lang.Customer Visits')</span> <a href="#" class="float-left tx-11 text-muted">1 @lang('lang.day ago')</a>
										<p class="mb-0 text-muted tx-12">15% @lang('lang.increased')</p>
									</li>
									<li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">@lang('lang.Customer Reviews')</span> <a href="#" class="float-left tx-11 text-muted"> 1 @lang('lang.day ago')</a>
										<p class="mb-0 text-muted tx-12">1.5k @lang('lang.reviews')</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-md-12 col-lg-6">
						<div class="card">
							<div class="card-header pb-0">
								<h3 class="card-title mb-2">@lang('lang.Recent Orders')</h3>
								<p class="tx-12 mb-0 text-muted">@lang('lang.text')</p>
							</div>
							<div class="card-body sales-info ot-0 pt-0 pb-0">
								<div id="chart" class="ht-150"></div>
								<div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">
									<div class="col-md-6 col">
										<p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>@lang('lang.Delivered')</p>
										<h3 class="mb-1">5238</h3>
										<div class="d-flex">
											<p class="text-muted ">@lang('lang.Last') 6 @lang('lang.months')</p>
										</div>
									</div>
									<div class="col-md-6 col">
										<p class="mb-0 d-flex"><span class="legend bg-info brround"></span>@lang('lang.Cancelled')</p>
											<h3 class="mb-1">3467</h3>
										<div class="d-flex">
											<p class="text-muted">@lang('lang.Last') 6 @lang('lang.months')</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card ">
							<div class="card-body">
								<div class="row">
									<div class="col-md-6">
										<div class="d-flex align-items-center pb-2">
											<p class="mb-0">@lang('lang.Total Sales')</p>
										</div>
										<h4 class="font-weight-bold mb-2">$7,590</h4>
										<div class="progress progress-style progress-sm">
											<div class="progress-bar bg-primary-gradient wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
										</div>
									</div>
									<div class="col-md-6 mt-4 mt-md-0">
										<div class="d-flex align-items-center pb-2">
											<p class="mb-0">@lang('lang.Active Users')</p>
										</div>
										<h4 class="font-weight-bold mb-2">$5,460</h4>
										<div class="progress progress-style progress-sm">
											<div class="progress-bar bg-danger-gradient wd-75" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row close -->

				<!-- row opened -->
				<div class="row row-sm row-deck">
					<div class="col-md-12 col-lg-4 col-xl-4">
						<div class="card card-dashboard-eight pb-2">
							<h6 class="card-title">@lang('lang.Your Top Countries')</h6><span class="d-block mg-b-10 text-muted tx-12">@lang('lang.Sales performance revenue based by country')</span>
							<div class="list-group">
								<div class="list-group-item border-top-0">
									<i class="flag-icon flag-icon-us flag-icon-squared"></i>
									<p>@lang('lang.United States')</p><span>$1,671.10</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-nl flag-icon-squared"></i>
									<p>@lang('lang.Netherlands')</p><span>$1,064.75</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-gb flag-icon-squared"></i>
									<p>@lang('lang.United Kingdom')</p><span>$1,055.98</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-ca flag-icon-squared"></i>
									<p>@lang('lang.Canada')</p><span>$1,045.49</span>
								</div>
								<div class="list-group-item">
									<i class="flag-icon flag-icon-in flag-icon-squared"></i>
									<p>@lang('lang.India')</p><span>$1,930.12</span>
								</div>
								<div class="list-group-item border-bottom-0 mb-0">
									<i class="flag-icon flag-icon-au flag-icon-squared"></i>
									<p>@lang('lang.Australia')</p><span>$1,042.00</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-8 col-xl-8">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">@lang('lang.Your Most Recent Earnings')</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<span class="tx-12 tx-muted mb-3 ">@lang('lang.most').</span>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-25p">@lang('lang.Date')</th>
											<th class="wd-lg-25p tx-right">@lang('lang.Sales Count')</th>
											<th class="wd-lg-25p tx-right">@lang('lang.Earnings')</th>
											<th class="wd-lg-25p tx-right">@lang('lang.Tax Witheld')</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>05 Dec 2019</td>
											<td class="tx-right tx-medium tx-inverse">34</td>
											<td class="tx-right tx-medium tx-inverse">$658.20</td>
											<td class="tx-right tx-medium tx-danger">-$45.10</td>
										</tr>
										<tr>
											<td>06 Dec 2019</td>
											<td class="tx-right tx-medium tx-inverse">26</td>
											<td class="tx-right tx-medium tx-inverse">$453.25</td>
											<td class="tx-right tx-medium tx-danger">-$15.02</td>
										</tr>
										<tr>
											<td>07 Dec 2019</td>
											<td class="tx-right tx-medium tx-inverse">34</td>
											<td class="tx-right tx-medium tx-inverse">$653.12</td>
											<td class="tx-right tx-medium tx-danger">-$13.45</td>
										</tr>
										<tr>
											<td>08 Dec 2019</td>
											<td class="tx-right tx-medium tx-inverse">45</td>
											<td class="tx-right tx-medium tx-inverse">$546.47</td>
											<td class="tx-right tx-medium tx-danger">-$24.22</td>
										</tr>
										<tr>
											<td>09 Dec 2019</td>
											<td class="tx-right tx-medium tx-inverse">31</td>
											<td class="tx-right tx-medium tx-inverse">$425.72</td>
											<td class="tx-right tx-medium tx-danger">-$25.01</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
<!-- <script>
$(function () {

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
            	// lineTension:0.3,
            	// pointRadius:5,
            	// pointHoverRadius:5,
            	// pointHitRadius:20,
            	// pointBorderWidth:2,
                // label: '# of Votes',
                data: [9, 8, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        // maxTicksLimit:5
                    }
                }]
            },
            legend:{
            	display:false
            }

        }
    });
});
</script>	-->
<script>

	ajaxGetPostMonthlyData:function()
	{
	
			var urlPath ='http://'+ window.location.hostname + '/get-post-chart-data';
			var request=$.ajax({
				method:'GET',
				url:urlPath,
			});
			request.done(function(response)
			{
				charts.createCompletedJobsChart(response);
			});
	},
$(function () {
	this.ajaxGetPostMonthlyData();
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:response.months, 
			// ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
            	// lineTension:0.3,
            	// pointRadius:5,
            	// pointHoverRadius:5,
            	// pointHitRadius:20,
            	// pointBorderWidth:2,
                // label: '# of Votes',
				data:response.post_count_data,
                // data: [9, 8, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true,
                        // maxTicksLimit:5
                    }
                }]
            },
            legend:{
            	display:false
            }

        }
    });
});
</script>
@endsection 