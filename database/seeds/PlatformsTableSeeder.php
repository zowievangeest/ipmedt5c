<?php

use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // seeder voor de platforms tabel
    public function run()
    {
        DB::table('platforms')->insert(
            [
                [
                    'name' => 'PS4',
                    'name_slug' => str_slug('Playstation 4'),
                    'brand' => 'Sony',
                    'statistic_id' => 17
                ],
                [
                    'name' => 'PS3',
                    'name_slug' => str_slug('Playstation 3'),
                    'brand' => 'Sony',
                    'statistic_id' => 18
                ],
                [
                    'name' => 'Xbox One',
                    'name_slug' => str_slug('Xbox One'),
                    'brand' => 'Microsoft',
                    'statistic_id' => 19
                ],
                [
                    'name' => 'Xbox 360',
                    'name_slug' => str_slug('Xbox 360'),
                    'brand' => 'Microsoft',
                    'statistic_id' => 20
                ],
                [
                    'name' => 'Switch',
                    'name_slug' => str_slug('Nintendo Switch'),
                    'brand' => 'Nintendo',
                    'statistic_id' => 21
                ],
                [
                    'name' => 'PC',
                    'name_slug' => str_slug('PC'),
                    'brand' => 'Microsoft',
                    'statistic_id' => 22
                ]
            ]
        );
    }
}