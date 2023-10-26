<?php

namespace App\Http\Controllers;

use App\Models\IncomingLetter;
use Illuminate\Http\Request;
use Datatables;

class IncomingLetterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('incoming.index',['title'=>'Incoming Letter']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            return view('incoming.create',['title'=>'Create data']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetchLetter(Request $request)
    {
        try {
            if(!$request->ajax()) return route('incoming.index');
            $incomingLetters=IncomingLetter::LetterType('letter')->get();
            return Datatables::of($incomingLetters)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('engineer.edit',$row->id??'');
                $destroy=route('engineer.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function fetchTransmittal(Request $request)
    {
        try {
            if(!$request->ajax()) return route('incoming.index');
            $incomingLetters=IncomingLetter::LetterType('transmittal')->get();
            return Datatables::of($incomingLetters)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('engineer.edit',$row->id??'');
                $destroy=route('engineer.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->rawColumns(['action'])->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function autocompleteRefNumber(Request $request)
    {
        try {
            $references=IncomingLetter::select('incoming_ref_no')->where("incoming_ref_no","LIKE","%{$request->query}%")->get();
            return response()->json($references);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
