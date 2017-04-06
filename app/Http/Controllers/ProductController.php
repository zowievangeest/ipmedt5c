<?php

namespace ipmedt5c\Http\Controllers;

use Carbon\Carbon;
use ipmedt5c\Product;
use Illuminate\Http\Request;
use ipmedt5c\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Product::all();
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
     *
     */
    public function show($tag_id)
    {
        $product = Product::where('tag_id', $tag_id)->first();

        $view = new View;
        $view->statistic_id = $product->statistic_id;
        $view->date = Carbon::now();
        $view->save();

        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @param $tag_id
     * @return \Illuminate\Http\Response
     * @internal param Product $product
     */
    public function edit($id, $tag_id)
    {
        $product = Product::find($id);

        $product->tag_id = $tag_id;

        $product->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ipmedt5c\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ipmedt5c\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function productsStatistics()
    {
        $products = Product::with('statistic')->whereHas('statistic', function($query)
        {
            $query->whereBetween('date', [Carbon::now()->subDay(7), Carbon::now()]);
        })->get();

        return $products;
    }

    public function productStatistics($id)
    {
        $product = Product::where('id', $id)->first();

        return $product->statistic;
    }
}
