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
                    'tag_id' => 123,
                    'game_id' => 1,
                    'platform_id' => 4,
                    'user_id' => 1
                ]
            ]
        );
    }
}
