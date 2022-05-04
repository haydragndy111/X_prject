<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=Customers::all();
        return view ('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_organization_name'=>'required',
            'customer_brand_name'=>'required',
            'customer_contact_name'=>'required',
            'customer_contact_whatsaap'=>'required',
            'customer_contact_number'=>'required',
            'customer_contact_number2'=>'required',
            'email'=>'required',
            'website'=>'required',
            'social_media_accounts'=>'required',
            'vat_number'=>'required',
            'country'=>'required',
            'city'=>'required',
            'district'=>'required',
            'street'=>'required',
            'building_number'=>'required',
            'secondary_number'=>'required',
            'postal_code'=>'required',
            'customer_attachement_CR'=>'required',
            'customer_VAT_certificate'=>'required',
            'customer_brand_book'=>'required',
            'customer_product_designs'=>'required',
            'customer_current_products'=>'required',
            'color_codes_pantone'=>'required',
            'user_Comments'=>'required',
            'status'=>'required',
            'customer_IBAN'=>'required',
            'delivery_location'=>'required',
        ]);

        Customers::create($request->all());
        dd('done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {
        //
    }
}
