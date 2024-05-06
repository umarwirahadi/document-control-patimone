<?php

namespace App\Http\Controllers;

use App\Models\Documenttype;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Validation\Rule;

class DocumenttypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        try {
            return view('components.documenttype.index',['title'=>'Document type']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create(){
        try {
            $html=view('components.documenttype.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(Request $request){
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('documenttype.index');
            $validated =$this->validate($request,[
                'document_type_name'=>['required',Rule::unique('documenttypes')->where(function($query) use ($request){
                    return $query->where('document_type_name',$request->document_type_name)->Where('package_id',$request->package_id);
                })]]);                
            if($validated){
                $documentType=Documenttype::create($request->all());
                return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$documentType],200);
            }
            return response()->json(['success'=>false,'message'=>'Create data failed..!','data'=>null],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function edit($id){

    }
    public function update(Request $request,$id){

    }
    public function destroy($id){

    }
    public function fetch(){
        try {
            if(!request()->ajax()) return route('documenttype.index');
            $documentTypes=Documenttype::orderBy('created_at','asc')->with('package')->get();
            return DataTables::of($documentTypes)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('documenttype.edit',$row->id);
                $destroy=route('documenttype.destroy',$row->id);
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
