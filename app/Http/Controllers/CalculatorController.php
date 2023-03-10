<?php

namespace App\Http\Controllers;

use App\Models\calculator;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ban = cal::all();
        return view('admin.cal.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cal.calculator');
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
     * @param  \App\Models\calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function show(calculator $calculator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function edit(calculator $calculator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calculator $calculator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calculator  $calculator
     * @return \Illuminate\Http\Response
     */
    public function destroy(calculator $calculator)
    {
        //
    }
}
