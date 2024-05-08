<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class LetterSource extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='letter_sources';
    protected $fillable=['source_name','unit','description','package_id','status'];
    protected $keyType = 'string';

    public $incrementing = false;  
    protected $casts = ['id'=>'string'];  

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

    public function scopeActive($query)
    {
        return $query->where('status','1');
        
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }

}
