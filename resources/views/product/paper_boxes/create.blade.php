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
                    <form action="{{route('PaperBox.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">@lang('lang.Product Department')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select required name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">@lang('lang.Packaging')</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
                                <label for="product_name" class="control-label">@lang('lang.product') @lang('lang.Name')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select required name="product_name" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Paper Box Cubica Infercode White">@lang('lang.Paper Box Cubical Infercode White')</option>
                                    <option value="Paper Box Rectangular Duplex White">@lang('lang.Paper Box Rectangular Duplex White')</option>
                                    <option value="Paper Box Drawer Kraft Brown">@lang('lang.Paper Box Drawer Kraft Brown')</option>
                                    <option value="Paper Box Cylinder">@lang('lang.Paper Box Cylinder')</option>
                                    <option value="Paper Box Triangle">@lang('lang.Paper Box Triangle')</option>
                                    
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
<<<<<<< HEAD
                            <div class="col">
                                <label for="model" class="control-label">Model</label>
                                <select required name="model" class="form-control">
=======
                        <div class="col">
                                <label for="model" class="control-label">@lang('lang.Model')</label>
                                <select name="model" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="single wall">@lang('lang.Single Wall')</option>
                                    <option value="double wall">@lang('lang.Double Wall')</option>
                                </select>
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="length">Length</label>
                                <input required type="double" name="length" placeholder="Length" class="form-control">
