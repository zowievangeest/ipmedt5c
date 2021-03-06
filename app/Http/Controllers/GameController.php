<?php

namespace ipmedt5c\Http\Controllers;

use Carbon\Carbon;
use ipmedt5c\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Game::all();
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
     * @param  \ipmedt5c\Game  $game
     * @return Game
     */
    public function show(Game $game)
    {
        // return game met meegegeven id
        return $game;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ipmedt5c\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ipmedt5c\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ipmedt5c\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }

    /*
     * Statistieken van alle games
     */
    public function gamesStatistics()
    {
        $games = Game::with('statistics')->get();

        return $games;
    }

    /*
     * Statistieken van een specifieke game,
     * met meegegeven game-id
     */
    public function gameStatistics($id)
    {
        $game = Game::with('statistics')->where('id', $id)->first();

        return $game;
    }
}
