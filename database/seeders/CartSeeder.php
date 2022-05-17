<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carts')->insert([
            [
                'congregation_id' => 1,
                'day_cart' => '2022-05-17',
                'brothers' => 'Warley e Juliana',
            ],
            [
                'congregation_id' => 1,
                'day_cart' => '2022-05-18',
                'brothers' => 'Amanda e Maria',
            ],
            [
                'congregation_id' => 2,
                'day_cart' => '2022-05-17',
                'brothers' => 'Carlos e Beto',
            ],
        ]);
    }
}
