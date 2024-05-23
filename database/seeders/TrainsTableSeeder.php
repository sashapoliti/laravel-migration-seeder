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
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->numberBetween(10000, 99999);
            $new_train->carriages = $faker->numberBetween(1, 20);
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);
            $new_train->save();
        }

        /* $new_train = new Train();
        $new_train->company = 'Trenitalia';
        $new_train->departure_station = 'Milano';
        $new_train->arrival_station = 'Roma';
        $new_train->departure_time = '13:00:00';
        $new_train->arrival_time = '15:00:00';
        $new_train->train_code = 12345;
        $new_train->carriages = 5;
        $new_train->on_time = 1;
        $new_train->cancelled = 0;
        $new_train->save(); */
    }
}
