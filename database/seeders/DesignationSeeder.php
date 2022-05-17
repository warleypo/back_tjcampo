<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('designations')->insert([
            [
                'congregation_id' => 1,
                'day_start' => '2022-05-16',
                'day_weekend' => '2022-05-21',
            ],
            [
                'congregation_id' => 1,
                'day_start' => '2022-05-23',
                'day_weekend' => '2022-05-28',
            ],
            [
                'congregation_id' => 2,
                'day_start' => '2022-05-16',
                'day_weekend' => '2022-05-21',
            ],
            [
                'congregation_id' => 2,
                'day_start' => '2022-05-23',
                'day_weekend' => '2022-05-28',
            ],
        ]);
    }
}
