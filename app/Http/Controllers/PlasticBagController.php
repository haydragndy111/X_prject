<?php

namespace App\Http\Controllers;

use App\Models\PlasticBag;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;

class PlasticBagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            // product section
            'product_department'=>'required',
            'product_reference'=>'required|unique',
            'product_class'=>'required',
            'model='=>'required',
            'product_name'=>'required',
            'additional_text'=>'required',
            'product_type'=>'required',
            'branding'=>'required',
            'files.*'=>'required',
            // cat section
            'material_type'=>'required',
            'material_color'=>'required',
            'bag_thickness'=>'required',
            'width'=>'required',
            'height'=>'required',
            'length'=>'required',
            'weight'=>'required',
            'base_type'=>'required',
            'quantity_per_tons'=>'required',
            'quantity_per_tons'=>'required',
        ]);
        // dd($request);
        $file=new File;
        $product=new Product;
        $plasticBag=new PlasticBag;
        
        // phase 1 Product Saving
        $product->product_department=$request->product_department;
        $product->product_class=$request->product_class;
        $product->model="";
        $product->product_name=$request->product_name;
        $product->additional_text=$request->additional_text;
        $product->product_type=$request->product_type;
        $product->branding=$request->branding;
        $product->save();
        // $pid=$product->id;
        // phase 1 Completed
        

        // phase 2 File saveing
        if($request->has('files')){
            foreach($request->file('files') as $file){
                // dd('here');
                $fileName = 'file-'.time().rand(1,1000).'.'.$file->getClientOriginalExtension();
                $file->move('product_files',$fileName);
                File::create([
                    'product_id'=>$product->id,
                    'file'=>$fileName,
                    'extenstion'=>$file->getClientOriginalExtension()
                ]);
            }
        }

        // dd($request);
        // $url = "http://www.google.co.in/intl/en_com/images/srpr/logo1w.png";
        // $contents = file_get_contents($url);
        // $name = substr($url, strrpos($url, '/') + 1);
        // Storage::put($name, $contents);

        // phase 2 Completed

        // phase 3 plasticBag Saving
        $plasticBag->product_id=$product->id;
        
        $plasticBag->material_type=$request->material_type;
        $plasticBag->material_color=$request->material_color;
        $plasticBag->bag_thickness=$request->bag_thickness;
        $plasticBag->width=$request->width;
        $plasticBag->height=$request->height;
        $plasticBag->length=$request->length;
        $plasticBag->weight=$request->weight;
        $plasticBag->base_type=$request->base_type;
        $plasticBag->quantity_per_tons=$request->quantity_per_tons;
        $plasticBag->quantity_per_tons=$request->quantity_per_tons;
        $plasticBag->save();
        // dd($plasticBag);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlasticBag  $plasticBag
     * @return \Illuminate\Http\Response
     */
    public function show(PlasticBag $plasticBag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlasticBag  $plasticBag
     * @return \Illuminate\Http\Response
     */
    public function edit(PlasticBag $plasticBag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlasticBag  $plasticBag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlasticBag $plasticBag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlasticBag  $plasticBag
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlasticBag $plasticBag)
    {
        //
    }
}
