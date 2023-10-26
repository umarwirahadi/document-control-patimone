<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Engineer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='engineers';
    protected $fillable=['eng_code','eng_first_name','eng_last_name','eng_phone','eng_email','eng_emil_alternate','eng_status','description','initial','type','photo_profile','dicipline'];
    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->created_by=Auth::user()->id;
            $data->eng_status=1;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }
}
