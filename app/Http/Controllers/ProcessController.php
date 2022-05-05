<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('process.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('process.create');
        
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
        $request->validate([
            'customer_id'=>'required',
            'suppliers_id'=>'required',
            'product_id'=>'required',
            'description'=>'required',
            'Qty'=>'required',
            'SP'=>'required',
            'PP'=>'required',
            'LeadTime'=>'required',
            'tolerance'=>'required',
            'suppier_quotation_validity'=>'required',
            'product_design'=>'required',
            'cliche_die_cut'=>'required',
            'approved_customer_quotation'=>'required',
            'reason_for_rejection'=>'required',
            'supplier_quotation'=>'required',
            'purchase_contract_reference'=>'required',
            'supplier_contract_status'=>'required',
            'supplier_contract_date'=>'required',
            'supplier_PO_rate'=>'required',
            'customer_comments'=>'required',
            'supplier_comments'=>'required',
            'validity_s'=>'required',
            'leadtime_s'=>'required',
            'delivery_handling_s'=>'required',
            'advance_payment_s'=>'required',
            'tolerance_s'=>'required',
            'printing_cost_s'=>'required',
            'validity_c'=>'required',
            'leadtime_c'=>'required',
            'delivery_handling_c'=>'required',
            'advance_payment_c'=>'required',
            'tolerance_c'=>'required',
            'printing_cost_c'=>'required',

        ]);

        Project::create($request->all());
        return redirect ('process');        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $process)
    {
        //
        $pro = Project::find($process->id);
        return view ('process.edit')->with('pro',$pro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $process)
    {
        //
        $request->validate([
            'description'=>'required',
            'Qty'=>'required',
            'SP'=>'required',
            'PP'=>'required',
            'LeadTime'=>'required',
            'tolerance'=>'required',
            'suppier_quotation_validity'=>'required',
            'product_design'=>'required',
            'cliche_die_cut'=>'required',
            'approved_customer_quotation'=>'required',
            'reason_for_rejection'=>'required',
            'supplier_quotation'=>'required',
            'purchase_contract_reference'=>'required',
            'supplier_contract_status'=>'required',
            'supplier_contract_date'=>'required',
            'supplier_PO_rate'=>'required',
            'customer_comments'=>'required',
            'supplier_comments'=>'required',
            'validity_s'=>'required',
            'leadtime_s'=>'required',
            'delivery_handling_s'=>'required',
            'advance_payment_s'=>'required',
            'tolerance_s'=>'required',
            'printing_cost_s'=>'required',
            'validity_c'=>'required',
            'leadtime_c'=>'required',
            'delivery_handling_c'=>'required',
            'advance_payment_c'=>'required',
            'tolerance_c'=>'required',
            'printing_cost_c'=>'required',

        ]);
        $item = Project::findOrFail($process->id);

        $input = $request->all();

        $item->update($input);
        
        return redirect('process');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $process)
    {
        //
        $item = Project::findOrFail($process->id);
        $item->delete();
        return redirect ('process');
    }
}
