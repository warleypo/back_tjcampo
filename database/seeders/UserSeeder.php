<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Warley Oliveira',
            'email' => 'softwarley@hotmail.com',
            'congregation_id' => 1,
            'permission' => 7,
            'password' => Hash::make('jw1914jw')
        ]);
    }
}
