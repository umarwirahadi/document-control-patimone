<?php

namespace Database\Seeders;

use App\Models\UserAccess;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class UserAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accesses=[
            ['id'=>Uuid::uuid4()->toString(),'user_id'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','level'=>'admin'],
            ['id'=>Uuid::uuid4()->toString(),'user_id'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','level'=>'admin'],
            ['id'=>Uuid::uuid4()->toString(),'user_id'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8','package_id'=>'fbecdd8f-a431-4c6d-b3db-9d61ee0f8ae6','level'=>'admin']
        ];
        UserAccess::insert($accesses);
    }
}
