<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            
            ItemSeeder::class,
            WorkSeeder::class,
            PositionSeeder::class,
            PackageSeeder::class,
            TypeOfActionSeeder::class, 
            LetterSourceSeeder::class,
            CorrespondenceTypeSeeder::class,
            /*      
            RoleSeeder::class,
            UserSeeder::class,
            
            PermissionSeeder::class,
            */

        ]);


        // \App\Models\User::factory(10)->create();

    }
}
