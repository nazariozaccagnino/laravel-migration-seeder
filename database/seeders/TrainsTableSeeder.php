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
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<7; $i++){
        $new_train = new Train();
        $new_train->company = $faker->company();
        $new_train->start_station = $faker->city();
        $new_train->end_station = $faker->city();
        $new_train->departure = $faker->dateTimeBetween('now', '+1 day');
        $new_train->arrival = $faker->dateTimeBetween('now', '+1 day');
        $new_train->train_number = $faker->randomNumber(4, true);
        $new_train->wagons = $faker->numberBetween(1, 20);
        $new_train->on_time = $faker->numberBetween(0,1);
        $new_train->deleted = $faker->numberBetween(0,1);
        $new_train->save();
        }
        
    }
}
