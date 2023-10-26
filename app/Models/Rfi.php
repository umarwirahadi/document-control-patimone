<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfi extends Model
{
    use HasFactory,Uuids;
    protected $table='data_rfi';
    protected $fillable=['submitted_date','submitted_time','reference_no','doc_number','specification_std','work_id','contractor_notes','contractor_pic','sub_contractor_pic','contractor_engineer','contractor_qa_qc','description','status'];
    

}
