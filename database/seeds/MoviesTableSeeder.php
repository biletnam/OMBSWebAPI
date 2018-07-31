<?php

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Movie::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'movieName' => $faker->sentence,
                'movieDescription' => $faker->paragraph,
                'moviePrice' => $faker->randomDigit,
                'availableSeats' => $faker->randomDigit,
            ]);
        }
    }
}
