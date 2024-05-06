<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=DB::table('users')->insert(['id'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8','name'=>'Umar Wirahadi','email'=>'admin@localhost.com','password'=>Hash::make('12345678')]);
        
    }
}
