<?php

use Illuminate\Database\Seeder;

class Statistics_viewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics_views')->insert(
            [
//                [
//                    'statistic_id' => 1,
//                    'view_id' => 1
//                ],
//                [
//                    'statistic_id' => 2,
//                    'view_id' => 2
//                ],

            ]
        );
    }
}
