<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Datatables;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            return view('workitem.index',['title'=>'Work item']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $html=view('workitem.create')->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method() <> 'POST') return redirect()->route('work.index');                
            $request->validate(
                    ['item_no'=>'required|string|unique:works,item_no',
                    'pay_item'=>'required|string',
                    'unit'=>'required','status'=>'required']);
                    $position=Work::create($request->all());
                    return response()->json(['success'=>true,'message'=>'Data created..!','data'=>$position],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function edit($id)
    {
        try {
            if(!request()->ajax() && request()->method()<>'POST') return redirect()->route('work.index');
            $work=Work::findOrFail($id);
            $html=view('workitem.edit',$work)->render();
            return response()->json($html);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request,$id)
    {
        try {
            if(!$request->ajax() && $request->method() <> 'PUT') return redirect()->route('work.index');
                $request->validate(
                    ['item_no'=>'required',
                    'pay_item'=>'required',
                    'unit'=>'required']);
                    $work=Work::findOrFail($id);
                    $work->item_no=$request->item_no;
                    $work->pay_item=$request->pay_item;
                    $work->unit=$request->unit;
                    $work->description=$request->description;
                    $work->status=$request->status;
                    $work->save();
                return response()->json(['success'=>true,'message'=>'Data Updated..!','data'=>$work],200);
            } catch (\Throwable $th) {
                throw $th;
            }
    }

    public function destroy($id)
    {
        try {
            if(!request()->ajax() && request()->method() <> 'DELETE') return redirect()->route('work.index');
                    $work=Work::findOrFail($id);
                    $result=$work->delete();
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
            if(!$request->ajax()) return route('work.index');
            $workItems=Work::latest()->get();
            return Datatables::of($workItems)->addIndexColumn()->addColumn('action',function($row){
                $edit=route('work.edit',$row->id??'');
                $destroy=route('work.destroy',$row->id);
                $btn= '<button type="button" data-url="'.$edit.'" class="btn btn-success btn-sm btn-custom rounded-0 edit-form" id="edit'.$row->id.'" data-id="'.$row->id.'"><i class="fas fa-pencil-alt"></i> Edit</button>
                       <button type="button" class="btn btn-danger btn-sm rounded-0 btn-custom delete" data-url="'.$destroy.'" id="destroy'.$row->id.'" data-id="'.$row->id.'"><i class="far fa-trash-alt"></i> Delete</button>';
                return $btn;
            })->rawColumns(['action'])->make(true);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function find(Request $request)
    {
        try {
            if(!$request->ajax() && $request->method()!='POST') return redirect()->route('work.index');
            $term=trim($request->q);
            if(empty($term)) {
                return response()->json([]);
            }
            
            $workItems=Work::where('item_no','like','%'.$term.'%')
            ->orWhere('pay_item','like','%'.$term.'%')
            ->limit(10)->get();
            $formatedWorkItems=[];
            foreach ($workItems as $workItem) {
                $formatedWorkItems[]=['id'=>$workItem->id,'text'=>$workItem->item_no.' - '.$workItem->pay_item];
            }
            return response()->json($formatedWorkItems);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
