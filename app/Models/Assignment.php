<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Assignment extends Model
{
    protected $fillable=['engineer_id','position_id','status'];
    protected $keyType='string';
    protected $casts=['id'=>'string'];
    public $incrementing=false;

    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4()->toString();
        });

    }

}
