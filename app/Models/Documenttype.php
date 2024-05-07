<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Documenttype extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='documenttypes';
    protected $fillable=['document_type_name','category_id','package_id','description','status'];
        
    protected $keyType='string';
    protected $casts=['id'=>'string'];
    public $incrementing=false;

    protected static function packages(){
        
    }

    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4()->toString();
            $data->created_by=Auth::user()->id;
            $data->status=1;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function scopeActive($query){
        return $query->where('status','1');
    }

    public function package(){
        return $this->belongsTo(Package::class);
    }
}
