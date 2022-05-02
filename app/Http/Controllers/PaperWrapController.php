<?php

namespace App\Http\Controllers;

use App\Models\PaperWrap;
use App\Models\Product;
use App\Models\File;
use Illuminate\Http\Request;

class PaperWrapController extends Controller
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
            'width'=>'required',
            'height'=>'required',
            'material_type'=>'required',
            'material_colors'=>'required',
            'quantity_per_item'=>'required',
            'paper_thickness'=>'required',
            'item_weight'=>'required',
            'pe_layer'=>'required',
            'merged_layer_thickness'=>'required',
        ]);
        // dd($request);
        $file=new File;
        $product=new Product;
        $paperWrap=new PaperWrap;
        
        // phase 1 Product Saving
        $product->product_department=$request->product_department;
        $product->product_class=$request->product_class;
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

        // phase 3 paperWrap Saving
        $paperWrap->product_id=$product->id;
        $paperWrap->width=$request->width;
        $paperWrap->height=$request->height;
        $paperWrap->material_type=$request->material_type;
        $paperWrap->material_colors=$request->material_colors;
        $paperWrap->quantity_per_item=$request->quantity_per_item;
        $paperWrap->paper_thickness=$request->paper_thickness;
        $paperWrap->item_weight=$request->item_weight;
        $paperWrap->pe_layer=$request->pe_layer;
        $paperWrap->merged_layer_thickness=$request->merged_layer_thickness;
        $paperWrap->save();
        dd($paperWrap);
        // phase 3 Completed
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaperWrap  $paperWrap
     * @return \Illuminate\Http\Response
     */
    public function show(PaperWrap $paperWrap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaperWrap  $paperWrap
     * @return \Illuminate\Http\Response
     */
    public function edit(PaperWrap $paperWrap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaperWrap  $paperWrap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaperWrap $paperWrap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperWrap  $paperWrap
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperWrap $paperWrap)
    {
        //
    }
}
