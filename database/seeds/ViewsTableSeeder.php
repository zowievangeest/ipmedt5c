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

    // seeder voor de views tabel
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
