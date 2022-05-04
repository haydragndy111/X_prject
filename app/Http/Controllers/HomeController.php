<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Models\Project;
use DB;
use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $mytime = Carbon::now();
        $currentDate=$mytime->format('d-m-Y');;

        $marginPer=DB::select('select round(sum(sp)/sum(pp),4)*100 as marginPer , round(sum(sp)/sum(pp),4) as margin , created_at  from projects where  status="success" group by created_at');
        $earn=DB::select('select sum(sp) as sp ,sum(pp) as pp  from projects where status="success"');
        $prouductPending=DB::select('select count(*) as count  from projects where status="pending"');
        $prouductSuccess=DB::select('select count(*) as count  from projects where status="success"');
        $prouductFailed=DB::select('select count(*) as count  from projects where status="failed"');

      //    $todayEarn=DB::select('select sum(sp) as sp ,sum(pp) as pp  from projects where created_at = ?',[$currentDate]);

       
        // dd($prouductFailed);
        return view('home',compact('marginPer','earn','prouductPending','prouductSuccess','prouductFailed'));
    }

    public function index()
    {
        $customers=Customers::all();
        $suppliers=Supplier::all();
        // dd($customers);
        return view ('home.index',compact('customers','suppliers'));
    }

    function fetch(Request $request){
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('country_state_city')
        ->where($select, $value)
        ->groupBy($dependent)
        ->get();
        $output = '<option value="">Select '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
        $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }
}
