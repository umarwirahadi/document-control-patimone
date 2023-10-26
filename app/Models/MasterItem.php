<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MasterItem extends Model
{
    use HasFactory;
    protected $table='master_items';
    protected $fillable=['item_code','item_name','item_category','item_status','item_description'];
    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->created_by=Auth::user()->id;
            $data->item_status=1;
        });

        static::updating(function($data){
            $data->updated_by=Auth::user()->id;
        });
    }

    public function scopeItemStatus($query,$param)
    {
        return $query->where('item_status',$param);
    }
    public function scopeCategory($query,$param)
    {
        return $query->where('item_category',$param);
    }
    

}
