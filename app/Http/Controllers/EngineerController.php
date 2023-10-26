<?php

namespace App\Http\Controllers;

use App\Models\Engineer;
use Illuminate\Http\Request;
use Datatables;

class EngineerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('engineer.index',['title'=>'Engineer']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $html=view('engineer.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method()<>'POST') return redirect()->route('engineer.index');
            $validated =$this->validate($request,['eng_code'=>'required',
            'eng_first_name'=>'required',
            'eng_last_name'=>'required',
            'eng_phone'=>'required|unique:engineers,eng_phone',
            'eng_email'=>'required|unique:engineers,eng_email'],[],['eng_email'=>'email','eng_phone'=>'Phone number','eng_first_name'=>'first name','eng_last_name'=>'last name']);
            if($validated){
                $engineer=Engineer::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$engineer],200);
            }  
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function storePhoto(Request $request)
    {
        try {
            $request->validate(['photo_profile'=>'required|image|mimes:jpg,jpeg,png|max:2048']);
            $file=$request->file('photo_profile');
            $filename=time().'.'.$request->photo_profile->extension();
            $file->move('storage/photo',$filename);

            
            $engineer=Engineer::findOrFail($request->engineer_id);
            $engineer->photo_profile=$filename;
            $engineer->save();
            return response()->json(['success'=>true,'message'=>'photo profile updated..!']);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id)
    {
        try {
            $engineer=Engineer::findOrFail($id);
            return view('engineer.show',['title'=>'Show data','data'=>$engineer]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id)
    {
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('engineer.index');
            $engineer=Engineer::findOrFail($id);
            $html=view('engineer.edit',$engineer)->render();
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
                    ['eng_code'=>'required',
                    'eng_first_name'=>'required',
                    'eng_phone'=>'required',
                    'eng_email'=>'required']);
                    $engineer=Engineer::findOrFail($id);
                    $engineer->eng_code=$request->eng_code;
                    $engineer->eng_first_name=$request->eng_first_name;
                    $engineer->eng_last_name=$request->eng_last_name;
                    $engineer->eng_last_name=$request->eng_last_name;
                    $engineer->initial=$request->initial;
                    $engineer->eng_phone=$request->eng_phone;
                    $engineer->eng_email=$request->eng_email;
                    $engineer->eng_emil_alternate=$request->eng_emil_alternate;
                    $engineer->eng_status=$request->eng_status;
                    $engineer->save();

                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$engineer],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('engineer.index');
                    $engineer=Engineer::findOrFail($id);
                    $result=$engineer->delete();
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
            if(!$request->ajax()) return route('engineer.index');
            $engineers=Engineer::latest()->get();
            return Datatables::of($engineers)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('engineer.edit',$row->id??'');
                $destroy=route('engineer.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-info btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->addColumn('fullname',function($row){
                $showEngineer=route('engineer.show',$row->id);
                if($row->eng_status==0){
                    $fullName='<a href="'.$showEngineer.'">'.$row->eng_first_name.' '.$row->eng_last_name.'</a>';
                } else {
                    $fullName='<a href="'.$showEngineer.'">'.$row->eng_first_name.' '.$row->eng_last_name.'</a>';
                }
                return $fullName;
            })
            ->rawColumns(['action','fullname'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
