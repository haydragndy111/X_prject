<?php

namespace App\Http\Controllers;

use App\Models\SosWithoutHandleBag;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;

class SosWithoutHandleBagController extends Controller
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
            'material_colors'=>'required',
            'paper_thickness'=>'required',
            'print_type'=>'required',
            'quantity_per_item'=>'required',
            'quantity_per_tons'=>'required',
            'base_width'=>'required',
            'base_height'=>'required',
            'bag_width'=>'required',
            'bag_height'=>'required',
            'effects'=>'required',
        ]);
        // dd($request);
        $file=new File;
        $product=new Product;
        $sosWithoutHandleBag=new SosWithoutHandleBag;
        
        // phase 1 Product Saving
        $product->product_department=$request->product_department;
        $product->product_class=$request->product_class;
        $product->model=$request->model;
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

        // phase 3 sosWithoutHandleBag Saving
        $sosWithoutHandleBag->product_id=$product->id;
        $sosWithoutHandleBag->material_colors=$request->material_colors;
        $sosWithoutHandleBag->paper_thickness=$request->paper_thickness;
        $sosWithoutHandleBag->print_type=$request->print_type;
        $sosWithoutHandleBag->quantity_per_item=$request->quantity_per_item;
        $sosWithoutHandleBag->quantity_per_tons=$request->quantity_per_tons;
        $sosWithoutHandleBag->base_width=$request->base_width;
        $sosWithoutHandleBag->base_height=$request->base_height;
        $sosWithoutHandleBag->bag_width=$request->bag_width;
        $sosWithoutHandleBag->bag_height=$request->bag_height;
        $sosWithoutHandleBag->effects=$request->effects[0];
        $sosWithoutHandleBag->save();
        // dd($sosWithoutHandleBag);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SosWithoutHandleBag  $sosWithoutHandleBag
     * @return \Illuminate\Http\Response
     */
    public function show(SosWithoutHandleBag $sosWithoutHandleBag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SosWithoutHandleBag  $sosWithoutHandleBag
     * @return \Illuminate\Http\Response
     */
    public function edit(SosWithoutHandleBag $sosWithoutHandleBag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SosWithoutHandleBag  $sosWithoutHandleBag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SosWithoutHandleBag $sosWithoutHandleBag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SosWithoutHandleBag  $sosWithoutHandleBag
     * @return \Illuminate\Http\Response
     */
    public function destroy(SosWithoutHandleBag $sosWithoutHandleBag)
    {
        //
    }
}
