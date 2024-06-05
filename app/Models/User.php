<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Ramsey\Uuid\Uuid;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Uuids, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $table='users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'social_id',
        'social_type',
        'engineer_id',
        'level'
    ];

    public static function boot(){
        parent::boot();
        static::creating(function($data){
            $data->id=Uuid::uuid4()->toString();
            // $data->status=1;
        });        
    }
    public function access(){
        return $this->hasMany(UserAccess::class)->where('status','=','1');
    }

    /* public function accessActive(){

    } */

    public function engineer(){
        return $this->belongsTo(Engineer::class);
    }
    public function package(){
        return $this->hasMany(Package::class);
    }

    public function packages(){
        return $this->belongsToMany(Package::class,'user_accesses','user_id','package_id');
    }
    




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime','id'=>'string'
    ];
}
