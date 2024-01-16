<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();
        $train->company = 'Treni&Treni';
        $train->departure_station = 'Departure';
        $train->arrival_station = 'Arrival';
        $train->departure_time = '1970-01-01 12:30:20';
        $train->arrival_time = '1970-01-01 13:30:20';
        $train->train_code = 21334;
        $train->carriages_number = 10;
        $train->in_time = true;
        $train->canceled = false;
        // salva nel database
        $train->save();
    }
}
