<?php

namespace App\Http\Controllers;

use App\Models\PaperBox;
use App\Models\Product;
use App\Models\File;
use Illuminate\Http\Request;

class PaperBoxController extends Controller
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
            'product_department'=>'required',
            'product_reference'=>'required|unique',
            'product_class'=>'required',
            'model='=>'required',
            'product_name'=>'required',
            'additional_text'=>'required',
            'product_type'=>'required',
            'branding'=>'required',
            'files.*'=>'required',
            'material_type'=>'required',
            'material_colors'=>'required',
            'paper_thickness'=>'required',
            'model'=>'required',
            'width'=>'required',
            'height'=>'required',
            'length'=>'required',
            'print_type'=>'required',
            'quantity_per_it'=>'required',
            'single_board_wi'=>'required',
            'single_board_he'=>'required',
            'solovan_layer=$'=>'required',
            'uv_layer'=>'required',
            'coverage'=>'required',
            'uom'=>'required',
            'capacity'=>'required',
            'effects'=>'required',
            'glue_points_num'=>'required',
            'window_shape'=>'required',
            'window_width'=>'required',
            'window_height'=>'required',
        ]);
        // dd($request);
        $file=new File;
        $product=new Product;
        $paperBox=new PaperBox;
        
        // phase 1 Product Saving
        $product->product_department=$request->product_department;
        $product->product_reference=$request->product_reference;
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

        // phase 3 paperBox Saving
        $paperBox->product_id=$product->id;
        $paperBox->material_type=$request->material_type ;
        $paperBox->material_colors=$request->material_colors;
        $paperBox->paper_thickness=$request->paper_thickness;
        $paperBox->model=$request->model;
        $paperBox->width=$request->width;
        $paperBox->height=$request->height;
        $paperBox->length=$request->length;
        $paperBox->print_type=$request->print_type;
        $paperBox->quantity_per_item=$request->quantity_per_item;
        $paperBox->single_board_width=$request->single_board_width;
        $paperBox->single_board_height=$request->single_board_height;
        $paperBox->solovan_layer=$request->solovan_layer;
        $paperBox->uv_layer=$request->uv_layer;
        $paperBox->coverage=$request->coverage;
        $paperBox->uom=$request->uom;
        $paperBox->capacity=$request->capacity;
        $paperBox->effects=$request->effects[0];
        $paperBox->glue_points_number=$request->glue_points_number;
        $paperBox->window_shape=$request->window_shape;
        $paperBox->window_width=$request->window_width;
        $paperBox->window_height=$request->window_height;
        $paperBox->save();
        // dd($paperBox);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaperBox  $paperBox
     * @return \Illuminate\Http\Response
     */
    public function show(PaperBox $paperBox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaperBox  $paperBox
     * @return \Illuminate\Http\Response
     */
    public function edit(PaperBox $paperBox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaperBox  $paperBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaperBox $paperBox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperBox  $paperBox
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperBox $paperBox)
    {
        //
    }
}
