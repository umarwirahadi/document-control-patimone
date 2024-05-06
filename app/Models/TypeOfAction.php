<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class TypeOfAction extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "type_of_action";
    protected $fillable = ['type_of_action','description','package_id','status','created_by','updated_by'];
    protected $casts = [
        'id' => 'string'
    ];
    public function package(){
        return $this->belongsTo(Package::class);
    }

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

}
