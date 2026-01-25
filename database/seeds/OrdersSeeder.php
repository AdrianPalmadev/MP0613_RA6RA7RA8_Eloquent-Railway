<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('orders')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'phone' => $faker->phoneNumber,
                'amount' => $faker->randomFloat(2, 500, 5000),
                'address' => $faker->address,
                'status' => $faker->randomElement(['pending', 'processing', 'completed', 'cancelled']),
                'transaction_id' => $faker->unique()->numerify('TXN##########'),
                'currency' => $faker->randomElement(['BDT', 'USD']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
