<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // seeder voor de genres tabel
    public function run()
    {
        DB::table('genres')->insert(
            [
                [
                    'name' => 'Extreme Sports',
                ],
                [
                    'name' => 'Third Person Shooter',
                ],
                [
                    'name' => 'Action',
                ],
                [
                    'name' => 'Adventure',
                ],
                [
                    'name' => 'Racing simulation',
                ],
                [
                    'name' => 'First Person Shooter',
                ]
            ]
        );
    }
}
