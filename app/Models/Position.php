<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Position extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table='positions';
    protected $fillable=['position_code','position_name','category','description'];

    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->created_by=Auth::user()->id;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

}
