<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TrainsTblSeeder extends Seeder
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

        for ($i = 0; $i < 10; $i++) {
            DB::table('trains_tbl')->insert([
                'train_number' => $faker->unique()->numerify('T###'),
                'train_name' => $faker->randomElement(['Suborno Express', 'Parabat Express', 'Mahanagar Express', 'Silk City Express', 'Karnaphuli Express']),
                'arrival_station' => $faker->randomElement($stations),
                'destination_station' => $faker->randomElement($stations),
                'arrival_time' => $faker->time('H:i'),
                'destination_time' => $faker->time('H:i'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
