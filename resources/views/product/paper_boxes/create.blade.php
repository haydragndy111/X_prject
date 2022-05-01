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
                    <form action="{{route('PaperCup.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">@lang('lang.Product Department')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">@lang('lang.Packaging')</option>
                                    <option value="Design Service">@lang('lang.Design Service')</option>
                                    <option value="Logistics Service">@lang('lang.Logistics Service')</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
                                <label for="product_name" class="control-label">@lang('lang.product') @lang('lang.Name')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select name="product_name" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="paper_cup_single_wall">@lang('lang.Paper Cup Single Wall')</option>
                                    <option value="paper_cup_double_wall">@lang('lang.Paper Cup Double Wall')</option>
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
                                <label for="model" class="control-label">@lang('lang.Model')</label>
                                <select name="model" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="single wall">@lang('lang.Single Wall')</option>
                                    <option value="double wall">@lang('lang.Double Wall')</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="length">@lang('lang.Length')</label>
                                <input type="double" name="length" placeholder="Length" class="form-control">
                            </div>
                        </div>
                        {{-- 3 --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="width">@lang('lang.White')</label>
                                <input type="double" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">@lang('lang.Height')</label>
                                <input type="double" name="height" placeholder="height" class="form-control">
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
                                <label for="additional_text">@lang('lang.Additional Text')</label>
                                <textarea class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <p class="text-danger">@lang('lang.Upload Only')  ( pdf, jpeg , png ) files</p>
                                <h5 class="card-title">@lang('lang.Files')</h5>
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
                                <label for="material_type" class="control-label">@lang('lang.Material Type')</label>
                                <select name="material_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="kraft">@lang('lang.Kraft')</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="material_color" class="control-label">@lang('lang.Material Colors')</label>
                                <select name="material_color" class="form-control">
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
                                <label for="quantity_per_item">@lang('lang.Quantity')</label>
                                <input type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="finger_print_color">@lang('lang.Finger Print Color')</label>
                                <input type="text" name="finger_print_color" placeholder="color" class="form-control">
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="effets" class="control-label">@lang('lang.Effects')</label>
                                <select name="effects[]" multiple='multiple' class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="gold foil">@lang('lang.Gold Foil')</option>
                                    <option value="silver foil">@lang('lang.Silver Foil')</option>
                                </select>
                            </div>
                            
                            <div class="col">
                                <label for="uom" class="control-label">@lang('lang.UOM')</label>
                                <select name="uom" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="pcs">Pcs</option>
                                    <option value="ctn">Ctn</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
                                <label for="size">@lang('lang.Size')</label>
                                <input type="varchar" name="size" placeholder="size" class="form-control">
                            </div>
                            <div class="col">
                                <label for="thickness">@lang('lang.Thickness')</label>
                                <input type="double" name="thickness" placeholder="thickness" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="capacity">@lang('lang.Capacity')</label>
                                <input type="number" name="capacity" placeholder="size" class="form-control">
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