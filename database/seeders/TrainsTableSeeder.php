<?php

namespace Database\Seeders;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // CREAZIONE DATO SPECIFICO
        // $train = new Train();
        // $train->company = 'Treni&Treni';
        // $train->departure_station = 'Departure';
        // $train->arrival_station = 'Arrival';
        // $train->departure_time = '2023-01-01 12:30:20';
        // $train->arrival_time = '2023-01-01 13:30:20';
        // $train->current_date = '2024-01-16 15:00:00';
        // $train->train_code = 21334;
        // $train->carriages_number = 10;
        // $train->in_time = true;
        // $train->canceled = false;
        // // salva nel database
        // $train->save();

        for ($i = 0; $i < 1000; $i++) {
            $departureStartDate = $faker->dateTimeThisYear();

            $train = new Train();
            $train->company = $faker->word();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();

            $train->departure_time = $departureStartDate->format('Y-m-d H:i:s');

            $arrivalEndDate = $faker->dateTimeBetween($departureStartDate, 'now +1 year');
            $train->arrival_time = $arrivalEndDate->format('Y-m-d H:i:s');

            $currentDateTime = Carbon::now();
            $train->current_date = $currentDateTime->format('Y-m-d');
            $train->train_code = $faker->numberBetween(10000, 99999);
            $train->carriages_number = $faker->numberBetween(1, 30);
            $train->in_time = $faker->boolean();
            $train->canceled = $faker->boolean();
            // salva nel database
            $train->save();
        }
    }
}
