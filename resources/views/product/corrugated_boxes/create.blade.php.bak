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
                    <form action="{{route('CorrugatedBox.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">Product Department</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">Packaging</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
                                <label for="product_name" class="control-label">Product Name</label>
                                <input type="text" class="form-control" id="inputName" name="product_name">
                                
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="length">Length</label>
                                <input type="float" name="length" placeholder="Length" class="form-control">
                            </div>
                            <div class="col">
                                <label for="width">Width</label>
                                <input type="float" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">Height</label>
                                <input type="float" name="height" placeholder="height" class="form-control">
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
                                    <option value="E flute 2,6">E flute 2,6</option>
                                    <option value="B flute 2,3">B flute 2,3</option>
                                    <option value="C flute 3">C flute 3</option>
                                    <option value="A flute 4">A flute 4</option>
                                    <option value="EB flute 4,6">EB flute 4,6</option>
                                    <option value="RB flute 5">RB flute 5</option>
                                    <option value="BC flute 5,7 - 6,5">BC flute 5,7 - 6,5</option>
                                    <option value="AC flute 9">AC flute 9</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="material_color" class="control-label">Material Colors</label>
                                <select name="material_color" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="white">White</option>
                                    <option value="brown">Brown</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="model" class="control-label">Model</label>
                                <select name="model" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Rectangular">Rectangular</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="quantity_per_item">Quantity</label>
                                <input type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            
                        </div>
                        
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
                                <label for="single_box_height">Single Box Width</label>
                                <input type="float" name="single_box_height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="single_box_width">Single Box Width</label>
                                <input type="float" name="single_box_width" placeholder="number" class="form-control">
                            </div>
                            
                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="solovan_layer">Solovan Layer</label>
                                <select name="solovan_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Clear">Clear</option>
                                    <option value="Shining">Shining</option>
                                </select> 
                            </div>                           
                            <div class="col">
                                <label for="uv_layer">UV Layer</label>
                                <select name="uv_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select> 
                            </div>
                            <div class="col">
                                <label for="coverage">Coverage</label>
                                <select name="coverage" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select> 
                            </div>
                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="merged_normal_layer">Merged Normal Layer</label>
                                <select name="merged_normal_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select> 
                            </div>
                            <div class="col">
                                <label for="finger_print_color">Finger Print Color</label>
                                <input type="float" name="finger_print_color" placeholder="thickness" class="form-control">
                            </div>

                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="paper_thickness">Paper Thickness</label>
                                <input type="float" name="paper_thickness" placeholder="thickness" class="form-control">
                            </div>
                            <div class="col">
                                <label for="glue_points_number">Glue Points Count</label>
                                <select name="glue_points_number" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select> 
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