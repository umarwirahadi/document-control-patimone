<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['id'=>Uuid::uuid4()->toString(),'name'=>'dc']);
        Role::create(['id'=>Uuid::uuid4()->toString(),'name'=>'engineer']);
        Role::create(['id'=>Uuid::uuid4()->toString(),'name'=>'user']);
        Role::create(['id'=>Uuid::uuid4()->toString(),'name'=>'admin']);

        $dc1=User::create([
            'id'=>Uuid::uuid4()->toString(),
            'name'=>'document controller P6',
            'email'=>'package6@patimoneconsul.id',
            'password'=>bcrypt('12345678')
        ]);
        $dc1->assignRole('dc');
        /* $dc2=User::create([
            'name'=>'document controller P5',
            'email'=>'package5@patimoneconsul.id',
            'password'=>bcrypt('12345678')
        ]);
        $dc1->assignRole('dc'); */
        

    }
}
