<?php

use Illuminate\Database\Seeder;

class Games_genresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games_genres')->insert(
            [
                [
                    'game_id' => 1,
                    'genre_id' => 1
                ],
            ]
        );
    }
}
