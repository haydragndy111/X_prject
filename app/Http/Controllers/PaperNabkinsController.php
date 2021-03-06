<?php

namespace App\Http\Controllers;

use App\Models\PaperNabkins;
use App\Models\Product;
use App\Models\File;
use Illuminate\Http\Request;

class PaperNabkinsController extends Controller
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
            'material_colors'=>'required',
            'quantity_per_item'=>'required',
            'layer_number'=>'required',
            'paper_thickness'=>'required',
            'sheets_per_packet'=>'required',
        ]);
        // dd($request);
        $file=new File;
        $product=new Product;
        $paperNabkins=new PaperNabkins;
        
        // phase 1 Product Saving
        $product->product_department=$request->product_department;
        $product->product_class=$request->product_class;
        $product->product_name=$request->product_name;
        $product->model=$request->model;
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

        // phase 3 paperNabkins Saving
        $paperNabkins->product_id=$product->id;
        $paperNabkins->width=$request->width;
        $paperNabkins->height=$request->height;
        $paperNabkins->material_colors=$request->material_colors;
        $paperNabkins->quantity_per_item=$request->quantity_per_item;
        $paperNabkins->layer_number=$request->layer_number;
        $paperNabkins->paper_thickness=$request->paper_thickness;
        $paperNabkins->sheets_per_packet=$request->sheets_per_packet;
        
        $paperNabkins->save();
        dd($paperNabkins);
        // phase 3 Completed
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaperNabkins  $paperNabkins
     * @return \Illuminate\Http\Response
     */
    public function show(PaperNabkins $paperNabkins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaperNabkins  $paperNabkins
     * @return \Illuminate\Http\Response
     */
    public function edit(PaperNabkins $paperNabkins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaperNabkins  $paperNabkins
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaperNabkins $paperNabkins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperNabkins  $paperNabkins
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperNabkins $paperNabkins)
    {
        //
    }
}
