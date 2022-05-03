<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use DB;

class MarginUerController extends Controller
{
    public function marginUserOfProduct($id)
    {
        $p_id=$id;
        // $marginUserProduct=DB::select('select sum(sp) as sp,sum(pp) as pp  from projects where status="success" and  customer_id = ?',[$p_id]);
        // $marginUserProduct=DB::select('select pd.product_Name, round(sum(pj.sp)/sum(pj.pp),4) margin,round(sum(pj.sp)/sum(pj.pp)*100,4) marginPer, pj.customer_id  from projects as pj inner join products as pd on pj.product_id=pd.id  where pj.status="success" and  pj.customer_id=? group by pd.product_Name ',[$p_id]);

        $marginUserProduct= DB::table('projects as pj')
        ->join('products as pd', 'pj.product_id', '=', 'pd.id')
        ->where('pj.status','success')
        ->where('pj.customer_id',$p_id)
        ->select(DB::raw('round(sum(pj.sp)/sum(pj.pp),4) as  margin'),DB::raw('round(sum(pj.sp)/sum(pj.pp)*100,4) marginPer'),'pd.product_Name')
        ->groupBy('pd.product_Name')
        ->get();
     


        // dd($marginUserProduct);
        return view('marginUser' , compact('marginUserProduct'));
    }

    

}
