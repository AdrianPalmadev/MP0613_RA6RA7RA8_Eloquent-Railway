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
        $stations = ['Dhaka', 'Chittagong', 'Sylhet', 'Rajshahi', 'Khulna', 'Rangpur', 'Comilla', 'Mymensingh'];
        $classes = ['AC', 'AC_B', 'Snigdha', 'S_Chair', 'Shovan'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('purchases_tbl')->insert([
                'user_id' => $faker->numerify('#'),
                'form' => $faker->randomElement($stations),
                'to' => $faker->randomElement($stations),
                'date' => $faker->date('Y-m-d'),
                'class' => $faker->randomElement($classes),
                'train_number' => $faker->numerify('T###'),
                'train_name' => $faker->randomElement(['Suborno Express', 'Parabat Express', 'Mahanagar Express', 'Silk City Express', 'Karnaphuli Express']),
                'seat_number' => $faker->numerify('##'),
                'ticketing_date' => $faker->date('Y-m-d'),
                'ticketing_time' => $faker->time('H:i:s'),
                'tnx_id' => $faker->unique()->numerify('TXN##########'),
                'status' => $faker->randomElement(['confirmed', 'pending', 'cancelled']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
