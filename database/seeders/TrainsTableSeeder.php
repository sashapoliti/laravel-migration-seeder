<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train = new Train();
        $new_train->company = 'Trenitalia';
        $new_train->departure_station = 'Milano';
        $new_train->arrival_station = 'Roma';
        $new_train->departure_time = '13:00:00';
        $new_train->arrival_time = '15:00:00';
        $new_train->train_code = 12345;
        $new_train->carriages = 5;
        $new_train->on_time = 1;
        $new_train->cancelled = 0;
        $new_train->save();
    }
}
