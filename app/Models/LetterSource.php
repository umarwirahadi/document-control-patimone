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
    protected $casts = [
        'id' => 'string'
    ];

    protected $fillable=['source_name','unit','description','status'];
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

    public function scopeLetterSourceStatus($query,$param)
    {
        return $query->where('status',$param)->orderBy('created_at','desc');
        
    }

}
