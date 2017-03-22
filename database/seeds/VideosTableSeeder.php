<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert(
            [
                [
                    'title' => 'Welcome to League of Legends',
                    'url' => 'https://www.youtube.com/watch?v=IzMnCv_lPxI'
                ],
            ]
        );
    }
}
