<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use ipmedt5c\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name'       => 'Zowie van Geest',
                'email'      => 's1097398@student.hsleiden.nl',
                'password'   => Hash::make(env('USER_PASSWORD', 'secret')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'       => 'Bas van Bovene',
                'email'      => 's1096181@student.hsleiden.nl',
                'password'   => Hash::make(env('USER_PASSWORD', 'secret')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
