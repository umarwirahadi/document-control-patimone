<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class AssignmentLetter extends Model
{
    use HasFactory;
    protected $fillable = ['letter_id','engineer_id','action','priority','status'];
    protected $keyType='string';
    protected $casts=['id'=>'string'];
    public $incrementing=false;
    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4()->toString();
            $data->created_by=Auth::user()->id;           
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function engineer(){
        return $this->belongsTo(Engineer::class,'engineer_id');
    }

    public function hasEngineer(){
        return $this->hasMany(Engineer::class,'engineer_id');
    }


}
