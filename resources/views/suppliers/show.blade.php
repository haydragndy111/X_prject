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
 
    <!--Suppliers Section-->
    <div class="col-xl-12">
        <div class="card mg-b-20">
            <div class="card-header pb-0">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title mg-b-0">Supplier Reference<span class="btn btn-primary btn-rounded">{{$supplier->id}} </span></h4>
                </div>
                <br>
                <div>
                    <a href="{{url()->previous()}}">
                        <button class="btn btn-primary">
                            Return To Suppliers Page
                        </button>
                    </a>
                    <a href="{{route('supplier.edit',$supplier->id)}}">
                        <button class="btn btn-warning">Edit</button>
                    </a>
                    <a href="{{route('supplier.destroy',$supplier->id)}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-product">
                        <tbody>
                            <tr>
                                <td width="390">
                                    <h3>Supplier Organizatin Name</h3>
                                </td>
                                <td class="btn btn-primary">
                                    <h3>{{$supplier->supplier_organization_name}}</h3>
                                </td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Name</td>
                                <td>{{$supplier->supplier_contact_name}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Position</td>
                                <td>{{$supplier->supplier_contact_position}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Number</td>
                                <td>{{$supplier->supplier_contact_number}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Whatsapp</td>
                                <td>{{$supplier->supplier_contact_whatsaap}}</td>
                            </tr>
                            <tr>
                                <td width="390">Email</td>
                                <td>{{$supplier->email}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Name 2</td>
                                <td>{{$supplier->supplier_contact_name2}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Position 2</td>
                                <td>{{$supplier->supplier_contact2_position}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Contact Number 2</td>
                                <td>{{$supplier->supplier_contact2_number}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Catelouge</td>
                                <td>{{$supplier->supplier_catelouge}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Website</td>
                                <td>{{$supplier->supplier_webSite}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Fixed Quotation 1</td>
                                <td>{{$supplier->supplier_fixed_quotation1}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Fixed Quotation 2</td>
                                <td>{{$supplier->supplier_fixed_quotation2}}</td>
                            </tr>
                            <tr>
                                <td width="390">Social Media Accounts</td>
                                <td>{{$supplier->social_media_accounts}}</td>
                            </tr>
                            <tr>
                                <td width="390">VAT Number</td>
                                <td>{{$supplier->vat_number}}</td>
                            </tr>
                            <tr>
                                <td width="390">Country</td>
                                <td>{{$supplier->country}}</td>
                            </tr>
                            <tr>
                                <td width="390">City</td>
                                <td>{{$supplier->city}}</td>
                            </tr>
                            <tr>
                                <td width="390">District</td>
                                <td>{{$supplier->district}}</td>
                            </tr>
                            <tr>
                                <td width="390">Street</td>
                                <td>{{$supplier->street}}</td>
                            </tr>
                            <tr>
                                <td width="390">Building Number</td>
                                <td>{{$supplier->building_number}}</td>
                            </tr>
                            <tr>
                                <td width="390">Second Number</td>
                                <td>{{$supplier->secondary_number}}</td>
                            </tr>
                            <tr>
                                <td width="390">Postal Code </td>
                                <td>{{$supplier->postal_code}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Attatchment C.R</td>
                                <td>{{$supplier->supplier_attatchment_CR}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier VAT Certificate</td>
                                <td>{{$supplier->supplier_vat_certificate}}</td>
                            </tr>
                            <tr>
                                <td width="390">User Commnets</td>
                                <td>{{$supplier->user_comments}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier IBAN1</td>
                                <td>{{$supplier->supplier_IBAN1}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier IBAN2</td>
                                <td>{{$supplier->supplier_IBAN2}}</td>
                            </tr>
                            <tr>
                                <td width="390">Factory Location </td>
                                <td>{{$supplier->factory_location}}</td>
                            </tr>
                            <tr>
                                <td width="390">Office Location </td>
                                <td>{{$supplier->office_location}}</td>
                            </tr>
                            <tr>
                                <td width="390">Supplier Type</td>
                                <td>{{$supplier->supplier_type}}</td>
                            </tr>
                        
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
<script>
    $(document).ready(function(){        
        $('.dynamic').change(function(){
            if($(this).val() != ''){
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('project.fetch') }}",
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result){
                        $('#'+dependent).html(result);
                    }
                })
            }
        });

        $('#country').change(function(){
            $('#state').val('');
            $('#city').val('');
        });

        $('#state').change(function(){
            $('#city').val('');
        });
    });
    </script>
@endsection