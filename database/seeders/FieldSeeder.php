<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fields')->insert([
            [
                'congregation_id' => 1,
                'group_id' => 1,
                'manager_id' => 1,
                'horary' => '18:45:00',
                'local' => 'Salão do Reino',
                'day_field' => '2022-05-16',
            ],
            [
                'congregation_id' => 1,
                'group_id' => 2,
                'manager_id' => 2,
                'horary' => '09:00:00',
                'local' => 'Zoom',
                'day_field' => '2022-05-17',
            ],
            [
                'congregation_id' => 2,
                'group_id' => 3,
                'manager_id' => 3,
                'horary' => '18:45:00',
                'local' => 'Salão do Reino',
                'day_field' => '2022-05-16',
            ],
            [
                'congregation_id' => 2,
                'group_id' => 4,
                'manager_id' => 4,
                'horary' => '09:00:00',
                'local' => 'Zoom',
                'day_field' => '2022-05-17',
            ],
        ]);
    }
}
