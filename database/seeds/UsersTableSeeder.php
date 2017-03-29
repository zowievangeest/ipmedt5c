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
            ],
            [
                'name'       => 'Tim Solte',
                'email'      => '1082741@student.hsleiden.nl',
                'password'   => Hash::make(env('USER_PASSWORD', 'secret')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'       => 'Rick van Megen',
                'email'      => '1098012@student.hsleiden.nl',
                'password'   => Hash::make(env('USER_PASSWORD', 'secret')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'       => 'Jessey Fransen',
                'email'      => '1094286@student.hsleiden.nl',
                'password'   => Hash::make(env('USER_PASSWORD', 'secret')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'       => 'Admin',
                'email'      => 'admin@netgame.nl',
                'password'   => Hash::make(env('ADMIN_PASSWORD', 'secret')),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
