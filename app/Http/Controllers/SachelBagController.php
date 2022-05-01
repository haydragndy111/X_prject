<?php

namespace App\Http\Controllers;

use App\Models\SachelBag;
use App\Models\File;
use App\Models\Product;
use Illuminate\Http\Request;

class SachelBagController extends Controller
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
        // dd($request);
        $file=new File;
        $product=new Product;
        $sachelBag=new SachelBag;
        
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

        // phase 3 sachelBag Saving
        $sachelBag->product_id=$product->id;
        
        $sachelBag->material_type=$request->material_type;
        $sachelBag->material_color=$request->material_color;
        $sachelBag->paper_thickness=$request->paper_thickness;
        $sachelBag->width=$request->width;
        $sachelBag->height=$request->height;
        $sachelBag->gusset=$request->gusset;
        $sachelBag->print_type=$request->print_type;
        $sachelBag->pe_layer=$request->pe_layer;
        $sachelBag->pe_layer_thickness=$request->pe_layer_thickness;
        $sachelBag->quantity_per_tons=$request->quantity_per_tons;
        $sachelBag->quantity_per_tons=$request->quantity_per_tons;
        $sachelBag->save();
        // dd($sachelBag);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SachelBag  $sachelBag
     * @return \Illuminate\Http\Response
     */
    public function show(SachelBag $sachelBag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SachelBag  $sachelBag
     * @return \Illuminate\Http\Response
     */
    public function edit(SachelBag $sachelBag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SachelBag  $sachelBag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SachelBag $sachelBag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SachelBag  $sachelBag
     * @return \Illuminate\Http\Response
     */
    public function destroy(SachelBag $sachelBag)
    {
        //
    }
}
