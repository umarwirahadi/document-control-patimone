<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions=[
        ['position_code'=>'A-01','position_name'=>'Project Director','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-02','position_name'=>'Project Manager 1','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-02.1','position_name'=>'Project Manager 2','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-03','position_name'=>'Marine Structure Engineer 1 (Contrainer Terminal)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-04','position_name'=>'Marine Structure Engineer 2 ( Car Terminal)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-05','position_name'=>'Soil Mechanic Engineer 1','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-06','position_name'=>'Soil Mechanic Engineer-2','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-08','position_name'=>'Electrical Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-09','position_name'=>'Building Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-14','position_name'=>'Port Security Expert (ISPS)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-15','position_name'=>'Financial Expert','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-16','position_name'=>'Senior Coastal Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-17','position_name'=>'Junior Coastal Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-18','position_name'=>'Environmental Expert (Natural)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-19','position_name'=>'Environmental Expert (Social)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-20','position_name'=>'Quality Control (Port)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'A-21','position_name'=>'Safety Special','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B01','position_name'=>'Local Team Leader','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B2.1','position_name'=>'Dredging Engineer 1 (PKG 6)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B2.2','position_name'=>'Dredging Engineer 2','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B03','position_name'=>'Marine Structural Engineer 1','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B04','position_name'=>'Marine Structural Engineer-2','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B05','position_name'=>'Civil Engineer-1 (Reclamation)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B06.1','position_name'=>'Civil Engineer 2 (Yard PKG5)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B06','position_name'=>'Civil Engineer-2 (Reclamation)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B07.1','position_name'=>'Mechanical Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B08.1','position_name'=>'Electrical Engineer HV','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B10.3','position_name'=>'Co-team Leader','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B11','position_name'=>'Construction Planning Expert','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B13','position_name'=>'Survey Expert (Typo-Hydro)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B14','position_name'=>'Geotechnical Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B14.1','position_name'=>'Geotechnical Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B15','position_name'=>'Claim Expert PKG 5 & PKG 6','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B17','position_name'=>'Environmental Expert (Natural)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B18','position_name'=>'Environmental Expert (Social)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B19','position_name'=>'Safety Specialist','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B21','position_name'=>'Quantity Surveyor (Port)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B21.2','position_name'=>'Quantity Surveyor (Port)','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B41','position_name'=>'Reporting Specialist','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B00','position_name'=>'Assistant Engineer','category'=>'Engineer','created_by'=>1],
        ['position_code'=>'B99','position_name'=>'QC Staff','category'=>'Supporting','created_by'=>1],
        ['position_code'=>'C01','position_name'=>'Office manager','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C02','position_name'=>'Billingual Secreatary','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C03','position_name'=>'Billingual Secreatary','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C04','position_name'=>'Document Control','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C05','position_name'=>'Cad operator','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C06','position_name'=>'CAD Operator','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C07','position_name'=>'CAD Operator','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C10','position_name'=>'Office Boy','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C09','position_name'=>'Office Boy','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C11.1','position_name'=>'General Affair Secretary','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C12.1','position_name'=>'Document Controller 1','category'=>'supporting','created_by'=>1],
        ['position_code'=>'C13.1','position_name'=>'Document Controller 2','category'=>'supporting','created_by'=>1]
    ];
        Position::insert($positions);

    }
}
