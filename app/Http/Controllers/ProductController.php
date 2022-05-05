<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\PaperCup;
use App\Models\PaperBox;
use App\Models\PaperWrap;
use App\Models\PaperNabkins;
use App\Models\CorrugateBox;
use App\Models\PlasticBag;
use App\Models\PlasticCups;
use App\Models\SachelBag;
use App\Models\SosWithoutHandleBag;
use App\Models\HandlePaperBag;
use App\Models\Other;
use App\Models\File;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view ('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('product.create');
    }
    public function create2(Request $request)
    {
        // dd($request);
        $request->validate([
            'type'=>'required',
        ]);
        $type=$request->type;
        // get product type
        $str='product.'.$type.'.create';
        return view ($str,compact('type') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // dd($product);
        // find if other substring contained in string {{{{{{{   others.kapocsjadjs   }}}}}}}
        $pid=$product->id;
        // dd($pid);
        $class=$product->product_class;
        $type=str_replace('_',' ',$class);
        $files=File::where('product_id','=',$pid)->get();
        // dd($files);
        // dd($class);
        switch ($class) {
            case 'paper_cups':
                $paperCup=PaperCup::where('product_id','=',$pid)->first();
                // dd($paperCup);
                return view('product.paper_cups.edit',compact('paperCup','type','files'));
                break;
            case 'paper_boxes':
                $paperBox=PaperBox::where('product_id','=',$pid)->first();
                return view('product.product.paper_cups.edit',compact('paperBox','type','files'));
                break;
            case 'paper_wraps':
                $paperWrap=PaperWrap::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('paper_wraps','type','files'));
                break;
            case 'paper_nabkins':
                $paperNabkin=PaperNabkins::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('paper_nabkins','type','files'));
                break;
            case 'plastic_cups':
                $plasticCup=PlasticCup::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('plasticCup','type','files'));
                break;
            case 'handle_paper_bags':
                $handlePaperBag=HandlePaperBag::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('handlePaperBag','type','files'));
                break;
            case 'sos_without_handle_bags':
                $sosWithoutHandleBag=SosWithoutHandleBag::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('sosWithoutHandleBag','type','files'));
                break;
            case 'plastic_bags':
                $plasticBag=PlasticBag::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('plasticBag','type','files'));
                break;
            case 'sachel_bag':
                $sachelBag=SachelBag::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('sachelBag','type','files'));
                break;
            case 'corrugated_boxes':
                $corrugatedBox=CorrugatedBox::where('product_id','=',$pid)->first();
                return view('product.paper_cups.edit',compact('corrugatedBox','type','files'));
                break;
            case 'others':
                $other=Other::where('product_id','=',$pid)->first();
                return view('product.other.edit',compact('other','type','files'));
                break;
            default:
                # code...
                break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
