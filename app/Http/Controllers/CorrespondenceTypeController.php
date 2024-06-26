<?php

namespace App\Http\Controllers;

use App\Models\CorrespondenceType;
use App\Models\LetterSource;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Validation\Rule;

class CorrespondenceTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        try {
            return view('corres-type.index',['title'=>'Master','title2'=>'Utility','title3'=>'Correspondence type']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(){
        try {
            $html=view('corres-type.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('corres-type.index');
            /* make validation for two or more conditions with custom unique column */
            $validated =$this->validate($request,[
                'corres_type'=>['required',Rule::unique('correspondence_types')->where(function($query) use ($request){
                    return $query->where('letter_source_id','=',$request->letter_source_id)->where('corres_type','=',$request->corres_type)->Where('type',$request->type);
                })],
                'type'=>'required','letter_source_id']);
                if($validated){
                    $letterSource=LetterSource::find($request->letter_source_id);
                    $lettersource=CorrespondenceType::create([
                        'corres_type'=>$request->corres_type,
                        'description'=>$request->description,
                        'content_template'=>$request->content_template,
                        'type'=>$request->type,
                        'letter_source_id'=>$request->letter_source_id,
                        'package_id'=>$letterSource->package_id ?? '-',
                        'to_attention'=>$request->to_attention,
                        'status'=>'1',
                    ]);
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$lettersource],200);
                }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function edit($id){
        try {
            if(!request()->ajax() && request()->method() <> 'POST') return redirect()->route('corres-type.index');
            $position=CorrespondenceType::findOrFail($id);
            $html=view('corres-type.edit',$position)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id){
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('corres-type.index');
                $request->validate(
                    ['type'=>'required','correspondence_type']);
                    $correspondenceType=CorrespondenceType::findOrFail($id);
                    $correspondenceType->package_id= $request->package_id;
                    $correspondenceType->correspondence_type= $request->correspondence_type;
                    $correspondenceType->type= $request->type;
                    $correspondenceType->description= $request->description;
                    $correspondenceType->status= $request->status;
                    $correspondenceType->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$correspondenceType],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id){
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('corres-type.index');
                    $lettersource=CorrespondenceType::findOrFail($id);
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
            if(!request()->ajax()) return route('corres-type.index');
            $lettersources=CorrespondenceType::orderBy('created_at','asc')->with('package')->get();
            return DataTables::of($lettersources)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('corres-type.edit',$row->id??'');
                $destroy=route('corres-type.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-primary btn-sm rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->editColumn('description',function($row){
                return strip_tags($row->description);
            })->editColumn('package_name',function($row){
                return strip_tags($row->package->package_name ?? '-');
            })
            ->editColumn('status',function($data){
                if($data->status==1){
                    $status='<span class="badge badge-success">Active</span>';
                } else {
                    $status='<span class="badge badge-danger">InActive</span>';
                }
                return $status;
            })
            ->rawColumns(['action','status','description','package_name'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
