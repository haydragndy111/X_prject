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
    
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">product / {{$type}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    Add a new one</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">

        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('product/Other.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">Product Department</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">Packaging</option>
                                    <option value="Design Service">Design Service</option>
                                    <option value="Logistics Service">Logistics Service</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
                                <label for="product_name" class="control-label">Product Name</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select name="product_name" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Paper Wrap Comes in Sheets MG White">Paper Wrap Comes in Sheets MG White</option>
                                    
                                </select>
                            </div>
                            {{-- <div class="col">
                                <input class="form-control fc-datepicker" name="category_type" placeholder="YYYY-MM-DD"
                                    type="text" value="{{$type}}">
                            </div> --}}
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="model" class="control-label">Model</label>
                                <select name="model" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Comes in Sheets">Comes in Sheets</option>
                                    
                                </select>
                            </div>
                            
                            
                        </div>
                        {{-- 3 --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="width">Width</label>
                                <input type="double" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">Height</label>
                                <input type="double" name="height" placeholder="height" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="product_type" class="control-label">Product Type</label>
                                <select name="product_type" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Customied">Customied</option>
                                    <option value="Standard">Standard</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="branding" class="control-label">Branding</label>
                                <select name="branding" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Printing">Printing</option>
                                    <option value="Not-Printing">Not-Printing</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="additional_text">Additional Text</label>
                                <textarea class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <p class="text-danger">Upload Only ( pdf, jpeg , png ) files</p>
                                <h5 class="card-title">Files</h5>
                                <div class="col-sm-12 col-md-12">
                                    <input type="file" name="files[]" class="form-control" accept="file/*" enctype="multipart/form-data">
                                </div>
                            </div>
                        </div>
                        <br>
                        {{-- Category Section --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="material_type" class="control-label">Material Type</label>
                                <select name="material_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Alum Dimond">Alum Dimond</option>
                                    <option value="MG">MG</option>
                                    <option value="Wax">Wax</option>
                                    <option value="Alum+Paper">Alum+Paper</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="material_colors" class="control-label">Material Colors</label>
                                <select name="material_colors" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Greese">Greese</option>
                                    <option value="Brown">Brown</option>
                                    <option value="White">White</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="quantity_per_item">Quantity</label>
                                <input type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="item_weight">Item Weight</label>
                                <input type="number" name="item_weight" placeholder="quantity" class="form-control">
                            </div>
                            
                        </div>
                        <br>
                        
                        {{-- 6 --}}
                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
                                <label for="paper_thickness">Paper Thickness</label>
                                <input type="float" name="paper_thickness" placeholder="thickness" class="form-control">
                            </div>
                            <div class="col">
                                <label for="pe_layer" class="control-label">PE Layer</label>
                                <select name="pe_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">yes</option>
                                    <option value="NO">No</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="merged_layer_thickness" class="control-label">Merged Layer Thickness</label>
                                <input type="float" name="merged_layer_thickness" placeholder="thickness" class="form-control">
                            </div>
                            
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection