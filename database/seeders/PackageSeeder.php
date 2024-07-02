<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ["id"=>'fbecdd8f-a431-4c6d-b3db-9d61ee0f8ae9',"package_name"=>"Package 1","total_days"=>"1000","start_date"=>"2018-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["id"=>'92c1e486-5bad-458f-beca-2138c0ed1ea6',"package_name"=>"Package 2","total_days"=>"1000","start_date"=>"2018-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["id"=>'ce2194fd-cf80-41fe-a363-9cb596e48515',"package_name"=>"Package 3","total_days"=>"500","start_date"=>"2019-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["id"=>'e197936d-0279-414e-b718-8797b9a29603',"package_name"=>"Package 4","total_days"=>"0","start_date"=>"2019-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["id"=>'62116337-ba4d-470d-8478-a41c49a9769d',"package_name"=>"Package 5","total_days"=>"1000","start_date"=>"2022-01-01","end_date"=>"2025-12-31","description"=>"CAR TERMINAL CONSTRUCTION","status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["id"=>'26e8083e-e215-47d9-aa67-8bce6b9b5a9e',"package_name"=>"All Package","total_days"=>"0","start_date"=>"2022-01-01","end_date"=>"2025-12-31","description"=>"All Package","status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["id"=>'fbecdd8f-a431-4c6d-b3db-9d61ee0f8ae6',"package_name"=>"Package 6","total_days"=>"1300","start_date"=>"2022-01-01","end_date"=>"2025-12-31","description"=>"CONTAINER TERMINAL NO.2 CONSTRUCTION","status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8']
        ];
        Package::insert($data);
    }
}
