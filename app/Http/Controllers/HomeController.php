<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use App\Models\Customers;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use DB;

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
        $pend=DB::select('select count(status) as state from customers where status="pending"');
        $success=DB::select('select count(status) as state from customers where status="success"');
        $failed=DB::select('select count(status) as state from customers where status="failed"');
       $marginPer=DB::select('select round(sum(sp)/sum(pp),4)*100 as marginPer , round(sum(sp)/sum(pp),4) as margin , created_at  from projects group by created_at');
        return view('home',compact('pend','success','failed','marginPer'));
    }
    
    public function index()
    {
        $customers=Customers::all();
        $suppliers=Supplier::all();
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
