<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        // $user = auth()->user();
        // $user->load("access"); 
        $useraccess=UserAccess::where('user_id','=',auth()->user()->id)->get();   
        // return response()->json($useraccess);   
        $data=['title'=>'My Profile'];
        return view('profile.me',compact('useraccess','data'));
    }
}
