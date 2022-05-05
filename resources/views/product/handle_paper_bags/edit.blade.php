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
                < <h4 class="content-title mb-0 my-auto">@lang('lang.product') /{{ __('lang.' . $type) }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
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
                    <form action="{{route('HandlePaperBag.update',$handlePaperBag->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
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
                                <label for="product_name" class="control-label">@lang('lang.product') @lang('lang.Name')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select  name="product_name" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Paper Bag With Twisted Handle Kraft White">@lang('lang.Paper Bag With Twisted Handle Kraft White')</option>
                                    <option value="Paper Bag With Flat Handle Kraft Brown">@lang('lang.Paper Bag Rectangular Duplex White')</option>

                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="model" class="control-label">Handle Model</label>
                                <select  name="model" class="form-control">
=======
                                <label for="model" class="control-label">@lang('lang.Handle Model')</label>
                                <select name="model" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Without Handle">@lang('lang.Without Handle')</option>
                                    <option value="Without Handle & Base">@lang('lang.Without Handle & Base')</option>
                                    
                                </select>
                            </div>
                            
                        </div>
                        {{-- 3 --}}
                        
                        <br>
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="product_type" class="control-label">Product Type</label>
                                <select  name="product_type" class="form-control">
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
                                <select  name="branding" class="form-control">
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
                                <textarea value="{{$handlePaperBag->additional_text}}" class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
=======
                                <label for="additional_text">@lang('lang.Additional Text')</label>
                                <textarea value="{{$handlePaperBag->additional_text}}" class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <p class="text-danger">@lang('lang.Upload Only') ( pdf, jpeg , png ) files</p>
                                <h5 class="card-title">Files</h5>
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
<<<<<<< HEAD
                                <label for="material_colors" class="control-label">Material Colors</label>
                                <select  name="material_colors" class="form-control">
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
                                <label for="quantity_per_item">Quantity Per Item</label>
                                <input value="{{$handlePaperBag->}}" type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="quantity_per_tons">Quantity Per Tons</label>
                                <input value="{{$handlePaperBag->}}" type="number" name="quantity_per_tons" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="print_type">Print Type</label>
                                <select  name="print_type" class="form-control">
=======
                                <label for="quantity_per_item">@lang('lang.Quantity Per Item')</label>
                                <input value="{{$handlePaperBag->}}"type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="quantity_per_tons">@lang('lang.Quantity Per Tons')</label>
                                <input value="{{$handlePaperBag->}}"type="number" name="quantity_per_tons" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="print_type">@lang('lang.Print Type')</label>
                                <select name="print_type" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Full">@lang('lang.Full')</option>
                                    <option value="Partial">@lang('lang.Partial')</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
<<<<<<< HEAD
                            {{-- <div class="col"> --}}
                                <label for="effets" class="">Effects</label>
                                <div  name="effects[]" class="form-group">
=======
                            <div class="col">
<<<<<<< HEAD
                                <label for="effets" class="control-label">@lang('lang.Effects')</label>
                                <select name="effects[]"  multiple="multiple" class="form-control">
                                    <option value="" selected disabled >...</option>
                                    <option value="Embossed">@lang('lang.Embossed')</option>
                                    <option value="Debossed">@lang('lang.Debossed')</option>
                                    <option value="Matt Laminated">@lang('lang.Matt Laminated')</option>
                                    <option value="Glossy Laminated">@lang('lang.Glossy Laminated')</option>
                                    
=======
                                <label for="effets" class="control-label">Effects</label>
                                <div name="effects[]" class="form-group">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <label><input type="checkbox" name="effects[]">Embossed</label>
									<label><input type="checkbox" name="effects[]">Debossed</label>
									<label><input type="checkbox" name="effects[]">Matt Laminated</label>
									<label><input type="checkbox" name="effects[]">Glossy Laminated</label>									
									{{-- <option value="" selected disabled >...</option>
                                    <option value="Embossed">Embossed</option>
                                    <option value="Debossed">Debossed</option>
                                    <option value="Matt Laminated">Matt Laminated</option>
<<<<<<< HEAD
                                    <option value="Glossy Laminated">Glossy Laminated</option> --}}

                                {{-- </select> --}}
=======
                                    <option value="Glossy Laminated">Glossy Laminated</option>
                                     -->
>>>>>>> 8587b0b8ab27e4fb3873c50260e799fea2948a31
                                </select>
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="base_width">Base Width</label>
                                <input value="{{$handlePaperBag}}" type="float" name="base_width" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="base_height">Base Height</label>
                                <input value="{{$handlePaperBag}}" type="float" name="base_height" placeholder="number" class="form-control">
=======
                                <label for="base_width">@lang('lang.Base Width')</label>
                                <input value="{{$handlePaperBag}}"type="float" name="base_width" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="base_height">@lang('lang.Base Height')</label>
                                <input value="{{$handlePaperBag}}"type="float" name="base_height" placeholder="number" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        {{-- 7 --}}
                        <br>
                        
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="paper_thickness">Paper Thickness</label>
                                <input value="{{$handlePaperBag}}" type="float" name="paper_thickness" placeholder="thickness" class="form-control">
=======
                                <label for="paper_thickness">@lang('lang.Paper Thickness')</label>
                                <input value="{{$handlePaperBag}}"type="float" name="paper_thickness" placeholder="thickness" class="form-control">
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