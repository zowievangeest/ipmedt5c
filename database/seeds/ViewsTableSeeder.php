<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('views')->insert(
            [
//                [
//                    'date' => Carbon::now()
//                ],
//                [
//                    'date' => Carbon::now()->subDay(1)
//                ],

            ]
        );
    }
}
