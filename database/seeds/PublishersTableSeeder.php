<?php

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // seeder voor de publishers tabel
    public function run()
    {
        DB::table('publishers')->insert(
            [
                [
                    'publisher' => 'Slightly Mad Studios'
                ],
                [
                    'publisher' => 'Ubisoft'
                ],
                [
                    'publisher' => 'Activison'
                ],
                [
                    'publisher' => 'Codemasters'
                ],
                [
                    'publisher' => 'EA'
                ],

            ]
        );
    }
}
