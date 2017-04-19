<?php

namespace ipmedt5c\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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

        $now = Carbon::now();

        $view = View::firstOrCreate([
            'date' => $now,
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('statistics_views')->insert([
            [
                'statistic_id' => $product->statistic_id,
                'view_id' => $view->id
            ],
            [
                'statistic_id' => $product->platform->statistic_id,
                'view_id' => $view->id
            ],
            [
                'statistic_id' => $product->game->statistic_id,
                'view_id' => $view->id
            ]
        ]);

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

        if ($tag_id == 0) {
            $product->tag_id = null;
        } else {
            $product->tag_id = $tag_id;
        }

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
        $products = Product::with('statistics')->get();

        return $products;
    }

    public function productStatistics($id)
    {
        $product = Product::with('statistics')->find($id)->first();

        return $product;
    }
}
