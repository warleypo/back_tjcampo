<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Hashing\Hasher;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('configurations')->insert([
            'congregation_id' => 1,
            'day_midweek' => 3,
            'day_weekend' => 6,
            'visibly' => 1
        ]);
    }
}
