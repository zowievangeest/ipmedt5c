<?php

use Illuminate\Database\Seeder;

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
                    'game_id' => 1,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 2,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 3,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 4,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 5,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 6,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 7,
                    'platform_id' => 1,
                    'user_id' => 5
                ],
                [
                    'game_id' => 8,
                    'platform_id' => 1,
                    'user_id' => 5
                ],

            ]
        );
    }
}
