<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class UserAccess extends Model
{
    use HasFactory;
    protected $table='user_accesses';

    protected $fillable = ['user_id','package_id','level','status','is_active'];
    protected $casts = [
        'id' => 'string'
    ];
    public $incrementing = false;

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
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function package(){
        // return $this->hasMany(Package::class,'id','package_id');
        return $this->belongsTo(Package::class);

    }


}
