<?php

namespace App\Http\Controllers;

use App\Models\PaperCup;
use App\Models\Product;
use App\Models\File;
use Illuminate\Http\Request;
use Storage;

use Illuminate\Support\Facades\Log;


class PaperCupController extends Controller
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
        $paperCup=new PaperCup;
        
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

        // phase 3 PaperCup Saving
        $paperCup->product_id=$product->id;
        $paperCup->width=$request->width;
        $paperCup->height=$request->height;
        $paperCup->length=$request->length;
        $paperCup->quantity_per_item=$request->quantity_per_item;
        $paperCup->material_type=$request->material_type ;
        $paperCup->material_colors=$request->material_colors;
        $paperCup->finger_print_color=$request->finger_print_color;
        $paperCup->uom=$request->uom;
        $paperCup->capacity=$request->capacity;
        $paperCup->thickness=$request->thickness;
        $paperCup->effects=$request->input('effects')[0];
        $paperCup->save();
        // dd($paperCup);
        // phase 3 Completed
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaperCup  $paperCup
     * @return \Illuminate\Http\Response
     */
    public function show(PaperCup $paperCup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaperCup  $paperCup
     * @return \Illuminate\Http\Response
     */
    public function edit(PaperCup $paperCup)
    {
        $paperCup=PaperCup::findOrfail($id);
        $product=Product::where([
            'product_id','',$paperCup->product_id
        ]);
        return view('product.paper_cup.edit',compact('paperCup','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaperCup  $paperCup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaperCup $paperCup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaperCup  $paperCup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaperCup $paperCup)
    {
        //
    }
}
