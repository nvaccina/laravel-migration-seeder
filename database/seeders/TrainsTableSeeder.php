<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->word();
            $new_train->departure_station = $faker->sentence();
            $new_train->arrival_station = $faker->sentence();
            $new_train->departure_time = $faker->date() . ' - ' . $faker->time();
            $new_train->arrival_time = $faker->date() . ' - ' . $faker->time();
            $new_train->train_code = $faker->numberBetween(1000, 10000);
            $new_train->n_carriages = $faker->numberBetween(10, 20);
            $new_train->in_time = $faker->boolean();
            $new_train->deleted = $faker->boolean();

            $new_train->save();
        }
    }
}
