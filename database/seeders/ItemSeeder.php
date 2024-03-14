<?php

namespace Database\Seeders;
use App\Models\MasterItem;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            ["item_code"=> "engineer","item_name"=>"Engineer","item_category"=>"user-type","item_status"=>1,'created_by'=>1],
            ["item_code"=> "supporting","item_name"=>"Supporting","item_category"=>"user-type","item_status"=>1,'created_by'=>1],
            ["item_code"=> "inspector","item_name"=>"Inspector","item_category"=>"user-type","item_status"=>1,'created_by'=>1]
        ];

            MasterItem::insert($data);
    }
}
