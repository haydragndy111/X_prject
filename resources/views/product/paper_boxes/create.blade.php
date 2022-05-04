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
                    <form action="{{route('PaperBox.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="product_department" class="control-label">Product Department</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select required name="product_department" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Packaging">Packaging</option>
                                </select>
                            </div>
                            <input type="text" name="product_class" value="{{$type}}" class="form-control" hidden>
                            <div class="col">
                                <label for="product_name" class="control-label">Product Name</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <select required name="product_name" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Paper Box Cubica Infercode White">Paper Box Cubical Infercode White</option>
                                    <option value="Paper Box Rectangular Duplex White">Paper Box Rectangular Duplex White</option>
                                    <option value="Paper Box Drawer Kraft Brown">Paper Box Drawer Kraft Brown</option>
                                    <option value="Paper Box Cylinder">Paper Box Cylinder</option>
                                    <option value="Paper Box Triangle">Paper Box Triangle</option>
                                    
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="model" class="control-label">Model</label>
                                <select required name="model" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="single wall">Single Wall</option>
                                    <option value="double wall">Double Wall</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="length">Length</label>
                                <input required type="double" name="length" placeholder="Length" class="form-control">
                            </div>
                        </div>
                        {{-- 3 --}}
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="width">Width</label>
                                <input required type="double" name="width" placeholder="width" class="form-control">
                            </div>
                            <div class="col">
                                <label for="height">Height</label>
                                <input required type="double" name="height" placeholder="height" class="form-control">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="product_type" class="control-label">Product Type</label>
                                <select required name="product_type" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Customied">Customied</option>
                                    <option value="Standard">Standard</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="branding" class="control-label">Branding</label>
                                <select required name="branding" class="form-control">
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
                                <textarea required class="form-control" id="exampleTextarea" name="additional_text" rows="3"></textarea>
                            </div>
                        </div>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <p class="text-danger">Upload Only ( pdf, jpeg , png ) files</p>
                                <h5 class="card-title">Files</h5>
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
                                <label for="material_type" class="control-label">Material Type</label>
                                <select required name="material_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="kraft">Kraft</option>
                                    <option value="Infercode">Infercode</option>
                                    <option value="Dupex">Duplex</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="material_colors" class="control-label">Material Colors</label>
                                <select required name="material_colors" class="form-control">
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
                                <label for="quantity_per_item">Quantity</label>
                                <input required type="number" name="quantity_per_item" placeholder="quantity" class="form-control">
                            </div>
                            <div class="col">
                                <label for="print_type">Print Type</label>
                                <select required name="print_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Single Face">Single Face</option>
                                    <option value="Double Face">Double Face</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="effets" class="control-label">Effects</label>
                                <select required name="effects[]"  multiple="multiple" class="form-control">
                                    <option value="" selected disabled >...</option>
                                    <option value="Copper Foil">Copper Foil</option>
                                    <option value="Green Foil">Green Foil</option>
                                    <option value="Bronze Foil">Bronze Foil</option>
                                    <option value="Red Foil">Red Foil</option>
                                    <option value="Black Foil">Black Foil</option>
                                </select>
                            </div>
                            
                            <div class="col">
                                <label for="uom" class="control-label">UOM</label>
                                <select required name="uom" class="form-conzztrol">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="KG">KG</option>
                                    <option value="Ream">Ream</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="capacity">Capacity</label></label>
                                <select required name="capacity" class="form-control">
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
                                <label for="single_board_height">Single Board Width</label>
                                <input required type="float" name="single_board_height" placeholder="number" class="form-control">
                            </div>
                            <div class="col">
                                <label for="single_board_width">Single Board Width</label>
                                <input required type="float" name="single_board_width" placeholder="number" class="form-control">
                            </div>
                            
                        </div>
                        {{-- 7 --}}
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="solovan_layer">Solovan Layer</label>
                                <select required name="solovan_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select> 
                            </div>                           
                            <div class="col">
                                <label for="uv_layer">UV Layer</label>
                                <select required name="uv_layer" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select> 
                            </div>
                            <div class="col">
                                <label for="coverage">Coverage</label>
                                <select required name="coverage" class="form-control">
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
                                <label for="paper_thickness">Paper Thickness</label>
                                <input required type="float" name="paper_thickness" placeholder="thickness" class="form-control">
                            </div>
                            <div class="col">
                                <label for="glue_points_number">Glue Points Count</label>
                                <input required type="number" name="glue_points_number" placeholder="count" class="form-control">
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col">
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