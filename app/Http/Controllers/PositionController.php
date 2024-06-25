<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use Datatables;

class PositionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('position.index',['title'=>'Master','title2'=>'Data','title3'=>'Position']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $html=view('position.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method()<>'POST') return redirect()->route('position.index');
            $validated =$this->validate($request,['position_code'=>'required|unique:positions,position_code',
            'position_name'=>'required','category'=>'required']);
            if($validated){
                $position=Position::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$position],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('position.index');
            $position=Position::findOrFail($id);
            $html=view('position.edit',$position)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method()<>'PUT') return redirect()->route('position.index');
                $request->validate(
                    ['position_name'=>'required',
                    'category'=>'required']);
                    $position=Position::findOrFail($id);
                    /* $position->position_code=$request->position_code; */
                    $position->position_name=$request->position_name;
                    $position->category=$request->category;
                    $position->save();

                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$position],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('position.index');
                    $position=Position::findOrFail($id);
                    $result=$position->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetch(Request $request)
    {
        try {
            if(!$request->ajax()) return route('position.index');
            $position=Position::latest()->get();
            return Datatables::of($position)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('position.edit',$row->id??'');
                $destroy=route('position.destroy',$row->id);
                $btn= '<button type="button" data-toggle="tooltip" title="Edit data" data-url="'.$edit.'" class="btn btn-primary btn-sm rounded-0 btn-table edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-edit"></i></button>
                       <button type="button" data-toggle="tooltip" title="Delete data" class="btn btn-danger btn-sm rounded-0 btn-table delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i></button>';
                return $btn;
            })->rawColumns(['action'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
