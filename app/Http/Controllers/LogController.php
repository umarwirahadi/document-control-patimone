<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('logs.index');
    }

    public function fetch(){
        try {
            // if(!request()->ajax()) return route('item.index');
            $lastActivity = Activity::all()->last();
            return response()->json($lastActivity);

            // return Datatables::of($lastActivity)->addIndexColumn()->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
