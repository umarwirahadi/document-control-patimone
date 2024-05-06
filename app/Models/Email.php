<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Email extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['engineer_id','email','description','status'];
    protected $casts = [
        'id' => 'string'
    ];
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
        return $this->belongsTo(Engineer::class,'id','engineer_id');
    }
}