=======
                                <label for="length">@lang('lang.Length')</label>
                                <input type="double" name="length" placeholder="Length" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        {{-- 3 --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="width">Width</label>
                                <input required type="double" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">Height</label>
                                <input required type="double" name="height" placeholder="height" class="form-control">
=======
                                <label for="width">@lang('lang.White')</label>
                                <input type="double" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">@lang('lang.Height')</label>
                                <input type="double" name="height" placeholder="height" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="product_type" class="control-label">Product Type</label>
                                <select required name="product_type" class="form-control">
=======
                                <label for="product_type" class="control-label">@lang('lang.Product Type')</label>
                                <select name="product_type" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <option value="" selected disabled>...</option>
                                    <option value="Customied">@lang('lang.Customied')</option>
                                    <option value="Standard">@lang('lang.Standard')</option>
                                </select>
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="branding" class="control-label">Branding</label>
                                <select required name="branding" class="form-control">
=======
                                <label for="branding" class="control-label">@lang('lang.Branding')</label>
                                <select name="branding" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
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
                                <textarea required class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
=======
                                <label for="additional_text">@lang('lang.Additional Text')</label>
                                <textarea class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <p class="text-danger">@lang('lang.Upload Only')  ( pdf, jpeg , png ) files</p>
                                <h5 class="card-title">@lang('lang.Files')</h5>
                                <div class="col-sm-12 col-md-12">
                                    <input required type="file" name="files[]" class="form-control" accept="file/*" enctype="multipart/form-data">
                                </div>
                            </div>
                        </div>
                        <br>
                        {{-- Category Section --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="material_type" class="control-label">Material Type</label>
                                <select required name="material_type" class="form-control">
=======
                                <label for="material_type" class="control-label">@lang('lang.Material Type')</label>
                                <select name="material_type" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="kraft">@lang('lang.Kraft')</option>
                                    <option value="Infercode">@lang('lang.Infercode')</option>
                                    <option value="Dupex">@lang('lang.Duplex')</option>
                                </select>
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="material_colors" class="control-label">Material Colors</label>
                                <select required name="material_colors" class="form-control">
=======
                                <label for="material_colors" class="control-label">@lang('lang.Material Colors')</label>
                                <select name="material_colors" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
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
<<<<<<< HEAD
                                <label for="quantity_per_item">Quantity</label>
                                <input required type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="print_type">Print Type</label>
                                <select required name="print_type" class="form-control">
=======
                                <label for="quantity_per_item">@lang('lang.Quantity')</label>
                                <input type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="print_type">@lang('lang.Print Type')</label>
                                <select name="print_type" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Single Face">@lang('lang.Single Face')</option>
                                    <option value="Double Face">@lang('lang.Double Face')</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="effets" class="control-label">Effects</label>
                                <select required name="effects[]"  multiple="multiple" class="form-control">
=======
                                <label for="effets" class="control-label">@lang('lang.Effects')</label>
                                <select name="effects[]"  multiple="multiple" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <option value="" selected disabled >...</option>
                                    <option value="Copper Foil">@lang('lang.Copper Foil')</option>
                                    <option value="Green Foil">@lang('lang.Green Foil')</option>
                                    <option value="Bronze Foil">@lang('lang.Bronze Foil')</option>
                                    <option value="Red Foil">@lang('lang.Red Foil')</option>
                                    <option value="Black Foil">@lang('lang.Black Foil')</option>
                                </select>
                            </div>
                            
                            <div class="col">
<<<<<<< HEAD
                                <label for="uom" class="control-label">UOM</label>
                                <select required name="uom" class="form-conzztrol">
=======
                                <label for="uom" class="control-label">@lang('lang.UOM')</label>
                                <select name="uom" class="form-conzztrol">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="KG">KG</option>
                                    <option value="Ream">Ream</option>
                                </select>
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="capacity">Capacity</label></label>
                                <select required name="capacity" class="form-control">
=======
                                <label for="capacity">@lang('lang.Capacity')</label></label>
                                <select name="capacity" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="gm">gm</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="single_board_height">Single Board Width</label>
                                <input required type="float" name="single_board_height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="single_board_width">Single Board Width</label>
                                <input required type="float" name="single_board_width" placeholder="number" class="form-control">
=======
                                <label for="single_board_height">@lang('lang.Single Board Width')</label>
                                <input type="float" name="single_board_height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="single_board_width">@lang('lang.Single Board Width')</label>
                                <input type="float" name="single_board_width" placeholder="number" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="solovan_layer">Solovan Layer</label>
                                <select required name="solovan_layer" class="form-control">
=======
                                <label for="solovan_layer">@lang('lang.Solovan Layer')</label>
                                <select name="solovan_layer" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Clear">@lang('lang.Clear')</option>
                                    <option value="Shining">@lang('lang.Shining')</option>
                                </select> 
                            </div>                           
                            <div class="col">
<<<<<<< HEAD
                                <label for="uv_layer">UV Layer</label>
                                <select required name="uv_layer" class="form-control">
=======
                                <label for="uv_layer">UV @lang('lang.Layer')</label>
                                <select name="uv_layer" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">@lang('lang.Yes')</option>
                                    <option value="No">@lang('lang.No')</option>
                                </select> 
                            </div>
                            <div class="col">
<<<<<<< HEAD
                                <label for="coverage">Coverage</label>
                                <select required name="coverage" class="form-control">
=======
                                <label for="coverage">@lang('lang.Coverage')</label>
                                <select name="coverage" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
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
<<<<<<< HEAD
                                <label for="paper_thickness">Paper Thickness</label>
                                <input required type="float" name="paper_thickness" placeholder="thickness" class="form-control">
                            </div>
                            <div class="col">
                                <label for="glue_points_number">Glue Points Count</label>
                                <input required type="number" name="glue_points_number" placeholder="count" class="form-control">
=======
                                <label for="paper_thickness">@lang('lang.Paper Thickness')</label>
                                <input type="float" name="paper_thickness" placeholder="thickness" class="form-control">
                            </div>
                            <div class="col">
                                <label for="glue_points_number">@lang('lang.Glue Points Count')</label>
                                <input type="number" name="glue_points_number" placeholder="count" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="window_shape">Window Width</label>
                                <input required type="text" name="window_shape" placeholder="shape" class="form-control">
                            </div>
                            <div class="col">
                                <label for="window_width">Window Width</label>
                                <input required type="float" name="window_width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="window_height">Window Height</label>
                                <input required type="float" name="window_height" placeholder="heighht" class="form-control">
=======
                                <label for="window_shape">@lang('lang.Window Shape')</label>
                                <input type="text" name="window_shape" placeholder="shape" class="form-control">
                            </div>
                            <div class="col">
                                <label for="window_width">@lang('lang.Window Width')</label>
                                <input type="float" name="window_width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="window_height">@lang('lang.Window Heigh')</label>
                                <input type="float" name="window_height" placeholder="heighht" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
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