<?php

namespace App\Http\Controllers;

use App\Ldap\Scopes\OnlyDocumentControls;
use App\Ldap\Scopes\OnlyInspectors;
use App\Ldap\User;
use Illuminate\Http\Request;
use LdapRecord\Models\Attributes\AccountControl;
use LdapRecord\Models\OpenLDAP\OrganizationalUnit;

class LdapController extends Controller
{
    public function index(){
        /* $u=[];
        $users = User::all();
        foreach ($users as $key => $user) {
            $u[]=$user->getName();
        } */

        // $users = User::where('company', '=', 'patimone')->get();
        // $users = User::where('cn=umar,dc=patimoneconsul,dc=id')->get();
        // $users = User::get();

        // $users = User::findBy('userprincipalname', 'santoso@patimoneconsul.id');
        $accountControl = new AccountControl();
       
        // $users = User::where('title','=','Document-controller')->get();
        // $users = User::withGlobalScope('document-controller',new OnlyDocumentControls)->get();
        $inspectors = User::withGlobalScope('inspector',new OnlyInspectors)->get();
        $temp=array();
        foreach ($inspectors as $key => $value) {
            // $mobile=implode(",",(array)$value->mobile);

            $temp[]=['code'=>$value->usncreated[0],'full_name'=>$value->getName(),'nickname'=>$value->givenname[0],'type'=>'inspector','phone1'=>implode(",",(array)$value->mobile),'description'=>'ldap','created_by'=>auth()->user()->id];
        }

        // $users = User::findBy('distinguishedname', 'UO=Supporting Staff');
        // $users = User::where('distinguishedname', 'umar@patimoneconsul.id');
        // $users = User::find('cn=umar wirahadi')->getDn();
        // $users=OrganizationalUnit::find('ou=Supporting Staff,ou=Users,dc=patimoneconsul,dc=id');
        //$descendants = $users->descendants()->get();
        /* if($users->userAccountControl[0] === '66048' ){
            return response()->json(['akun aktif']);
        } else {
            return response()->json(['akun tidak aktif']);
        } */
        return response()->json([$accountControl]);
    }
}
