<?php

namespace ipmedt5c\Http\Controllers;

use Carbon\Carbon;
use ipmedt5c\Platform;
use ipmedt5c\statistic;
use Illuminate\Http\Request;
use ipmedt5c\View;

class StatisticController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \ipmedt5c\statistic  $statistics
     * @return \Illuminate\Http\Response
     */
    public function show(statistic $statistics)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ipmedt5c\statistic  $statistics
     * @return \Illuminate\Http\Response
     */
    public function edit(statistic $statistics)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ipmedt5c\statistic  $statistics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, statistic $statistics)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ipmedt5c\statistic  $statistics
     * @return \Illuminate\Http\Response
     */
    public function destroy(statistic $statistics)
    {
        //
    }


    public function general()
    {
        return View::whereBetween('date', [Carbon::now()->subDay(7), Carbon::now()])->get();
    }

}
