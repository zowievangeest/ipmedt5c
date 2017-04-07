<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'tag_id' => '049fe7a2304c80',
                    'statistic_id' => 9,
                    'game_id' => 1,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],
                [
                    'tag_id' => '04a8e7a2304c80',
                    'statistic_id' => 10,
                    'game_id' => 2,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'tag_id' => '04b0e7a2304c80',
                    'statistic_id' => 11,
                    'game_id' => 3,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],
                [
                    'tag_id' => '04b8e7a2304c80',
                    'statistic_id' => 12,
                    'game_id' => 4,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],
                [
                    'tag_id' => '04c0e7a2304c80',
                    'statistic_id' => 13,
                    'game_id' => 5,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],
                [
                    'tag_id' => '049de6a2304c80',
                    'statistic_id' => 14,
                    'game_id' => 6,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],
                [
                    'tag_id' => '04a5e6a2304c80',
                    'statistic_id' => 15,
                    'game_id' => 7,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],
                [
                    'tag_id' => '04ade6a2304c80',
                    'statistic_id' => 16,
                    'game_id' => 8,
                    'platform_id' => 1,
                    'user_id' => 5,
                ],

            ]
        );
    }
}
