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
                    <form action="{{route('PlasticBag.update',$plasticBag->id)}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @method('PUT')
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">Product Department</label>
                                {{-- <input value="{{$plastcBag->}}"type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select  name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">Packaging</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
                                <label for="product_name" class="control-label">Product Name</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select  name="product_name" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Plastic Bag T-Shirt HDPE Grey">Plastic Bag T-Shirt HDPE Grey</option>
                                    <option value="Platsic Bag Punched out-LDPE Clear">Platsic Bag Punched out-LDPE Clear</option>
                                    <option value="Plastic Bag With Handle HDPE Red">Plastic Bag With Handle HDPE Red</option>

                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="model" class="control-label">Model</label>
                                <select  name="model" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="T-Shirt">T-Shirt</option>
                                    <option value="Punched-Out">Punched-Out</option>
                                    <option value="With Handle">With Handle</option>
                                    <option value="Without Handle">Without Handle</option>
                                    
                                </select>
                            </div>
                            <div class="col">
                                <label for="bag_thickness">Bag Thickness</label>
                                <input value="{{$plastcBag->bag_thickness}}" type="float" name="bag_thickness" placeholder="thickness" class="form-control">
                            </div>
                            
                        </div>
                        {{-- 3 --}}
                        
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="product_type" class="control-label">Product Type</label>
                                <select  name="product_type" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Customied">Customied</option>
                                    <option value="Standard">Standard</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="branding" class="control-label">Branding</label>
                                <select  name="branding" class="form-control">
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
                                <textarea value="{{$bag_thickness->additional_text}}" class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
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
                                <select  name="material_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="HDPE">HDPE</option>
                                    <option value="LDPE">LDPE</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="material_color" class="control-label">Material Colors</label>
                                <select  name="material_color" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Clear">Clear</option>
                                    <option value="Grey">Grey</option>
                                    <option value="Red">Red</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="base_type" class="control-label">Base Type</label>
                                <select  name="base_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Base">Base</option>
                                    <option value="No Base">No Base</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="quantity_per_item">Quantity Per Item</label>
                                <input value="{{$plastcBag->quantity_per_item}}" type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="quantity_per_tons">Quantity Per Tons</label>
                                <input value="{{$plastcBag->quantity_per_tons}}" type="number" name="quantity_per_tons" placeholder="quantity" class="form-control">
                            </div>
                            
                        </div>
                        
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
                                <label for="width">Width</label>
                                <input value="{{$plastcBag->width}}" type="float" name="width" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">Height</label>
                                <input value="{{$plastcBag->height}}" type="float" name="height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="length">Length</label>
                                <input value="{{$plastcBag->plastcBag}}" type="float" name="length" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="weight">ًWeight</label>
                                <input value="{{$plastcBag->weight}}" type="float" name="weight" placeholder="number" class="form-control">
                            </div>
                            
                        </div>
                        {{-- 7 --}}
                        <br>
                        
                        <div class="row">
                            
                        
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