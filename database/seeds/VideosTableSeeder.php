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
                    'url' => 'https://www.youtube.com/embed/IzMnCv_lPxI'
                ],
            ]
        );
    }
}
