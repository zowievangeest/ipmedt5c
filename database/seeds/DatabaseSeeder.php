<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(PublishersTableSeeder::class);
         $this->call(PlatformsTableSeeder::class);
         $this->call(GenresTableSeeder::class);
         $this->call(VideosTableSeeder::class);
         $this->call(Age_rangesTableSeeder::class);
         $this->call(GamesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(Games_genresTableSeeder::class);
    }
}
