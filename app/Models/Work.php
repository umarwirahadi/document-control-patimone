<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Work extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='works';
    protected $fillable=['item_no','pay_item','unit','description','status'];
    protected $keyType='string';
    protected $casts=['id'=>'string'];
    public $incrementing=false;


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
}
