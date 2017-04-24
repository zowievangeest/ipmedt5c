<?php

namespace ipmedt5c\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ipmedt5c\Age_range;
use ipmedt5c\Events\NotificationEvent;
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


    /*
     *  Check voor file vanuit input met naam "import_file"
     *  Excel data uitlezen
     *  Checken of er data aanwezig is
     *  voor elke waarde in de row wordt er gekeken of deze waarde al bestaat
     *  zo niet wordt de waarde toegevoegd aan de database
     *  bestaat deze wel wordt het betreffende id opgeslagen
     *  zo ontstaat er nooit dubbele data
     */

    /**
     * @param Request $request
     * @return array
     */
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


                            $platform = Platform::firstOrCreate([
                                "name" => $v['platform'],
                                "name_slug" => str_slug($v['platform']),
                                "brand" => $v['platform_brand'],
                            ]);
                            if (is_null($platform->statistic_id))
                            {
                                $statistic = $this->createStatistic("platform");
                                $platform->statistic_id = $statistic->id;
                                $platform->save();
                            }


                            $video = Video::firstOrCreate([
                                "title" => $v['video_title'],
                                "url" => $v['video_url']
                            ]);


                            $genres = explode(',', $v['genres']);
                            $genre_ids = [];

                            // voor elke genre wordt er een firstOrCreate uitgevoerd
                            for($x = 0; $x < count($genres); $x++) {
                                $genre = Genre::firstOrCreate([
                                    "name" => $genres[$x]
                                ]);

                                array_push($genre_ids, $genre->id);
                            }

                            // de game wordt toegevoegd aan de database
                            $game = Game::firstOrCreate([
                                "name" => $v['game_name'],
                                "short_description" => $v['short_description'],
                                "description" => $v['description'],
                                "release_date" => $v['release_date'],
                                "image_url" => $v['cover'],
                                "price" => $v['price'],
                                "publisher_id" => $publisher->id,
                                "video_id" => $video->id,
                                "age_range_id" => $age_range->id
                            ]);
                            if (is_null($game->statistic_id))
                            {
                                $statistic = $this->createStatistic("game");
                                $game->statistic_id = $statistic->id;
                                $game->save();
                            }


                            for($x = 0; $x < count($genre_ids); $x++) {
                                DB::table('games_genres')->insert([
                                    [
                                        "game_id" => $game->id,
                                        "genre_id" => $genre_ids[$x]
                                    ]
                                ]);
                            }

                            // Het product wordt toegevoegd aan de database
                            $product = Product::firstOrCreate([
                                "game_id" => $game->id,
                                "platform_id" => $platform->id,
                                "user_id" => 6
                            ]);
                            if (is_null($product->statistic_id))
                            {
                                $statistic = $this->createStatistic("product");
                                $product->statistic_id = $statistic->id;
                                $product->save();
                            }

                        }
                    }
                }
                //notification aanmaken
                $type = "success";
                $message = "De producten zijn toegevoegd";
                $source = "import";

                event(new NotificationEvent($type, $message, $source));

                // bericht succesvol wordt teruggegeven
                return ['success' => 'De producten zijn toegevoegd'];
            }
        }
        //notification aanmaken
        $type = "error";
        $message = "De producten zijn niet toegevoegd";
        $source = "import";

        event(new NotificationEvent($type, $message, $source));

        // bericht error wordt teruggegeven
        return ['error' => 'Er ging iets mis'];
    }


    public function createStatistic($type) {
        $statistic = statistic::create([
            "type" => $type
        ]);

        return $statistic;
    }
}
