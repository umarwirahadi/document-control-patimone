<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;

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
        ["package_name"=>"Package 1","total_days"=>"1000","start_date"=>"2018-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>1],
        ["package_name"=>"Package 2","total_days"=>"1000","start_date"=>"2018-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>1],
        ["package_name"=>"Package 3","total_days"=>"500","start_date"=>"2019-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>1],
        ["package_name"=>"Package 4","total_days"=>"0","start_date"=>"2019-01-01","end_date"=>"2021-12-31","description"=>"","status"=>0,'created_by'=>1],
        ["package_name"=>"Package 5","total_days"=>"1000","start_date"=>"2022-01-01","end_date"=>"2025-12-31","description"=>"CAR TERMINAL CONSTRUCTION","status"=>1,'created_by'=>1],
        ["package_name"=>"Package 6","total_days"=>"1300","start_date"=>"2022-01-01","end_date"=>"2025-12-31","description"=>"CONTAINER TERMINAL NO.2 CONSTRUCTION","status"=>1,'created_by'=>1]
        ];
        Package::insert($data);
    }
}
