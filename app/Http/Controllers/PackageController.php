<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Datatables;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        try {
            return view('package.index',['title'=>'Package','data'=>Package::all()]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function create()
    {
        try {
            $html=view('package.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method()<>'POST') return redirect()->route('package.index');
            $validated =$this->validate($request,['package_name'=>'required'],[],['package_name'=>'Package name']);
            if($validated){
                $package=Package::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$package],200);
            }  
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function edit($id)
    {
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('package.index');
            $package=Package::findOrFail($id);
            $html=view('package.edit',$package)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function update(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method()<>'PUT') return redirect()->route('package.index');
                $request->validate(
                    ['package_name'=>'required',
                    'status'=>'required']);
                    $package=Package::findOrFail($id);
                    $package->package_name=$request->package_name;
                    $package->total_days=$request->total_days;
                    $package->start_date=$request->start_date;
                    $package->end_date=$request->end_date;
                    $package->description=$request->description;
                    $package->status=$request->status;
                    $package->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$package],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('package.index');
                    $package=Package::findOrFail($id);
                    $result=$package->delete();
                    if($result){
                        return response()->json(['success'=>true,'message'=>'Data deleted..!','data'=>null],200);
                    }
                    return response()->json(['success'=>false,'message'=>'Failed to delete data..!, please check first','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }
    public function fetch()
    {
        try {
            if(!request()->ajax()) return route('engineer.index');
            $pkg=Package::oldest()->get();
            return Datatables::of($pkg)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('package.edit',$row->id??'');
                $destroy=route('package.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 btn-custom edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 btn-custom delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('status',function($data){
                if($data->status==1){
                    $status='<span class="badge badge-success">Active</span>';
                } else {
                    $status='<span class="badge badge-danger">Not Active</span>';
                }
                return $status;
            })
            ->rawColumns(['action','status'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
    
    
}
