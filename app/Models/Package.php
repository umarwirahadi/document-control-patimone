<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Package extends Model
{
    use HasFactory;
    use SoftDeletes;
    

    protected $table='packages';
    protected $fillable=['package_name','total_days','start_date','end_date','description','status'];
    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->created_by=Auth::user()->id;
            $data->status=1;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function scopePackageStatus($query,$param)
    {
        return $query->where('status',$param)->orderBy('id','desc');
        
    }

}
