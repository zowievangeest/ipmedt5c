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
                    'title' => 'STEEP Gameplay Trailer',
                    'url' => 'https://www.youtube.com/watch?v=YGOu-raM25k'
                ],
                [
                    'title' => 'Project Cars launch trailer',
                    'url' => 'https://www.youtube.com/watch?v=nCYq7eiO5X4'
                ],
                [
                    'title' => 'Far Cry Primal – Official Reveal Trailer',
                    'url' => 'https://www.youtube.com/watch?v=LJ2iH57Fs3M'
                ],
                [
                    'title' => 'Watch Dogs - Launch Trailer',
                    'url' => 'https://www.youtube.com/watch?v=e_q-s3QdmU8&oref=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3De_q-s3QdmU8&has_verified=1'
                ],
                [
                    'title' => 'Official Destiny E3 Gameplay Trailer',
                    'url' => 'https://www.youtube.com/watch?v=y2Jx5__c1lY'
                ],
                [
                    'title' => 'Assassin’s Creed Syndicate Debut Trailer',
                    'url' => 'https://www.youtube.com/watch?v=3kGHHMc5dqE'
                ],
                [
                    'title' => 'DiRT Rally - Launch Trailer',
                    'url' => 'https://www.youtube.com/watch?v=E79ofEtVlBg'
                ],
                [
                    'title' => 'Battlefield 4 - E3 2013 Official Trailer',
                    'url' => 'https://www.youtube.com/watch?v=sclTMEd7JN8'
                ],

            ]
        );
    }
}
