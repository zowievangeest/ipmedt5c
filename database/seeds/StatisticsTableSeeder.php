<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatisticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert(
            [
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],
                [
                    'type' => 'game'
                ],

            ]
        );
    }
}
