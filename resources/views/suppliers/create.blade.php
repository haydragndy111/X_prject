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
                <h4 class="content-title mb-0 my-auto">Supplier</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
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
                    <form action="{{route('supplier.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_organization_name" class="control-label">Supplier Organization Name</label>
                                {{-- <input required type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input required type="text" name="supplier_organization_name" class="form-control" placeholder="ORG Name">
                            </div>
                            <div class="col">
                                <label for="supplier_type" class="control-label">Supplier Type</label>
                                <select required name="supplier_type" class="form-control">
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Manufacturer">Manufacturer</option>
                                    <option value="Service Provider">Service Provider</option>
                                    <option value="Distibuter">Distibuter</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="supplier_contact_name" class="control-label">Supplier contact Name</label>
                                <input required type="text" name="supplier_contact_name" class="form-control" placeholder="contact Name">
                            </div>
                            <div class="col">
                                <label for="supplier_contact_name2" class="control-label">Supplier contact Name 2</label>
                                <input required type="text" name="supplier_contact_name2" class="form-control" placeholder="contact Name 2">
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_contact_position" class="control-label">Supplier contact position</label>
                                {{-- <input required type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input required type="text" name="supplier_contact_position" class="form-control" placeholder="contact position">
                            </div>
                            <div class="col">
                                <label for="supplier_contact2_position" class="control-label">Supplier contact position 2</label>
                                {{-- <input required type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input required type="text" name="supplier_contact2_position" class="form-control" placeholder="ORG Name">
                            </div>
                            
                        </div>
                        <br>
                        {{-- 3 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_contact_number" class="control-label">Supplier contact Number</label>
                                <input required type="text" name="supplier_contact_number" class="form-control" placeholder="contact Number">
                            </div>
                            <div class="col">
                                <label for="supplier_contact2_number" class="control-label">Supplier contact Number 2</label>
                                <input required type="text" name="supplier_contact2_number" class="form-control" placeholder="contact Number 2">
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
                                <label for="email" class="control-label">Email</label>
                                <input required type="email" name="email" class="form-control" placeholder="contact Name 2">
                            </div>
                            <div class="col">
                                <label for="supplier_contact_whatsaap" class="control-label">Supplier contact Whatsapp</label>
                                <input required type="text" name="supplier_contact_whatsaap" class="form-control" placeholder="Whatsapp">
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_catelouge" class="control-label">Supplier Cateloge</label>
                                <input required type="text" name="supplier_catelouge" class="form-control" placeholder="Cateloge">
                            </div>
                            <div class="col">
                                <label for="supplier_webSite" class="control-label">Supplier WebSite</label>
                                <input required type="text" name="supplier_webSite" class="form-control" placeholder="WebSite">
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_fixed_quotation1" class="control-label">Supplier fixed quotation 1</label>
                                <input required type="text" name="supplier_fixed_quotation1" class="form-control" placeholder="quotation 1">
                            </div>
                            <div class="col">
                                <label for="supplier_fixed_quotation2" class="control-label">Supplier fixed quotation 2</label>
                                <input required type="text" name="supplier_fixed_quotation2" class="form-control" placeholder="quotation 2">
                            </div>
                        </div>
                        <br>
                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
                                <label for="social_media_accounts" class="control-label">Social Media Accounts</label>
                                <input required type="text" name="social_media_accounts" class="form-control" placeholder="Accounts">
                            </div>
                            <div class="col">
                                <label for="vat_number" class="control-label">VAT Number</label>
                                <input required type="text" name="vat_number" class="form-control" placeholder="VAT Number">
                            </div>
                        </div>
                        <br>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
                                <label for="country" class="control-label">Country</label>
                                <input required type="text" name="country" class="form-control" placeholder="Country">
                            </div>
                            <div class="col">
                                <label for="city" class="control-label">City</label>
                                <input required type="text" name="city" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <br>
                        {{-- 9 --}}
                        <div class="row">
                            <div class="col">
                                <label for="district" class="control-label">District</label>
                                <input required type="text" name="district" class="form-control" placeholder="District">
                            </div>
                            <div class="col">
                                <label for="street" class="control-label">Street</label>
                                <input required type="text" name="street" class="form-control" placeholder="Street">
                            </div>
                            <div class="col">
                                <label for="postal_code" class="control-label">Postal Code</label>
                                <input required type="text" name="postal_code" class="form-control" placeholder="Code">
                            </div>
                        </div>
                        <br>
                        {{-- 10 --}}
                        <div class="row">
                            <div class="col">
                                <label for="building_number" class="control-label">Building Number</label>
                                <input required type="text" name="building_number" class="form-control" placeholder="Number">
                            </div>
                            <div class="col">
                                <label for="secondary_number" class="control-label">Secondary Number</label>
                                <input required type="text" name="secondary_number" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <br>
                        {{-- 10 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_attatchment_CR" class="control-label">Supplier Attatchment C.R</label>
                                <input required type="text" name="supplier_attatchment_CR" class="form-control" placeholder="Attatchment C.R">
                            </div>
                            <div class="col">
                                <label for="supplier_VAT_certificate" class="control-label">Suppier VAT Certificate</label>
                                <input required type="text" name="supplier_VAT_certificate" class="form-control" placeholder="Number">
                            </div>
                        </div>
                        <br>
                        {{-- 11 --}}
                        <div class="row">
                            <div class="col">
                                <label for="supplier_IBAN1" class="control-label">Supplier IBAN1</label>
                                <input required type="text" name="supplier_IBAN1" class="form-control" placeholder="IBAN1">
                            </div>
                            <div class="col">
                                <label for="supplier_IBAN2" class="control-label">Supplier IBAN2</label>
                                <input required type="text" name="supplier_IBAN2" class="form-control" placeholder="IBAN2">
                            </div>
                        </div>
                        <br>
                        {{-- 12 --}}
                        <div class="row">
                            <div class="col">
                                <label for="factory_location" class="control-label">Factory Location</label>
                                <input required type="text" name="factory_location" class="form-control" placeholder="Location">
                            </div>
                            <div class="col">
                                <label for="office_location" class="control-label">Supplier IBAN2</label>
                                <input required type="text" name="office_location" class="form-control" placeholder="Location">
                            </div>
                        </div>
                        <br>
                        {{-- 13 --}}
                        <div class="row">
                            <div class="col">
                                <label for="user_comments" class="control-label">User Comments</label>
                                <textarea class="form-control"name="user_comments" rows="3"></textarea>
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