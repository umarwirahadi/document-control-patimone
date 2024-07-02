<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class EqProductCategory extends Model
{
    use HasFactory;
    protected $table='eq_product_category';
    protected $fillable=['category_code','category_name','category_description','category_status'];
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
}
