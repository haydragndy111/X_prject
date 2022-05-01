<?php

namespace App\Http\Controllers;

use App\Models\PlasticCups;
use App\Models\Product;
use App\Models\File;
use Illuminate\Http\Request;
use Storage;

class PlasticCupsController extends Controller
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
        $file=new File;
        $product=new Product;
        $plasticCup=new PlasticCups;
        
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
                $fileName = 'file-'.time().rand(1,1000).'.'.$file->getClientOriginalExtension();
                $file->move('product_files',$fileName);
                File::create([
                    'product_id'=>$product->id,
                    'file'=>$fileName,
                    'extenstion'=>$file->getClientOriginalExtension()
                ]);
            }
        }

        // $url = "http://www.google.co.in/intl/en_com/images/srpr/logo1w.png";
        // $contents = file_get_contents($url);
        // $name = substr($url, strrpos($url, '/') + 1);
        // Storage::put($name, $contents);

        // phase 2 Completed

        // phase 3 plasticCup Saving
        $plasticCup->product_id=$product->id;
        $plasticCup->width=$request->width;
        $plasticCup->height=$request->height;
        $plasticCup->length=$request->length;
        $plasticCup->quantity_per_item=$request->quantity_per_item;
        $plasticCup->material_type=$request->material_type ;
        $plasticCup->material_color=$request->material_color;
        $plasticCup->effects=$request->effects[0];
        $plasticCup->save();
        dd($plasticCup);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlasticCups  $plasticCups
     * @return \Illuminate\Http\Response
     */
    public function show(PlasticCups $plasticCups)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlasticCups  $plasticCups
     * @return \Illuminate\Http\Response
     */
    public function edit(PlasticCups $plasticCups)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlasticCups  $plasticCups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlasticCups $plasticCups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlasticCups  $plasticCups
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlasticCups $plasticCups)
    {
        //
    }
}
