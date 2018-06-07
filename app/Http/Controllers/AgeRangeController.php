<?php

namespace ipmedt5c\Http\Controllers;

use ipmedt5c\Age_range;
use Illuminate\Http\Request;

class AgeRangeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        // Return alle age_range data
        return Age_range::all();
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
     * @param  \ipmedt5c\Age_range  $age_range
     * @return Age_range
     */
    public function show(Age_range $age_range)
    {
        return $age_range;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ipmedt5c\Age_range  $age_range
     * @return \Illuminate\Http\Response
     */
    public function edit(Age_range $age_range)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ipmedt5c\Age_range  $age_range
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Age_range $age_range)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ipmedt5c\Age_range  $age_range
     * @return \Illuminate\Http\Response
     */
    public function destroy(Age_range $age_range)
    {
        //
    }
}
