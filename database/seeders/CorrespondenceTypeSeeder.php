<?php

namespace Database\Seeders;

use App\Models\CorrespondenceType;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class CorrespondenceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $correspondenceType=[
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'L to DGST','content_template'=>'PTRPWJ/PTBP6/DGST/YY/L-NO','description'=>'Letter to DGST','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'L to ENGR','content_template'=>'PTRPWJ/PTBP6/ENGR/YY/L-NO','description'=>'Letter to Engineer','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'L to KSOP','content_template'=>'PTRPWJ/PTBP6/OTH/YY/L-NO','description'=>'Letter to KSOP','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'L to OTH','content_template'=>'PTRPWJ/PTBP6/OTH/YY/L-NO','description'=>'Letter to Other','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'T','content_template'=>'PTRPWJ/PTBP6/ENGR/YY/T-NO','description'=>'Document Transmittal','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'RFCI','content_template'=>'PTRPWJ/PTBP6/RFCI/NO','description'=>'Request for Clarification/Information','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'CRPN','content_template'=>'PTBP6/ENGR/CRPN/NO','description'=>'Contractors Response to Particular Notice','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'1e9fd856-6e81-470c-9835-c70ec9e69a6c','to_attention'=>'PatimOne Consul','correspondence_type'=>'CRSI','content_template'=>'PTBP6/ENGR/CRSI/NO','description'=>'Contractor Response to Site Instruction','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],

            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'CLR','content_template'=>'TWWHA-PTBP5/CLR/NO','description'=>'CLR','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'RFCI','content_template'=>'TWWHA-PTBP5-RFCI-NO','description'=>'RFCI','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'CRPN','content_template'=>'PTBP5/ENGR/CRPN/NO','description'=>'CRPN','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'CRSI','content_template'=>'PTBP5/ENGR/CRSI/NO','description'=>'CRSI','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'CRNCR','content_template'=>'PTBP5/ENGR/CRNCR/NO','description'=>'CRNCR','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PMU-P5','correspondence_type'=>'L to PMU-P5','content_template'=>'TWWHA-PTBP5/DGST/YY/L-NO','description'=>'letter to PMU P5','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'L to ENGR','content_template'=>'TWWHA-PTBP5/ENGR/YY/L-NO','description'=>'Letter to Engineer','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'KSOP','correspondence_type'=>'L to KSOP','content_template'=>'TWWHA-PTBP5/KSOP/YY/L-NO','description'=>'Letter to KSOP','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'fill manually','correspondence_type'=>'L to OTH','content_template'=>'TWWHA-PTBP5/OTH/YY/L-NO','description'=>'Letter to KSOP','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'T','content_template'=>'TWWHA-PTBP5/ENGR/YY/T-NO','description'=>'Transmittal document','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'TWWHA','correspondence_type'=>'L to TWWHA','content_template'=>'N/A','description'=>'Letter to the Contractor','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'KSOP','correspondence_type'=>'WPR to KSOP','content_template'=>'TWWHA/PTBP5/KSOP/WPR-NO','description'=>'Weekly progress report to KSOP','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'PMU-P5 to ENGR','content_template'=>'fill manually','description'=>'PMU to Engineer','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
            ['id'=>Uuid::uuid4()->toString(),'package_id'=>'62116337-ba4d-470d-8478-a41c49a9769d','to_attention'=>'PatimOne Consul','correspondence_type'=>'T to PMU-P5','content_template'=>'TWWHA-PTBP5/DGST/YY/T-NO','description'=>'Letter to the Contractor','type'=>'IN','status'=>'1','created_by'=>'f46d2647-0ad1-448e-b800-a88e080c9fb8'],
        ];
        CorrespondenceType::insert($correspondenceType);
    }
}
