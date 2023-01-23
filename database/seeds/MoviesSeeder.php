<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Movies;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $newMovie = new Movies();
            $newMovie -> title=$faker ->name();
            $newMovie -> description=$faker ->words(5, true);
            $newMovie -> year=$faker ->year();
            $newMovie ->save();
        }
    }
}
