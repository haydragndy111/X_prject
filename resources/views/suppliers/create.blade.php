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
                <h4 class="content-title mb-0 my-auto">@lang('lang.Supplier')</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
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
                    <form action="{{route('supplier.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        {{-- 1 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_organization_name" class="control-label">Supplier Organization Name</label>
                                {{-- <input required type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input required type="text" name="supplier_organization_name" class="form-control" placeholder="ORG Name">
                            </div>
                            <div class="col">
                                <label for="supplier_type" class="control-label">Supplier Type</label>
                                <select required name="supplier_type" class="form-control">
=======
                                <label for="supplier_Organization_Name" class="control-label">@lang('lang.Supplier Organization Name')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input type="text" name="supplier_Organization_Name" class="form-control" placeholder="ORG Name">
                            </div>
                            <div class="col">
                                <label for="supplier_Type" class="control-label">@lang('lang.Supplier Type')</label>
                                <select name="supplier_Type" class="form-control">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                                    <!--placeholder-->
                                    <option value="" selected disabled>...</option>
                                    <option value="Manufacturer">@lang('lang.Manufacturer')</option>
                                    <option value="Service Provider">@lang('lang.Service Provider')</option>
                                    <option value="Distibuter">@lang('lang.Distibuter')</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_contact_name" class="control-label">Supplier contact Name</label>
                                <input required type="text" name="supplier_contact_name" class="form-control" placeholder="contact Name">
                            </div>
                            <div class="col">
                                <label for="supplier_contact_name2" class="control-label">Supplier contact Name 2</label>
                                <input required type="text" name="supplier_contact_name2" class="form-control" placeholder="contact Name 2">
=======
                                <label for="supplier_Contact_Name" class="control-label">@lang('lang.Supplier Contact Name')</label>
                                <input type="text" name="supplier_Contact_Name" class="form-control" placeholder="Contact Name">
                            </div>
                            <div class="col">
                                <label for="supplier_Contact_Name2" class="control-label">@lang('lang.Supplier Contact Name') 2</label>
                                <input type="textsupplier_Contact_Number2" name="supplier_Contact_Name2" class="form-control" placeholder="Contact Name 2">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 2 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_contact_position" class="control-label">Supplier contact position</label>
                                {{-- <input required type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input required type="text" name="supplier_contact_position" class="form-control" placeholder="contact position">
                            </div>
                            <div class="col">
                                <label for="supplier_contact2_position" class="control-label">Supplier contact position 2</label>
                                {{-- <input required type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input required type="text" name="supplier_contact2_position" class="form-control" placeholder="ORG Name">
=======
                                <label for="supplier_Contact_Position" class="control-label">@lang('lang.Supplier Contact Position')</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input type="text" name="supplier_Contact_Position" class="form-control" placeholder="Contact Position">
                            </div>
                            <div class="col">
                                <label for="supplier_Contact_Position2" class="control-label">@lang('lang.Supplier Contact Position') 2</label>
                                {{-- <input type="text" class="form-control" id="inputName" name="product_name"> --}}
                                <input type="text" name="supplier_Contact_Position2" class="form-control" placeholder="ORG Name">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                            
                        </div>
                        <br>
                        {{-- 3 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_contact_number" class="control-label">Supplier contact Number</label>
                                <input required type="text" name="supplier_contact_number" class="form-control" placeholder="contact Number">
                            </div>
                            <div class="col">
                                <label for="supplier_contact2_number" class="control-label">Supplier contact Number 2</label>
                                <input required type="text" name="supplier_contact2_number" class="form-control" placeholder="contact Number 2">
=======
                                <label for="supplier_Contact_Number" class="control-label">@lang('lang.Supplier Contact Number')</label>
                                <input type="text" name="supplier_Contact_Number" class="form-control" placeholder="Contact Number">
                            </div>
                            <div class="col">
                                <label for="supplier_Contact_Number2" class="control-label">@lang('lang.Supplier Contact Number') 2</label>
                                <input type="text" name="supplier_Contact_Number2" class="form-control" placeholder="Contact Number 2">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 4 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="email" class="control-label">Email</label>
                                <input required type="email" name="email" class="form-control" placeholder="contact Name 2">
                            </div>
                            <div class="col">
                                <label for="supplier_contact_whatsaap" class="control-label">Supplier contact Whatsapp</label>
                                <input required type="text" name="supplier_contact_whatsaap" class="form-control" placeholder="Whatsapp">
=======
                                <label for="email" class="control-label">@lang('lang.Email')</label>
                                <input type="email" name="email" class="form-control" placeholder="Contact Name 2">
                            </div>
                            <div class="col">
                                <label for="supplier_Contact_Whatsapp" class="control-label">@lang('lang.Supplier Contact Whatsapp')</label>
                                <input type="text" name="supplier_Contact_Whatsapp" class="form-control" placeholder="Whatsapp">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 5 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_catelouge" class="control-label">Supplier Cateloge</label>
                                <input required type="text" name="supplier_catelouge" class="form-control" placeholder="Cateloge">
                            </div>
                            <div class="col">
                                <label for="supplier_webSite" class="control-label">Supplier WebSite</label>
                                <input required type="text" name="supplier_webSite" class="form-control" placeholder="WebSite">
=======
                                <label for="supplier_Catelouge" class="control-label">@lang('lang.Supplier Cateloge')</label>
                                <input type="text" name="supplier_Catelouge" class="form-control" placeholder="Cateloge">
                            </div>
                            <div class="col">
                                <label for="supplier_WebSite" class="control-label">@lang('lang.Supplier WebSite')</label>
                                <input type="text" name="supplier_WebSite" class="form-control" placeholder="WebSite">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 6 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_fixed_quotation1" class="control-label">Supplier fixed quotation 1</label>
                                <input required type="text" name="supplier_fixed_quotation1" class="form-control" placeholder="quotation 1">
                            </div>
                            <div class="col">
                                <label for="supplier_fixed_quotation2" class="control-label">Supplier fixed quotation 2</label>
                                <input required type="text" name="supplier_fixed_quotation2" class="form-control" placeholder="quotation 2">
=======
                                <label for="supplier_Fixed_Quotation1" class="control-label">@lang('lang.Supplier Fixed Quotation') 1</label>
                                <input type="text" name="supplier_Fixed_Quotation1" class="form-control" placeholder="Quotation 1">
                            </div>
                            <div class="col">
                                <label for="supplier_Fixed_Quotation2" class="control-label">@lang('lang.Supplier Fixed Quotation') 2</label>
                                <input type="text" name="supplier_Fixed_Quotation2" class="form-control" placeholder="Quotation 2">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 7 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="social_media_accounts" class="control-label">Social Media Accounts</label>
                                <input required type="text" name="social_media_accounts" class="form-control" placeholder="Accounts">
                            </div>
                            <div class="col">
                                <label for="vat_number" class="control-label">VAT Number</label>
                                <input required type="text" name="vat_number" class="form-control" placeholder="VAT Number">
=======
                                <label for="social_Media_Accounts" class="control-label">@lang('lang.Social Media Accounts')</label>
                                <input type="text" name="social_Media_Accounts" class="form-control" placeholder="Accounts">
                            </div>
                            <div class="col">
                                <label for="vat_Number" class="control-label">VAT @lang('lang.Number')</label>
                                <input type="text" name="vat_Number" class="form-control" placeholder="VAT Number">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 8 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="country" class="control-label">Country</label>
                                <input required type="text" name="country" class="form-control" placeholder="Country">
                            </div>
                            <div class="col">
                                <label for="city" class="control-label">City</label>
                                <input required type="text" name="city" class="form-control" placeholder="City">
=======
                                <label for="country" class="control-label">@lang('lang.Country')</label>
                                <input type="text" name="country" class="form-control" placeholder="Country">
                            </div>
                            <div class="col">
                                <label for="city" class="control-label">@lang('lang.City')</label>
                                <input type="text" name="city" class="form-control" placeholder="City">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 9 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
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
=======
                                <label for="district" class="control-label">@lang('lang.District')</label>
                                <input type="text" name="district" class="form-control" placeholder="District">
                            </div>
                            <div class="col">
                                <label for="street" class="control-label">@lang('lang.Street')</label>
                                <input type="text" name="street" class="form-control" placeholder="Street">
                            </div>
                            <div class="col">
                                <label for="postal_Code" class="control-label">@lang('lang.Postal Code')</label>
                                <input type="text" name="postal_Code" class="form-control" placeholder="Code">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 10 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="building_number" class="control-label">Building Number</label>
                                <input required type="text" name="building_number" class="form-control" placeholder="Number">
                            </div>
                            <div class="col">
                                <label for="secondary_number" class="control-label">Secondary Number</label>
                                <input required type="text" name="secondary_number" class="form-control" placeholder="Number">
=======
                                <label for="building_Number" class="control-label">@lang('lang.Building Number')</label>
                                <input type="text" name="building_Number" class="form-control" placeholder="Number">
                            </div>
                            <div class="col">
                                <label for="secondary_Number" class="control-label">@lang('lang.Secondary Number')</label>
                                <input type="text" name="secondary_Number" class="form-control" placeholder="Number">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 10 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_attatchment_CR" class="control-label">Supplier Attatchment C.R</label>
                                <input required type="text" name="supplier_attatchment_CR" class="form-control" placeholder="Attatchment C.R">
                            </div>
                            <div class="col">
                                <label for="supplier_VAT_certificate" class="control-label">Suppier VAT Certificate</label>
                                <input required type="text" name="supplier_VAT_certificate" class="form-control" placeholder="Number">
=======
                                <label for="supplier_Attatchment_CR" class="control-label">@lang('lang.Supplier Attatchment') C.R</label>
                                <input type="text" name="supplier_Attatchment_CR" class="form-control" placeholder="Attatchment C.R">
                            </div>
                            <div class="col">
                                <label for="supplier_VAT_Certificate" class="control-label">@lang('lang.Suppier VAT Certificate') </label>
                                <input type="text" name="supplier_VAT_Certificate" class="form-control" placeholder="Number">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 11 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="supplier_IBAN1" class="control-label">Supplier IBAN1</label>
                                <input required type="text" name="supplier_IBAN1" class="form-control" placeholder="IBAN1">
                            </div>
                            <div class="col">
                                <label for="supplier_IBAN2" class="control-label">Supplier IBAN2</label>
                                <input required type="text" name="supplier_IBAN2" class="form-control" placeholder="IBAN2">
=======
                                <label for="supplier_IBAN1" class="control-label">@lang('lang.Supplier') IBAN1</label>
                                <input type="text" name="supplier_IBAN1" class="form-control" placeholder="IBAN1">
                            </div>
                            <div class="col">
                                <label for="supplier_IBAN2" class="control-label">@lang('lang.Supplier')  IBAN2</label>
                                <input type="text" name="supplier_IBAN2" class="form-control" placeholder="IBAN2">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 12 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="factory_location" class="control-label">Factory Location</label>
                                <input required type="text" name="factory_location" class="form-control" placeholder="Location">
                            </div>
                            <div class="col">
                                <label for="office_location" class="control-label">Supplier IBAN2</label>
                                <input required type="text" name="office_location" class="form-control" placeholder="Location">
=======
                                <label for="factory_Location" class="control-label">@lang('lang.Factory Location')</label>
                                <input type="text" name="factory_Location" class="form-control" placeholder="Location">
                            </div>
                            <div class="col">
                                <label for="office_Location" class="control-label">@lang('lang.Supplier')  IBAN2</label>
                                <input type="text" name="office_Location" class="form-control" placeholder="Location">
>>>>>>> 6e52fd35b7ca8e4d9c5af31f8fd42223ba47cd7c
                            </div>
                        </div>
                        <br>
                        {{-- 13 --}}
                        <div class="row">
                            <div class="col">
<<<<<<< HEAD
                                <label for="user_comments" class="control-label">User Comments</label>
                                <textarea class="form-control"name="user_comments" rows="3"></textarea>
=======
                                <label for="user_Comments" class="control-label">@lang('lang.User Comments')</label>
                                <textarea class="form-control"name="user_Comments" rows="3"></textarea>
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