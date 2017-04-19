<?php

use Illuminate\Database\Seeder;

class Games_genresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // seeder voor de games_genres tabel
    public function run()
    {
        DB::table('games_genres')->insert(
            [
                [
                    'game_id' => 1,
                    'genre_id' => 5
                ],

                [
                    'game_id' => 2,
                    'genre_id' => 1
                ],

                [
                    'game_id' => 3,
                    'genre_id' => 4
                ],
                [
                    'game_id' => 3,
                    'genre_id' => 3
                ],

                [
                    'game_id' => 4,
                    'genre_id' => 2
                ],
                [
                    'game_id' => 4,
                    'genre_id' => 2
                ],

                [
                    'game_id' => 5,
                    'genre_id' => 6
                ],
                [
                    'game_id' => 5,
                    'genre_id' => 3
                ],

                [
                    'game_id' => 6,
                    'genre_id' => 3
                ],
                [
                    'game_id' => 6,
                    'genre_id' => 4
                ],

                [
                    'game_id' => 7,
                    'genre_id' => 5
                ],

                [
                    'game_id' => 8,
                    'genre_id' => 6
                ],

            ]
        );
    }
}
