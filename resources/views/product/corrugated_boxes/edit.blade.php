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
            <h4 class="content-title mb-0 my-auto">@lang('lang.product') /{{ __('lang.' . $type) }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    @lang('lang.Add a new one')</span>
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
                    <form action="{{route('CorrugatedBox.update',$corrugatedBox->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">@lang('lang.Product Department')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select  name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">@lang('lang.Packaging')</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
<<<<<<< HEAD
                                <label for="product_name" class="control-label">Product Name</label>
                                <input value="{{$corrugatedBox->product_name}}" type="text" class="form-control" id="inputName" name="product_name">
=======
                                <label for="product_name" class="control-label">@lang('lang.product') @lang('lang.Name')</label>
                                <input value="{{$corrugatedBox->product_name}}"type="text" class="form-control" id="inputName" name="product_name">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="length">Length</label>
                                <input value="{{$corrugatedBox->length}}" type="float" name="length" placeholder="Length" class="form-control">
                            </div>
                            <div class="col">
                                <label for="width">Width</label>
                                <input value="{{$corrugatedBox->width}}" type="float" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">Height</label>
                                <input value="{{$corrugatedBox->height}}" type="float" name="height" placeholder="height" class="form-control">
=======
                                <label for="length">@lang('lang.Length')</label>
                                <input value="{{$corrugatedBox->length}}"type="float" name="length" placeholder="Length" class="form-control">
                            </div>
                            <div class="col">
                                <label for="width">@lang('lang.Width')</label>
                                <input value="{{$corrugatedBox->width}}"type="float" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">@lang('lang.Height')</label>
                                <input value="{{$corrugatedBox->height}}"type="float" name="height" placeholder="height" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="product_type" class="control-label">@lang('lang.Product Type')</label>
                                <select name="product_type" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Customied">@lang('lang.Customied')</option>
                                    <option value="Standard">@lang('lang.Standard')</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="branding" class="control-label">@lang('lang.Branding')</label>
                                <select name="branding" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Printing">@lang('lang.Printing')</option>
                                    <option value="Not-Printing">@lang('lang.Not-Printing')</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="additional_text">Additional Text</label>
                                <textarea value="{{$corrugatedBox->additional_text}}" class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
=======
                                <label for="additional_text">@lang('lang.Additional Text')</label>
                                <textarea value="{{$corrugatedBox->additional_text}}" class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <p class="text-danger">@lang('lang.Upload Only') ( pdf, jpeg , png ) files</p>
                                <h5 class="card-title">@lang('lang.Files')</h5>
                                <div class="col-sm-12 col-md-12">
                                    <input  type="file" name="files[]" class="form-control" accept="file/*" enctype="multipart/form-data">
                                </div>
                            </div>
                        </div>
                        <br>
                        {{-- Category Section --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="material_type" class="control-label">@lang('lang.Material Type')</label>
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
                                <label for="material_colors" class="control-label">@lang('lang.Material Colors')</label>
                                <select name="material_colors" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="white">@lang('lang.White')</option>
                                    <option value="brown">@lang('lang.Brown')</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="model" class="control-label">@lang('lang.Model')</label>
                                <select name="model" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Rectangular">@lang('lang.Rectangular')</option>
                                </select>
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="quantity_per_item">Quantity</label>
                                <input value="{{$corrugatedBox->quantity_per_item}}" type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
=======
                                <label for="quantity_per_item">@lang('lang.Quantity')</label>
                                <input value="{{$corrugatedBox->quantity_per_item}}"type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="single_box_height">Single Box Width</label>
                                <input value="{{$corrugatedBox->single_box_height}}" type="float" name="single_box_height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="single_box_width">Single Box Width</label>
                                <input value="{{$corrugatedBox->single_box_width}}" type="float" name="single_box_width" placeholder="number" class="form-control">
=======
                                <label for="single_box_height">@lang('lang.Single Box Width')</label>
                                <input value="{{$corrugatedBox->single_box_height}}"type="float" name="single_box_height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="single_box_width">@lang('lang.Single Box Width')</label>
                                <input value="{{$corrugatedBox->single_box_width}}"type="float" name="single_box_width" placeholder="number" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="solovan_layer">@lang('lang.Solovan Layer')</label>
                                <select name="solovan_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Clear">@lang('lang.Clear')</option>
                                    <option value="Shining">@lang('lang.Shining')</option>
                                </select> 
                            </div>                           
                            <div class="col">
                                <label for="uv_layer">UV @lang('lang.Layer')</label>
                                <select name="uv_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">@lang('lang.Yes')</option>
                                    <option value="No">@lang('lang.No')</option>
                                </select> 
                            </div>
                            <div class="col">
                                <label for="coverage">@lang('lang.Coverage')</label>
                                <select name="coverage" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">@lang('lang.Yes')</option>
                                    <option value="No">@lang('lang.No')</option>
                                </select> 
                            </div>
                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="merged_normal_layer">@lang('lang.Merged Normal Layer')</label>
                                <select name="merged_normal_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">@lang('lang.Yes')</option>
                                    <option value="No">@lang('lang.No')</option>
                                </select> 
                            </div>
                            <div class="col">
                                <label for="finger_print_color">Finger Print Color</label>
                                <input value="{{$corrugatedBox->finger_print_color}}" type="float" name="finger_print_color" placeholder="thickness" class="form-control">
                            </div>

                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="paper_thickness">@lang('lang.Paper Thickness')</label>
                                <input value="{{$corrugatedBox->paper_thickness}}"type="float" name="paper_thickness" placeholder="thickness" class="form-control">
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="glue_points_number">Glue Points Count</label>
                                <select  name="glue_points_number" class="form-control">
=======
                                <label for="glue_points_number">@lang('lang.Glue Points Count')</label>
                                <select name="glue_points_number" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
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
                            <button type="submit" class="btn btn-primary">@lang('lang.Create')</button>
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