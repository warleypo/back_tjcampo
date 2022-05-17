<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('managers')->insert([
            [
                'congregation_id' => 1,
                'name' => 'Warley',
            ],
            [
                'congregation_id' => 1,
                'name' => 'José Rodrigues',
            ],
            [
                'congregation_id' => 2,
                'name' => 'Warmulo',
            ],
            [
                'congregation_id' => 2,
                'name' => 'Antônio',
            ],
        ]);
    }
}
