<?php
namespace App\Scopes;
Use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PackageScope implements Scope
{

    /* this feature is for manage every user access that have package assigned */

    public function apply(Builder $builder,Model $model){
        if(!empty($packageids=\request()->query('q'))){
            $builder->whereIn('package_id',$packageids);
        }
    }
}