<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use Illuminate\Http\Request;
use Datatables;

class InspectorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('engineer.inspector.index',['title'=>'Inspectors']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetch(Request $request)
    {
        try {
            if(!$request->ajax()) return route('engineer.index');
            $inspectors=Engineer::inspector()->get();
            return Datatables::of($inspectors)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('engineer.edit',$row->id);
                $destroy=route('engineer.destroy',$row->id);
                $addEmail=route('engineer.show.email',$row->id);
                $assignment= route('engineer.assignment',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-warning btn-sm rounded-0 add-email" data-url="'.$addEmail.'" id="show'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-location-arrow"></i> Add email</button>
                       <button type="button" class="btn btn-success btn-sm rounded-0 assignment" data-url="'.$assignment.'" id="assignment'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-check-circle"></i> Assignment</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('full_name',function($row){
                $show=route('engineer.show',$row->id);
                $fullName='<a href="'.$show.'" class="text text-bg-blue">'.$row->full_name.'</a>';
                return $fullName;
            })->editColumn('status',function($row){
                return $row->status == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">InActive</span>';
                    })
            ->rawColumns(['action','full_name','status'])->make(true);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
