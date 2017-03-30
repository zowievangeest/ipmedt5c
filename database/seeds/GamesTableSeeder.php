<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            [
                [
                    'name' => 'League of Legends',
                    'short_description' => 'league short description',
                    'description' => 'league description',
                    'release_date' => Carbon::create(2009, 10, 27),
                    'price' => 49.99,
                    'publisher_id' => 1,
                    'video_id' => 1,
                    'age_range_id' => 3
                ],
            ]
        );
    }
}
