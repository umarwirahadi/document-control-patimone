<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class AttachmentFile extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='attachment_files';
    protected $fillable=['letter_id','document_type_id','file_name','file_link1','file_link2','file_link3','type','description','tags','status'];
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

    public function documentType(){
        return $this->belongsTo(Documenttype::class,'document_type_id');
    }
}
