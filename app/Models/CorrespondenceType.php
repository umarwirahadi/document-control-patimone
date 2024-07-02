<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class CorrespondenceType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='correspondence_types';
    protected $casts = [
        'id' => 'string'
    ];

    protected $fillable=['corres_type','description','content_template','type','letter_source_id','package_id','to_attention','status'];

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

    public function package(){
        return $this->belongsTo(Package::class);
    }
    public function scopeCorrespondenceTypeStatus($query,$param)
    {
        return $query->where('status',$param)->orderBy('created_at','desc');

    }
    public function scopeActive($query)
    {
        return $query->where('status','1');

    }
    public function lettersource(){
        return $this->belongsTo(LetterSource::class);

    }
}
