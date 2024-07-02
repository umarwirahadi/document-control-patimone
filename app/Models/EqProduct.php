<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class EqProduct extends Model
{
    use HasFactory;
    protected $table='eq_products';
    protected $fillable=['eq_product_category_id','code','name','date','qty','unit','brand_name','model_name','warranty','warranty_expired','specification','remark','references','package_id','link1','link2','link3'];
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

    public function category(){
        return $this->hasOne(EqProductCategory::class,'id','eq_product_category_id');
    }

    public function package(){
        return $this->hasOne(Package::class,'id','package_id');
    }
}
