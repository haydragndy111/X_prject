<?php

namespace App\Http\Controllers;

use App\Models\PaperBox;
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
        dd('here');
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
