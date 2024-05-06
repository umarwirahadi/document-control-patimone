<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransmittalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            return view('transmittal.index',['title'=>'Transmittal document']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(){
        try {
            return view('transmittal.create',['title'=>'Create document Circulation']);
        } catch (\Throwable $th) {
            //throw $th;
            
        }
    }
}
