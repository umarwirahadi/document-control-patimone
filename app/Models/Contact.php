<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class Contact extends Model
{
    use HasFactory,SoftDeletes,Uuids;

    protected $table='contacts';
    protected $fillable=['first_name','last_name','phone_1','phone_2','primary_email','secondary_email','position_id','profile','type'];
    
}
