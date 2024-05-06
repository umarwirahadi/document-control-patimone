<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\TypeOfAction;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class TypeOfActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataTypeOfAction=[
            ["id"=>Uuid::uuid4()->toString(),"type_of_action"=>"Reply to C","description"=>"Give comment, approval, NOO, etc to the Contractor","status"=>1,"created_by"=>"28e4b9c2-7ccd-489f-8507-77677f8ed9bf"],
            ["id"=>Uuid::uuid4()->toString(),"type_of_action"=>"Reply to E","description"=>"Response, Comment and/or recommend to the employer","status"=>1,"created_by"=>"28e4b9c2-7ccd-489f-8507-77677f8ed9bf"],
            ["id"=>Uuid::uuid4()->toString(),"type_of_action"=>"Inform to C","description"=>"Give Information to the Contractor","status"=>0,"created_by"=>"28e4b9c2-7ccd-489f-8507-77677f8ed9bf"],
            ["id"=>Uuid::uuid4()->toString(),"type_of_action"=>"Inform to E","description"=>"Forward information to the Employer","status"=>0,"created_by"=>"28e4b9c2-7ccd-489f-8507-77677f8ed9bf"],
            ["id"=>Uuid::uuid4()->toString(),"type_of_action"=>"No Need Reply","description"=>"No Response is required","status"=>0,"created_by"=>"28e4b9c2-7ccd-489f-8507-77677f8ed9bf"]];


            /* $packages=Package::where("status",1)->get();
            foreach ($packages as $value) {
                foreach ($dataTypeOfAction as $val) {                    
                    $new[]= array_merge($val,["package_id"=>$value->id]);
                    TypeOfAction::insert($new);                            
                }                
            } */
    }
}
