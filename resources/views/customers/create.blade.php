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
                <h4 class="content-title mb-0 my-auto">Customer</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
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
                    <form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_organization_name" class="control-label">Supplier Organization Name</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input type="text" name="customer_organization_name" class="form-control" placeholder="ORG Name">
                            </div>
                            <div class="col">
                                <label for="customer_brand_name" class="control-label">Customer Brand Name</label>
                                <input type="text" name="customer_brand_name" class="form-control" placeholder="Brand Name">                                
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_contact_name" class="control-label">Supplier Contact Name</label>
                                <input type="text" name="customer_contact_name" class="form-control" placeholder="Contact Name">
                            </div>
                            <div class="col">
                                <label for="customer_contact_name2" class="control-label">Customer Contact Whatsapp</label>
                                <input type="text" name="customer_contact_name2" class="form-control" placeholder="Whatsapp Link">
                            </div>
                        </div>
                        <br>
                        {{-- 3 --}}
                        <div class="row">
                            <div class="col">
                                <label for="social_media_accouts" class="control-label">Email</label>
                                <input type="text" name="social_media_accouts" class="form-control" placeholder="Accounts Links">
                            </div>
                            <div class="col">
                                <label for="vat_number" class="control-label">VAT Number</label>
                                <input type="text" name="vat_number" class="form-control" placeholder=VAT">
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="coutnry" class="control-label">Country</label>
                                <input type="text" name="coutnry" class="form-control" placeholder=Country">
                            </div>
                            <div class="col">
                                <label for="district" class="control-label">District</label>
                                <input type="text" name="district" class="form-control" placeholder="District">
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="street" class="control-label">Street</label>
                                <input type="text" name="street" class="form-control" placeholder="street">
                            </div>
                            <div class="col">
                                <label for="building_number" class="control-label">Building Number</label>
                                <input type="text" name="building_number" class="form-control" placeholder="Building Number">
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
                                <label for="secondary_number" class="control-label">Secondary Number</label>
                                <input type="text" name="secondary_number" class="form-control" placeholder="Secondary Number">
                            </div>
                            <div class="col">
                                <label for="postal_code" class="control-label">Postal Code</label>
                                <input type="text" name="postal_code" class="form-control" placeholder="Postal Code">
                            </div>
                        </div>
                        <br>
                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_attatchment_C.R" class="control-label">Customer Attatchment C.R ? is this file?</label>
                                <input type="text" name="customer_attatchment_C.R" class="form-control" placeholder="Secondary Number">
                            </div>
                            <div class="col">
                                <label for="customer_VAT_certificate_link" class="control-label">Customer VAT Certificate Link</label>
                                <input type="text" name="customer_VAT_certificate_link" class="form-control" placeholder="Link">
                            </div>
                        </div>
                        <br>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_brand_book" class="control-label">Customer Brand Book</label>
                                <input type="text" name="customer_brand_book" class="form-control" placeholder="Brand Book Link">
                            </div>
                            <div class="col">
                                <label for="customer_product_designs" class="control-label">Customer Product Designs</label>
                                <input type="text" name="customer_product_designs" class="form-control" placeholder="Link">
                            </div>
                        </div>
                        <br>
                        {{-- 9 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_current_designs" class="control-label">Customer Current Designs</label>
                                <input type="text" name="customer_current_designs" class="form-control" placeholder="Link">
                            </div>
                            <div class="col">
                                <label for="color_codes_pantone/CMYK" class="control-label">Customer Codes antone / CMYK</label>
                                <input type="text" name="customer_product_design" class="form-control" placeholder="Link">
                            </div>
                        </div>
                        <br>
                        {{-- 10 --}}
                        <div class="row">
                            <div class="col">
                                <label for="user_Comments" class="control-label">Customer Current Designs</label>
                                <textarea class="form-control" id="exampleTextarea" name="user_Comments" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label for="status" class="control-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="" selected disabled>...</option>
                                    <option value="Suspect">Suspect</option>
                                    <option value="Prospect">Prospect</option>
                                    <option value="Customer">Customer</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        {{-- 11 --}}
                        <div class="row">
                            <div class="col">
                                <label for="customer_IBAN" class="control-label">Customer IBAN</label>
                                <input type="text" name="customer_IBAN" class="form-control" placeholder="IBAN">
                            </div>
                            <div class="col">
                                <label for="delivery_location" class="control-label">Delivery Location</label>
                                <input type="text" name="delivery_location" class="form-control" placeholder="Link">
                            </div>
                        </div>
                        
                        
                        <br>

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