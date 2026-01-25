<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TicketsTblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $stations = ['Dhaka', 'Chittagong', 'Sylhet', 'Rajshahi', 'Khulna', 'Rangpur', 'Comilla', 'Mymensingh'];
        $classes = ['AC', 'AC_B', 'Snigdha', 'S_Chair', 'Shovan'];
        $trains = DB::table('trains_tbl')->get();

        for ($i = 0; $i < 30; $i++) {
            // Pick a real train from trains_tbl so ticket fields match
            $train = $trains->random();
            DB::table('tickets_tbl')->insert([
                'date' => $faker->dateTimeBetween('+1 days', '+9 days')->format('Y-m-d'),
                'train_number' => $train->train_number,
                'train_name' => $train->train_name,
                'origin_station' => $train->origin_station,
                'destination_station' => $train->destination_station,
                'origin_time' => $train->origin_time,
                'destination_time' => $train->destination_time,
                'class' => $faker->randomElement($classes),
                'seat_no' => $faker->numerify('##'),
                'price' => $faker->randomFloat(2, 300, 3000),
                'booking_user' => $faker->randomElement([null, $faker->numerify('#')]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
