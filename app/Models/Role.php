<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory,Uuids;
    
    protected $primaryKey = 'id';
     
    /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
    protected $casts = [
        'id' => 'string',
    ];
}
