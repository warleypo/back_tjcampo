<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CongregationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('congregations')->insert([
            'id' => 1,
            'name' => 'Sul de Janaúba - MG',
        ]);
    }
}
