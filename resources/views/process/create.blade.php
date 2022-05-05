@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
    اضافة فاتورة
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">procces</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Add a new one</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>

    @php
        $customers = App\Models\Customer::all();
        $suppliers = App\Models\Supplier::all();
        $products = App\Models\Product::all();
    @endphp

    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('process.store') }}" method="POST">
                        @csrf
                        {{-- 1 --}}

                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label">Customer name</label>
                                <select name="customer_id" class="form-control">
                                    <!--placeholder-->
                                    <option value="#" selected disabled> Select </option>
                                    @foreach ($customers as $customer)
                                        <option value="{{ $customer->id }}">{{ $customer->customer_organization_name }}</option>
                                    @endforeach
									
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label">Supplier Name</label>
                                <select id="product" name="suppliers_id" class="form-control">
									<option value="#" selected disabled> Select </option>
                                    @foreach ($suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->supplier_Organization_Name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col">
                                <label for="inputName" class="control-label"> Product </label>
                                <select id="product" name="product_id" class="form-control">
									<option value="#" selected disabled> Select </option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->product_Name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        {{-- 3 --}} <br>

                        <div class="row">

                            <div class="col">
                                <label for="inputName" class="control-label"> Description </label>
                                <input type="text" class="form-control" id="inputName" name="description"
                                    title=" " >
                            </div>


                        </div>

                        {{-- 4 --}} <br>

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> Qty </label>
                                <input type="text" class="form-control" id="inputName" name="Qty"
                                    title=" " >
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label"> SP </label>
                                <input type="text" class="form-control" id="inputName" name="SP"
                                    title=" " >
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label"> PP </label>
                                <input type="text" class="form-control" id="inputName" name="PP"
                                    title=" " >
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label"> Lead time </label>
                                <input type="text" class="form-control" id="inputName" name="LeadTime"
                                    title=" " >
                            </div>
                        </div>



                        {{-- 7 --}} <br>
                        <div class="row">                        
                            <div class="col">
                                <label for="inputName" class="control-label"> Supplier Contract Status </label>
                                <input type="text" class="form-control" id="inputName" name="supplier_contract_status"
                                    title=" " >
                            </div>
                            <div class="col">
                                <label> supplier contract date </label>
                                <input class="form-control fc-datepicker" name="supplier_contract_date" placeholder="YYYY-MM-DD"
                                    type="text" value="{{ date('Y-m-d') }}" >
                            </div>
                            <div class="col">
                                <label> supplier PO date </label>
                                <input class="form-control fc-datepicker" name="supplier_PO_rate" placeholder="YYYY-MM-DD"
                                    type="text" value="{{ date('Y-m-d') }}" >
                            </div>
                        </div>

                        {{-- 8 --}} <br>
                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">customer comments</label>
                                <textarea class="form-control" id="exampleTextarea" name="customer_comments" rows="3"></textarea>
                            </div>
                        </div><br>

                        
                        {{-- 9 --}}
                        <div class="row">
                            <div class="col">
                                <label for="exampleTextarea">supplier comments</label>
                                <textarea class="form-control" id="exampleTextarea" name="supplier_comments" rows="3"></textarea>
                            </div>
                        </div><br>

                        {{-- 5 --}} <br>
                        <div class="row">                        
                            <div class="col">
                                <label for="inputName" class="control-label"> tolerance </label>
                                <input type="text" class="form-control" id="inputName" name="tolerance"
                                    title=" " >
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label"> suppier quotation validity </label>
                                <input type="text" class="form-control" id="inputName" name="suppier_quotation_validity"
                                    title=" " >
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> product design </label>
                                <input type="text" class="form-control" id="inputName" name="product_design"
                                    title=" " >
                            </div>  
                            <div class="col">
                                <label for="inputName" class="control-label"> cliche die cut </label>
                                <input type="text" class="form-control" id="inputName" name="cliche_die_cut"
                                    title=" " >
                            </div>
                        </div>

                        {{-- 6 --}} <br>
                        <div class="row"> 
                            <div class="col">
                                <label for="inputName" class="control-label"> approved customer quotation </label>
                                <select name="approved_customer_quotation" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled> Select </option>
                                   
                                    <option value="yes"> Yes </option>
                                    <option value="no"> No </option>
                                    <option value="pending"> Pending </option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="inputName" class="control-label"> reason for rejection </label>
                                <input type="text" class="form-control" id="inputName" name="reason_for_rejection"
                                    title=" " >
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col">
                                <label for="inputName" class="control-label"> supplier_quotation </label>
                                <input type="text" class="form-control" id="inputName" name="supplier_quotation"
                                    title=" " >
                            </div>  
                            <div class="col">
                                <label for="inputName" class="control-label"> purchase contract reference </label>
                                <input type="text" class="form-control" id="inputName" name="purchase_contract_reference"
                                    title=" " >
                            </div>
                        </div> <br>






                        {{-- 

                        <p class="text-danger">* صيغة المرفق pdf, jpeg ,.jpg , png </p>
                        <h5 class="card-title">Files</h5>

                        <div class="col-sm-12 col-md-12">
                            <input type="file" name="pic" class="dropify" accept=".pdf,.jpg, .png, image/jpeg, image/png"
                                data-height="70" />
                        </div><br>
                        
                        --}}

                        <br>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="content-title mb-0 my-auto">Supplier contract</h4> <br>
                <div class="row">  
                    <div class="col">
                        <label for="inputName" class="control-label"> validity </label>
                        <input type="text" class="form-control" id="inputName" name="validity_s"
                            title=" "  >
                    </div>  
                    <div class="col">
                        <label for="inputName" class="control-label"> leadtime </label>
                        <input type="text" class="form-control" id="inputName" name="leadtime_s"
                            title=" "  >
                    </div>
                </div> <br> <br>
                <div class="row">  
                    <div class="col">
                        <label for="inputName" class="control-label"> delivery handling </label>
                        <input type="text" class="form-control" id="inputName" name="delivery_handling_s"
                            title=" " >
                    </div>  
                    <div class="col">
                        <label for="inputName" class="control-label"> advance payment </label>
                        <input type="text" class="form-control" id="inputName" name="advance_payment_s"
                            title=" "  >
                    </div>
                </div><br><br>
                <div class="row">  
                    <div class="col">
                        <label for="inputName" class="control-label"> tolerance </label>
                        <input type="text" class="form-control" id="inputName" name="tolerance_s"
                            title=" "  >
                    </div>  
                    <div class="col">
                        <label for="inputName" class="control-label"> printing cost </label>
                        <input type="text" class="form-control" id="inputName" name="printing_cost_s"
                            title=" " >
                    </div>
                </div>
            </div>                
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="content-title mb-0 my-auto">Customer contract</h4> <br>
                <div class="row">  
                    <div class="col">
                        <label for="inputName" class="control-label"> validity </label>
                        <input type="text" class="form-control" id="inputName" name="validity_c"
                            title=" ">
                    </div>  
                    <div class="col">
                        <label for="inputName" class="control-label"> leadtime </label>
                        <input type="text" class="form-control" id="inputName" name="leadtime_c"
                            title=" ">
                    </div>
                </div> <br> <br>
                <div class="row">  
                    <div class="col">
                        <label for="inputName" class="control-label"> delivery handling </label>
                        <input type="text" class="form-control" id="inputName" name="delivery_handling_c"
                            title=" ">
                    </div>  
                    <div class="col">
                        <label for="inputName" class="control-label"> advance payment </label>
                        <input type="text" class="form-control" id="inputName" name="advance_payment_c"
                            title=" ">
                    </div>
                </div><br><br>
                <div class="row">  
                    <div class="col">
                        <label for="inputName" class="control-label"> tolerance </label>
                        <input type="text" class="form-control" id="inputName" name="tolerance_c"
                            title=" ">
                    </div>  
                    <div class="col">
                        <label for="inputName" class="control-label"> printing cost </label>
                        <input type="text" class="form-control" id="inputName" name="printing_cost_c"
                            title=" ">
                    </div>
                </div>
            </div>   
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>



        </form>             
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>

   



@endsection