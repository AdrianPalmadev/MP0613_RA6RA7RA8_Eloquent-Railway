<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTblSeeder::class,
            AdminsTblSeeder::class,
            TrainsTblSeeder::class,
            TicketsTblSeeder::class,
            OrdersSeeder::class,
            PurchasesTblSeeder::class,
            ContactUsTblSeeder::class,
            RefoundsTblSeeder::class,
        ]);
    }
}
