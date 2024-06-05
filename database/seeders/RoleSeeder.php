<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles=[
            ['id'=>Uuid::uuid4()->toString(),'name'=>'admin','guard_name'=>'web'],
            ['id'=>Uuid::uuid4()->toString(),'name'=>'document-control','guard_name'=>'web'],
            ['id'=>Uuid::uuid4()->toString(),'name'=>'engineer','guard_name'=>'web'],
            ['id'=>Uuid::uuid4()->toString(),'name'=>'inspector','guard_name'=>'web'],
            ['id'=>Uuid::uuid4()->toString(),'name'=>'contractor','guard_name'=>'web'],
            ['id'=>Uuid::uuid4()->toString(),'name'=>'guest','guard_name'=>'web']
        ];
        Role::insert($roles);
    }
}
