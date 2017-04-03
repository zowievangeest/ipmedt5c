<?php

use Illuminate\Database\Seeder;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert(
            [
                [
                    'name' => 'PS4',
                    'name_slug' => str_slug('Playstation 4'),
                    'brand' => 'Sony'
                ],
                [
                    'name' => 'PS3',
                    'name_slug' => str_slug('Playstation 3'),
                    'brand' => 'Sony'
                ],
                [
                    'name' => 'Xbox One',
                    'name_slug' => str_slug('Xbox One'),
                    'brand' => 'Microsoft'
                ],
                [
                    'name' => 'Xbox 360',
                    'name_slug' => str_slug('Xbox 360'),
                    'brand' => 'Microsoft'
                ],
                [
                    'name' => 'Switch',
                    'name_slug' => str_slug('Nintendo Switch'),
                    'brand' => 'Nintendo'
                ],
                [
                    'name' => 'PC',
                    'name_slug' => str_slug('PC'),
                    'brand' => 'Microsoft'
                ]
            ]
        );
    }
}