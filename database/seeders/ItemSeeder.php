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
            /* ["item_code"=> "engineer","item_name"=>"Engineer","item_category"=>"user-type","item_status"=>1,'created_by'=>1],
            ["item_code"=> "supporting","item_name"=>"Supporting","item_category"=>"user-type","item_status"=>1,'created_by'=>1],
            ["item_code"=> "inspector","item_name"=>"Inspector","item_category"=>"user-type","item_status"=>1,'created_by'=>1], 
            ["item_code"=> "A","item_name"=>"for your Approval","item_category"=>"response-request","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["item_code"=> "B","item_name"=>"for your Information & Record","item_category"=>"response-request","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["item_code"=> "C","item_name"=>"for your Clarification","item_category"=>"response-request","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["item_code"=> "D","item_name"=>"for your Selection","item_category"=>"response-request","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["item_code"=> "E","item_name"=>"for Variation","item_category"=>"response-request","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["item_code"=> "F","item_name"=>"Other (fill manually)","item_category"=>"response-request","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],*/
            ["item_code"=> "email","item_name"=>"email","item_category"=>"receive-letter-by","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ["item_code"=> "hardcopy","item_name"=>"hardcopy","item_category"=>"receive-letter-by","item_status"=>1,'created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
        ];

            MasterItem::insert($data);
    }
}
