<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PurchasesTblSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $classes = ['AC', 'AC_B', 'Snigdha', 'S_Chair', 'Shovan'];
        $trains = DB::table('trains_tbl')->get();

        if ($trains->isEmpty()) {
            return;
        }

        for ($i = 0; $i < 10; $i++) {
            $train = $trains->random();
            DB::table('purchases_tbl')->insert([
                'user_id' => $faker->numerify('#'),
                'form' => $train->origin_station,
                'to' => $train->destination_station,
                 'date' => $faker->dateTimeBetween('+1 days', '+9 days')->format('Y-m-d'),
                'class' => $faker->randomElement($classes),
                'train_number' => $train->train_number,
                'train_name' => $train->train_name,
                'seat_number' => $faker->numerify('##'),
                'ticketing_date' => $faker->date('Y-m-d'),
                'ticketing_time' => $faker->time('H:i:s'),
                'tnx_id' => $faker->unique()->numerify('TXN##########'),
                // Match controller logic: 'no' (pending) or 'Yes' (confirmed)
                'status' => $faker->randomElement(['no', 'Yes']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
