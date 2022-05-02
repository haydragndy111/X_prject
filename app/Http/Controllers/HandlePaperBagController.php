<?php

namespace App\Http\Controllers;

use App\Models\HandlePaperBag;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;

class HandlePaperBagController extends Controller
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
            'quantity_per_to'=>'required',
            'quantity_per_to'=>'required',
            'base_width'=>'required',
            'base_height'=>'required',
            'effects'=>'required',
        ]);
        // dd($request);
        $file=new File;
        $product=new Product;
        $handlePaperBag=new HandlePaperBag;
        
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

        // phase 3 handlePaperBag Saving
        $handlePaperBag->product_id=$product->id;
        $handlePaperBag->material_colors=$request->material_colors;
        $handlePaperBag->paper_thickness=$request->paper_thickness;
        $handlePaperBag->print_type=$request->print_type;
        $handlePaperBag->quantity_per_tons=$request->quantity_per_tons;
        $handlePaperBag->quantity_per_tons=$request->quantity_per_tons;
        $handlePaperBag->base_width=$request->base_width;
        $handlePaperBag->base_height=$request->base_height;
        $handlePaperBag->effects=$request->effects[0];
        $handlePaperBag->save();
        // dd($handlePaperBag);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HandlePaperBag  $handlePaperBag
     * @return \Illuminate\Http\Response
     */
    public function show(HandlePaperBag $handlePaperBag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HandlePaperBag  $handlePaperBag
     * @return \Illuminate\Http\Response
     */
    public function edit(HandlePaperBag $handlePaperBag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HandlePaperBag  $handlePaperBag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HandlePaperBag $handlePaperBag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HandlePaperBag  $handlePaperBag
     * @return \Illuminate\Http\Response
     */
    public function destroy(HandlePaperBag $handlePaperBag)
    {
        //
    }
}
