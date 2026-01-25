<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactUsTblSeeder extends Seeder
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
            DB::table('contact_us_tbl')->insert([
                'name' => $faker->name,
                'email' => $faker->safeEmail,
                'message' => $faker->paragraph(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
