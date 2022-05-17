<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('groups')->insert([
            [
                'congregation_id' => 1,
                'name' => 'Todos',
            ],
            [
                'congregation_id' => 1,
                'name' => 'Grupo 1',
            ],
            [
                'congregation_id' => 2,
                'name' => 'Todos',
            ],
            [
                'congregation_id' => 2,
                'name' => 'Grupo Salão',
            ],
        ]);
    }
}
