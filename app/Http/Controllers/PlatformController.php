<?php

namespace ipmedt5c\Http\Controllers;

use Dingo\Api\Http\Response;
use ipmedt5c\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response|static[]
     */
    public function index()
    {
        return Platform::all();
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
     * @param  \ipmedt5c\Platform  $platform
     * @return Platform
     */
    public function show(Platform $platform)
    {
        return $platform;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ipmedt5c\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function edit(Platform $platform)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ipmedt5c\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platform $platform)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ipmedt5c\Platform  $platform
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platform $platform)
    {
        //
    }

    public function platformsStatistics()
    {
        $platforms = Platform::with('statistic')->get();
//        $platforms = Platform::with('statistic')->pluck('statistic')->toArray();

        return $platforms;
    }

    public function platformStatistics($id)
    {
        $platform = Platform::with('statistics')->where('id', $id)->first();

        return $platform;
    }
}
