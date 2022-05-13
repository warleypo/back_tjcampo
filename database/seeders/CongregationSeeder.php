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
            [
                'id' => 1,
                'name' => 'Sul de Janaúba - MG',
            ],
            [
                'id' => 2,
                'name' => 'Norte de Janaúba - MG',
            ],
            [
                'id' => 3,
                'name' => 'Rio Novo de Janaúba - MG',
            ],
        ]);
    }
}
