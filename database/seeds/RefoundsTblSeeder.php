<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RefoundsTblSeeder extends Seeder
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
        $banks = ['Sonali Bank', 'Janata Bank', 'Agrani Bank', 'DBBL', 'Brac Bank', 'EBL'];

        for ($i = 0; $i < 10; $i++) {
            DB::table('refounds_tbl')->insert([
                'bank' => $faker->randomElement($banks),
                'account_no' => $faker->numerify('##########'),
                'form' => $faker->randomElement($stations),
                'to' => $faker->randomElement($stations),
                'train_number' => $faker->numerify('T###'),
                'train_name' => $faker->randomElement(['Suborno Express', 'Parabat Express', 'Mahanagar Express', 'Silk City Express', 'Karnaphuli Express']),
                'seat_number' => $faker->numerify('##'),
                'journey_date' => $faker->date('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
