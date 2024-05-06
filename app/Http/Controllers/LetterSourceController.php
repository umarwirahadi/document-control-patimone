<?php

namespace App\Http\Controllers;

use App\Models\LetterSource;
use App\Models\Package;
use Illuminate\Http\Request;
use Datatables;

class LetterSourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        try {
            return view('lettersource.index',['title'=>'Letter source']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(){
        try {
            $packages=Package::all();
            $html=view('lettersource.create',compact('packages'))->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('letter-source.index');
            $validated =$this->validate($request,['source_name'=>'required|unique:letter_sources,source_name',
            'unit'=>'required']);
            if($validated){
                $lettersource=LetterSource::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$lettersource],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id){
        try {
            if(!request()->ajax() && request()->method() <> 'POST') return redirect()->route('letter-source.index');
            $position=LetterSource::findOrFail($id);
            $html=view('lettersource.edit',$position)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id){        
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('letter-source.index');
                $request->validate(
                    ['unit'=>'required']);
                    $lettersource=LetterSource::findOrFail($id);
                    $lettersource->source_name= $request->source_name;
                    $lettersource->unit= $request->unit;
                    $lettersource->package_id= $request->package_id;
                    $lettersource->description= $request->description;
                    $lettersource->status= $request->status;
                    $lettersource->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$lettersource],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('letter-source.index');
                    $lettersource=LetterSource::findOrFail($id);
                    $result=$lettersource->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function fetch(){
        try {
            if(!request()->ajax()) return route('letter-source.index');
            $lettersources=LetterSource::orderBy('created_at','asc')->with('package')->get();
            return DataTables::of($lettersources)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('letter-source.edit',$row->id??'');
                $destroy=route('letter-source.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-primary btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('description',function($row){
                return strip_tags($row->description);
            })
            ->editColumn('status',function($data){
                if($data->status==1){
                    $status='<span class="badge badge-success">Active</span>';
                } else {
                    $status='<span class="badge badge-danger">InActive</span>';
                }
                return $status;
            })
            ->rawColumns(['action','status','description'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
