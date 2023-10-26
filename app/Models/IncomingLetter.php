<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class IncomingLetter extends Model
{
    use HasFactory;
    protected $table='incoming_letters';
    protected $fillable=['package_id','incoming_ref_no','incoming_letter_type','date_of_letter','time_of_letter','date_of_receive','time_of_receive','due_date','type_of_receive','subject','references','type_of_action','date_delivered_pm','time_delivered_pm','engineer_assigned','assigned_by','date_distribute','time_distribute','status','notes','description'];
    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4();
            $data->created_by=Auth::user()->id;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function scopeLetterType($query,$param)
    {
        return $query->where('incoming_letter_type',$param)->orderBy('id','desc');
    }

}
