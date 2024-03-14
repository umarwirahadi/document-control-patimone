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
        $user=DB::table('users')->insert(['name'=>'Umar Wirahadi','email'=>'admin@localhost.com','password'=>Hash::make('12345678')]);

    }
}
