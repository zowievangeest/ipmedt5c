<?php

namespace ipmedt5c\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ipmedt5c\Age_range;
use ipmedt5c\Game;
use ipmedt5c\Genre;
use ipmedt5c\Platform;
use ipmedt5c\Product;
use ipmedt5c\Publisher;
use ipmedt5c\statistic;
use ipmedt5c\Video;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function import(Request $request)
    {
        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function ($reader) {})->get();

            if (!empty($data) && $data->count()){
                foreach ($data->toArray() as $key => $value) {
                    if(!empty($value)) {
                        foreach ($value as $v) {

                            $age_range = Age_range::firstOrCreate([
                                "begin" => $v['leeftijd'],
                                "end" => 99
                            ]);


                            $publisher = Publisher::firstOrCreate([
                                "publisher" => $v['publisher']
                            ]);


                            $statistics_ids = [];
                            $statistic_types = ['platform', 'game', 'product'];

                            for ($x = 0; $x < count($statistic_types); $x++) {
                                $statistic = statistic::create([
                                    "type" => $statistic_types[$x]
                                ]);

                                array_push($statistics_ids, $statistic->id);
                            }


                            $platform = Platform::firstOrCreate([
                                "name" => $v['platform'],
                                "name_slug" => str_slug($v['platform']),
                                "brand" => $v['platform_brand'],
                                "statistic_id" => $statistics_ids[0]
                            ]);


                            $video = Video::firstOrCreate([
                                "title" => $v['video_title'],
                                "url" => $v['video_url']
                            ]);


                            $genres = explode(',', $v['genres']);
                            $genre_ids = [];

                            for($x = 0; $x < count($genres); $x++) {
                                $genre = Genre::firstOrCreate([
                                    "name" => $genres[$x]
                                ]);

                                array_push($genre_ids, $genre->id);
                            }


                            $game = Game::firstOrCreate([
                                "name" => $v['game_name'],
                                "short_description" => $v['short_description'],
                                "description" => $v['description'],
                                "release_date" => $v['release_date'],
                                "image_url" => $v['cover'],
                                "statistic_id" => $statistics_ids[1],
                                "price" => $v['price'],
                                "publisher_id" => $publisher->id,
                                "video_id" => $video->id,
                                "age_range_id" => $age_range->id
                            ]);


                            for($x = 0; $x < count($genre_ids); $x++) {
                                DB::table('games_genres')->insert([
                                    [
                                        "game_id" => $game->id,
                                        "genre_id" => $genre_ids[$x]
                                    ]
                                ]);
                            }


                            Product::firstOrCreate([
                                "statistic_id" => $statistics_ids[2],
                                "game_id" => $game->id,
                                "platform_id" => $platform->id,
                                "user_id" => 6
                            ]);

                        }
                    }
                }

                return back()->with('success', 'Succesvol toegevoegd');
            }
        }
        return back()->with('error', 'Er ging iets fout');
    }
}
