<?php

namespace App\Ldap;

use Illuminate\Contracts\Auth\Authenticatable;
use LdapRecord\Models\Concerns\CanAuthenticate;
use LdapRecord\Models\Model;

class User extends Model implements Authenticatable
{
    use CanAuthenticate;
    /**
     * The object classes of the LDAP model.
     *
     * @var array
     */
    public static $objectClasses = [
        'top',
        'person',
        'organizationalperson',
        'user',
    ];

    protected $guidKey ='uuid';    

    // protected $connection = 'patimoneconsul.id';
}
