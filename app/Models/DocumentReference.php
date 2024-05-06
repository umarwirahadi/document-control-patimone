<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class DocumentReference extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='document_references';
    protected $fillable=['letter_id','letter_id_reference','reference_number','source','subject','package_id','document_type','tags','description','status'];
    protected $keyType='string';
    protected $casts=['id'=>'string'];
    public $incrementing=false;
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
}
