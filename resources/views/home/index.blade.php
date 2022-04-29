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
@section('content')
<div class="row row-sm">
    <!--Products Section-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">@lang('lang.Products Table')</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <div class="col-4">
                        <form action="{{route('product.create2')}}" method="post">
                            @csrf
                            <select name="type" class="form-control SlectBox">
                                <option value="">...</option>
                                <option value="paper_boxes">@lang('lang.Paper Box')</option>
                                <option value="paper_cups">@lang('lang.Paper cup')</option>
                                <option value="handle_paper_bags">@lang('lang.Paper Bag With Handle')</option>
                                <option value="sos_without_handle_bags">@lang('lang.SOS Bag Without Handle')</option>
                                <option value="sachel_bag">@lang('lang.Sachel Bags')</option>
                                <option value="paper_wraps">@lang('lang.Paper Wrap')</option>
                                <option value="paper_nabkins">@lang('lang.Paper Knabkins')</option>
                                <option value="plastic_cups">@lang('lang.Plastic Cup')</option>
                                <option value="plastic_bags">@lang('lang.Plastic Bag')</option>
                                <option value="corrugated_boxes">@lang('lang.corrugated Box')</option>
                                <option value="sachal_bags">@lang('lang.Sachal Bag')</option>
                                <option value="sos_without_handle_bags">@lang('lang.SOS Without Handle Bag')</option>
                            </select>
                            <button class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">@lang('lang.Add New Product') </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">@lang('lang.Name')</th>
                                <th class="border-bottom-0">@lang('lang.Category Type')</th>
                                <th class="border-bottom-0">@lang('lang.attatchment')</th>
                                <th class="border-bottom-0">@lang('lang.Print Colors')</th>
                                <th class="border-bottom-0">@lang('lang.Design')</th>
                                <th class="border-bottom-0">@lang('lang.price')</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Cients Section-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">@lang('lang.CustomersTable')</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <a href="{{route('customer.create')}}">
                        <button class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">@lang('lang.Add New Customer') </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">@lang('lang.Name')</th>
                                <th class="border-bottom-0">@lang('lang.Email')</th>
                                <th class="border-bottom-0">@lang('lang.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-primary">@lang('lang.view')</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->
    <!--Suppliers Section-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">@lang('lang.Suppliers Table')</h4>
                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                    <a href="{{route('supplier.create')}}">
                        <button class="modal-effect btn btn-primary btn-block" data-effect="effect-flip-vertical" data-toggle="modal" href="#modaldemo8">@lang('lang.Add New Supplier ')</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table key-buttons text-md-nowrap">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">@lang('lang.Name')</th>
                                <th class="border-bottom-0">@lang('lang.Email')</th>
                                <th class="border-bottom-0">@lang('lang.action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-primary">@lang('lang.view')</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--/div-->

</div>
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
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script> --}}
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script> --}}
{{-- <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script> --}}
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection