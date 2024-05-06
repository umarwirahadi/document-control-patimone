<?php

namespace App\Http\Controllers;

use App\Models\TypeOfAction;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Validation\Rule;

class TypeOfActionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        try {
            return view('type-of-action.index',['title'=>'Type of action']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $html=view('type-of-action.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('action-type.index');
            $validated =$this->validate($request,[
                'type_of_action'=>['required',Rule::unique('type_of_action')->where(function($query) use ($request){
                    return $query->where('type_of_action',$request->type_of_action)->Where('package_id',$request->package_id);
                })]]);                
            if($validated){

                $typeOfAction=TypeOfAction::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$typeOfAction],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function edit($id){
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('action-type.index');
            $typeOfAction=TypeOfAction::findOrFail($id);
            $html=view('type-of-action.edit',$typeOfAction)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id){
        try {
            if(!$request->ajax() && $request->method()<>'PUT') return redirect()->route('action-type.index');
            $request->validate(['type_of_action'=>'required','description'=>'required','package_id'=>'required']);               
                    $type=TypeOfAction::findOrFail($id);
                    $type->type_of_action=$request->type_of_action;
                    $type->description=$request->description;
                    $type->package_id=$request->package_id;
                    $type->status=$request->status;
                    $type->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$type],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('action-type.index');
                    $typeAction=TypeOfAction::findOrFail($id);
                    $result=$typeAction->delete();
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
            $typeOfAction=TypeOfAction::orderBy('created_at','asc')->with('package')->get();
            return DataTables::of($typeOfAction)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('action-type.edit',$row->id);
                $destroy=route('action-type.destroy',$row->id);
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
