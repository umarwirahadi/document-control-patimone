<?php
namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

trait Uuids
{
protected static function boot(){
    parent::boot();
    static::creating(function($model){
        if(empty($model->{$model->getKeyName()})) {
            $model->{$model->getKeyName()}=Uuid::uuid4()->toString();
            // $model->{$model->getKeyName()}=Str::uuid()->toString();
        }
        $model->created_by=Auth::user()->id;
        // $model->status=1;
    });
    
    static::updating(function($model){
        $model->created_by=Auth::user()->id;
    });
}
public function getIncrementing(){
    return false;
}

public function getKeyType(){
    return 'string';
}

}