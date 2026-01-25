<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminsTblSeeder extends Seeder
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
            DB::table('admins_tbl')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'contact' => $faker->phoneNumber,
                'nid' => $faker->numerify('##########'),
                'birth_date' => $faker->date('Y-m-d', '-25 years'),
                'photo' => $faker->imageUrl(640, 480, 'people'),
                'password' => Hash::make('password'),
                'admin_status' => $faker->randomElement(['active', 'inactive']),
                'verify_code' => $faker->numerify('######'),
                'email_verify' => $faker->randomElement(['verified', 'pending', null]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
