<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->company = 'Italo';
        $new_train->start_station = 'Milano Centrale';
        $new_train->end_station = 'Torino PN';
        $new_train->departure = '2024-05-24 12:00:00';
        $new_train->arrival = '2024-05-24 13:30:00';
        $new_train->train_number = 8870;
        $new_train->wagons = 8;
        $new_train->on_time = 1;
        $new_train->deleted = 0;
        $new_train->save();
    }
}
