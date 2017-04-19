<?php

use Illuminate\Database\Seeder;

class Age_rangesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // seeder voor de age_range tabel
    public function run()
    {
        DB::table('age_ranges')->insert(
            [
                [
                    'begin' => 3,
                    'end' => 99
                ],
                [
                    'begin' => 7,
                    'end' => 99
                ],
                [
                    'begin' => 12,
                    'end' => 99
                ],
                [
                    'begin' => 16,
                    'end' => 99
                ],
                [
                    'begin' => 18,
                    'end' => 99
                ]
            ]
        );
    }
}
