<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Engineer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='engineers';
    protected $fillable=['code','full_name','nickname','initial','type','photo_profile','dicipline','phone1','phone2','status','description'];

    
    protected $keyType='string';
    protected $casts=['id'=>'string'];
    public $incrementing=false;


    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4()->toString();
            $data->created_by=Auth::user()->id;
            $data->code=111;
            $data->status=1;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function scopeEngineer($query){
        return $query->where('type', 'engineer')->where('status','1');
    }

    public function scopeInspector($query){
        return $query->where('type', 'inspector')->where('status','1');
    }

    public function scopeWithPositionAssignment($query){
        return $query->leftjoin('assignments','engineers.id','=','assignments.engineer_id')->leftjoin('positions','positions.id','=','assignments.position_id')
                ->addSelect('engineers.id as id','assignments.id as assignment_id', 'engineers.full_name as full_name', 'engineers.nickname as nickname', 'engineers.initial as initial', 'engineers.type as type', 'engineers.phone1 as phone1', 'engineers.status as status', 'positions.position_code as position_code', 'positions.position_name as position_name');
                // ->where('engineers.type','=','engineer');
    }

    public function email(){
        return $this->hasMany(Email::class,'engineer_id')->where('status',1)->select(['id','email','status']);
    }    

}
