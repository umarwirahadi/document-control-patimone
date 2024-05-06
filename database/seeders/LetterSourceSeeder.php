<?php

namespace Database\Seeders;

use App\Models\LetterSource;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class LetterSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letterSource=[
            ['id'=>'6fde5d92-13e9-4999-8bb5-0b6c5e8543a7','source_name'=>'PTRPWJ','unit'=>'Contractor Package 6','description'=>'','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'972a2380-6fb3-430f-a464-f8b98bf52a4c','source_name'=>'PMU-P6','unit'=>'Project Management Unit Package 6','description'=>'','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'565a9852-36b1-4531-a3a8-9fb5ed9d4ce0','source_name'=>'KSOP','unit'=>'Kesyahbandaran dan Otoritas Pelabuhan','description'=>'','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'fa78f24c-41ac-4a77-8ac8-bfd502835e7d','source_name'=>'DGST','unit'=>'DGST','description'=>'','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'3be10b2c-2c42-44c2-982c-1f8fe0cdc796','source_name'=>'OTH','unit'=>'Other','description'=>'','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'8f686189-2b28-426d-ae56-cdeebcf0700e','source_name'=>'PMU-P8','unit'=>'Project Management Unit Package 8','description'=>'','package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            
            ['id'=>'8d7438d8-8bef-47ae-b40a-d39e0106e37b','source_name'=>'TWWHA','unit'=>'Contractor Package 5','description'=>'','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'e0582f5d-a621-4141-953d-28002d7dc397','source_name'=>'PMU-P5','unit'=>'Project Management Unit Package 5','description'=>'','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'6858e56f-18c3-40bb-8905-5135d589b63d','source_name'=>'KSOP','unit'=>'Kesyahbandaran dan Otoritas Pelabuhan','description'=>'','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'d6cd9614-27e9-409f-b6d5-715df527a90b','source_name'=>'DGST','unit'=>'DGST','description'=>'','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'8f335f9f-07a0-4f4a-ba08-07faabd0f324','source_name'=>'OTH','unit'=>'Other','description'=>'','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>'2800804c-50ca-4941-95ef-ef18fb399e64','source_name'=>'PMU-P8','unit'=>'Project Management Unit Package 8','description'=>'','package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            
        ];
        LetterSource::insert($letterSource);
    }
}
