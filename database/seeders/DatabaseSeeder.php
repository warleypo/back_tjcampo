<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        if (env('APP_ENV') == 'local') {
            $this->call([
                CongregationSeeder::class,
                ConfigurationSeeder::class,
                UserSeeder::class,
                GroupSeeder::class,
                ManagerSeeder::class,
                FieldSeeder::class,
                CartSeeder::class,
                DesignationSeeder::class,
            ]);
        } else {
            $this->call([
                CongregationSeeder::class,
                ConfigurationSeeder::class,
                UserSeeder::class,
            ]);
        }
    }
}
