<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;
use DB;

use App\Models\Project;
// use Carbon\Carbon;
class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function index2()
    {
        return view('index');
    }

    public function store(Request $request)
    {
    
        $stock = new Stock([
          'stockName' => $request->get('stockName'),
          'stockPrice' => $request->get('stockPrice'),
          'stockYear' => $request->get('stockYear'),
        ]);
        $stock->save();

        return view('stock');
    }


   public function statusChart()
      {
        // return response()->json($users);
         $users=DB::select('select id, status as state from customers');
        return response()->json($users);
      }

      
    public function chart()
    {
      $result = \DB::table('stocks')
                  ->where('stockName','=','Infosys')
                  ->orderBy('stockYear', 'ASC')
                  ->get();

      return response()->json($result);

    }
    

    public function marginUser()
    {

    $Date = Project::all();
    //totalMargin for each user
    $totalMargin=DB::select('select round(sum(sp)/sum(pp),5) as margin ,customer_id from projects  group by customer_id'); 


    // $month= DB::select('select created_at from projects ');


    $startDate =array();
    $endDate =array();
    $months=array();

    // $newDateTime = Carbon::now()->subDays(5);
    // $x = new stdClass();
    // $collection = collect(['id' => 1, 'name' => 'Hardik']);

    foreach($Date as $dt)
    {
      $monthName = $dt->created_at->format('M');
      $newDate = $dt->created_at->format('d-m-Y');
      array_push($startDate,$newDate);
      $eDate = $dt->created_at->addDays($dt->LeadTime)->format('d-m-Y');
      array_push($endDate,$eDate);
      array_push($months,$monthName);
    }
    
    
    // $type= gettype();
    return response()->json($totalMargin);
    }


    public function marginPer()
    {
       $Date = Project::all();

       //margin%
       $marginPer=DB::select('select (sum(sp)/sum(pp))*100 as marginPer , sum(sp)/sum(pp) as margin , created_at  from projects group by created_at');

       
       return $marginPer;
 
    }

}
