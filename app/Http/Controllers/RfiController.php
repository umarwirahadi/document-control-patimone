<?php

namespace App\Http\Controllers;

use App\Models\Rfi;
use Illuminate\Http\Request;
use Datatables;

class RfiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         try {
            return view('rfi.index',['title'=>'Request For Inspection']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function createFirst()
    {
        try {
            $rfi=Rfi::create(['submitted_date'=>date('Y-m-d'),'submitted_time'=>date('h:m:s'),'reference_no'=>'0','doc_number'=>'0','specification_std'=>'-','status'=>'0']);
            return redirect()->route('rfi.create',$rfi->id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create($id)
    {
        try {
            $rfi=Rfi::findOrFail($id);
            return view('rfi.create',['title'=>'Create RFI','data'=>$rfi]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function createQuality()
    {
        try {
            $html=view('rfi.quality-report.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function createQuantity()
    {
        try {
            $html=view('rfi.quantity-report.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
